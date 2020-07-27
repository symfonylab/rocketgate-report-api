<?php


namespace SymfonyLab\RocketGateReport;


final class Merchant implements MerchantInterface
{
    /**
     * @var string
     */
    private $env;
    /**
     * @var string
     */
    private $id;
    /**
     * @var string
     */
    private $password;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $adminLogin;
    /**
     * @var string
     */
    private $adminPassword;

    /**
     * Merchant constructor.
     * @param string $env
     * @param string $id
     * @param string $password
     * @param string $name
     * @param string $adminLogin
     * @param string $adminPassword
     */
    public function __construct(string $env, string $id, string $password, string $name, string $adminLogin, string $adminPassword)
    {
        $this->env = $env;
        $this->id = $id;
        $this->password = $password;
        $this->name = $name;
        $this->adminLogin = $adminLogin;
        $this->adminPassword = $adminPassword;
    }

    /**
     * @return string
     */
    public function getEnv(): string
    {
        return $this->env;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getAdminLogin(): string
    {
        return $this->adminLogin;
    }

    /**
     * @return string
     */
    public function getAdminPassword(): string
    {
        return $this->adminPassword;
    }
}
