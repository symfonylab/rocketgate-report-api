<?php


namespace SymfonyLab\RocketGateReport;


use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;

final class RequestProcessor
{
    /**
     * @var ClientResolver
     */
    private $clientResolver;
    /**
     * @var AccessLogsCleaner
     */
    private $accessLogsCleaner;
    /**
     * @var ResponseHandlerInterface[]
     */
    private $handlers = [];
    /**
     * @var int
     */
    private $maxAttempt;

    /**
     * Client constructor.
     * @param ClientResolver $clientResolver
     * @param AccessLogsCleaner $accessLogsCleaner
     * @param ResponseHandlerInterface[] $handlers
     * @param int $maxAttempt
     */
    public function __construct(ClientResolver $clientResolver, AccessLogsCleaner $accessLogsCleaner, array $handlers, int $maxAttempt=50)
    {
        $this->clientResolver = $clientResolver;
        $this->accessLogsCleaner = $accessLogsCleaner;
        $this->handlers = $handlers;
        $this->maxAttempt = $maxAttempt;
    }


    public function request(RequestInterface $request, int $iteration = 0): ResponseInterface
    {
        try {
            $httpServer = $this->clientResolver->resolve($request->getMerchant());
            $response = $httpServer->get($request->getLink(), [
                RequestOptions::QUERY => $request->getParams()
            ]);
            if (200 !== $response->getStatusCode()) {
                return $this->hailMaryAttemptRequest($request, $iteration);
            }
            $data = $response->getBody()->getContents();

            if ($this->accessLogsCleaner->check($data)) {
                try {
                    $this->accessLogsCleaner->clear($request->getMerchant());
                } catch (\Exception $e) {
                } finally {
                    return $this->hailMaryAttemptRequest($request, $iteration);
                }
            }

            foreach ($this->handlers as $handler) {
                if ($handler->support($request)) {
                    return $handler->handle($request, $response);
                }

                throw new \LogicException('Response handler not found');
            }

        } catch (GuzzleException $e) {
            return $this->hailMaryAttemptRequest($request, $iteration);
        }
    }

    private function hailMaryAttemptRequest(RequestInterface $request, int $iteration): ResponseInterface
    {
        if ($iteration > $this->maxAttempt) {
            throw new \RuntimeException('Max attempts to request');
        }

        sleep(1);

        return $this->request($request, $iteration + 1);
    }
}
