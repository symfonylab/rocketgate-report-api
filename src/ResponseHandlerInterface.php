<?php


namespace SymfonyLab\RocketGateReport;


interface ResponseHandlerInterface
{
    public function support(RequestInterface $request): bool;

    public function handle(RequestInterface $request, \Psr\Http\Message\ResponseInterface $response): ResponseInterface;
}
