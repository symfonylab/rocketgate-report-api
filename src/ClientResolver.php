<?php


namespace SymfonyLab\RocketGateReport;


class ClientResolver
{
    const HOST_DEV = 'https://dev-my.rocketgate.com/com/rocketgate/gateway/xml/';
    const HOST_PROD = 'https://my.rocketgate.com/com/rocketgate/gateway/xml/';

    public function resolve(MerchantInterface $merchant): \GuzzleHttp\Client
    {
        $host = self::HOST_DEV;
        if ($merchant->getEnv() === MerchantInterface::ENV_PROD) {
            $host = self::HOST_PROD;
        }

        return new \GuzzleHttp\Client([
            'base_uri' => $host
        ]);
    }
}
