<?php


namespace SymfonyLab\RocketGateReport;


interface MerchantInterface
{
    const ENV_PROD = 'prod';
    const ENV_DEV = 'dev';

    public function getEnv(): string;

    public function getId(): string;

    public function getPassword(): string;

    public function getName(): string;

    public function getAdminLogin(): string;

    public function getAdminPassword(): string;
}
