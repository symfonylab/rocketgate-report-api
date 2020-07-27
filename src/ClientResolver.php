<?php


namespace SymfonyLab\RocketGateReport;


class ClientResolver
{
    /**
     * @var string
     */
    private $prodHost;

    /**
     * @var string
     */
    private $devHost;

    public function __construct(string $prodHost, string $devHost)
    {
        $this->prodHost = $prodHost;
        $this->devHost = $devHost;
    }

    public function resolve(MerchantInterface $merchant): \GuzzleHttp\Client
    {
        $host = $this->devHost;
        if ($merchant->getEnv() === MerchantInterface::ENV_PROD) {
            $host = $this->prodHost;
        }

        return new \GuzzleHttp\Client([
            'base_uri' => $host
        ]);
    }
}
