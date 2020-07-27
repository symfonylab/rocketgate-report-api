<?php


namespace SymfonyLab\RocketGateReport;


interface RequestInterface
{
    public function getLink(): string;

    public function getParams(): array;

    public function getMerchant(): MerchantInterface;
}
