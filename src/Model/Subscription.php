<?php


namespace SymfonyLab\RocketGateReport\Model;


final class Subscription implements SubscriptionInterface
{
    /**
     * @var string
     */
    private $affiliate;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var string
     */
    private $customerPassword;

    /** @var string
     */
    private $customerUsername;

    /**
     * @var string
     */
    private $customerEmail;

    /**
     * @var string
     */
    private $customerFirstName;

    /**
     * @var string
     */
    private $customerLastName;

    /**
     * @var float
     */
    private $initialAmount;

    /**
     * @var string
     */
    private $initialFrequency;

    /**
     * @var string
     */
    private $lastTransactionStatus;

    /**
     * @var string
     */
    private $merchantCustomerId;

    /**
     * @var int
     */
    private $merchantId;

    /**
     * @var string
     */
    private $merchantInvoiceId;

    /**
     * @var string
     */
    private $merchantName;

    /**
     * @var string
     */
    private $merchantProductId;

    /**
     * @var int
     */
    private $merchantSiteId;

    /**
     * @var string
     */
    private $merchantSiteName;

    /**
     * @var string
     */
    private $payNumL4;

    /**
     * @var float
     */
    private $rebillAmount;

    /**
     * @var string
     */
    private $rebillCancelBy;

    /**
     * @var \DateTimeImmutable|null
     */
    private $rebillCancelRequestDate;

    /**
     * @var \DateTimeImmutable
     */
    private $rebillDate;

    /**
     * @var \DateTimeImmutable|null
     */
    private $rebillEndDate;

    /**
     * @var string
     */
    private $rebillFrequency;

    /**
     * @var \DateTimeImmutable|null
     */
    private $rebillLastUpdatedDate;

    /**
     * @var \DateTimeImmutable
     */
    private $rebillStartDate;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $stickyMid;

    /**
     * Subscription constructor.
     * @param string $affiliate
     * @param string $currency
     * @param string $customerPassword
     * @param string $customerUsername
     * @param string $customerEmail
     * @param string $customerFirstName
     * @param string $customerLastName
     * @param float $initialAmount
     * @param string $initialFrequency
     * @param string $lastTransactionStatus
     * @param string $merchantCustomerId
     * @param int $merchantId
     * @param string $merchantInvoiceId
     * @param string $merchantName
     * @param string $merchantProductId
     * @param int $merchantSiteId
     * @param string $merchantSiteName
     * @param string $payNumL4
     * @param float $rebillAmount
     * @param string $rebillCancelBy
     * @param \DateTimeImmutable|null $rebillCancelRequestDate
     * @param \DateTimeImmutable $rebillDate
     * @param \DateTimeImmutable|null $rebillEndDate
     * @param string $rebillFrequency
     * @param \DateTimeImmutable|null $rebillLastUpdatedDate
     * @param \DateTimeImmutable $rebillStartDate
     * @param string $status
     * @param string $stickyMid
     */
    public function __construct($affiliate, $currency, $customerPassword, $customerUsername, $customerEmail, $customerFirstName, $customerLastName, $initialAmount, $initialFrequency, $lastTransactionStatus, $merchantCustomerId, $merchantId, $merchantInvoiceId, $merchantName, $merchantProductId, $merchantSiteId, $merchantSiteName, $payNumL4, $rebillAmount, $rebillCancelBy, \DateTimeImmutable $rebillCancelRequestDate, \DateTimeImmutable $rebillDate, \DateTimeImmutable $rebillEndDate, $rebillFrequency, \DateTimeImmutable $rebillLastUpdatedDate, \DateTimeImmutable $rebillStartDate, $status, $stickyMid)
    {
        $this->affiliate = $affiliate;
        $this->currency = $currency;
        $this->customerPassword = $customerPassword;
        $this->customerUsername = $customerUsername;
        $this->customerEmail = $customerEmail;
        $this->customerFirstName = $customerFirstName;
        $this->customerLastName = $customerLastName;
        $this->initialAmount = $initialAmount;
        $this->initialFrequency = $initialFrequency;
        $this->lastTransactionStatus = $lastTransactionStatus;
        $this->merchantCustomerId = $merchantCustomerId;
        $this->merchantId = $merchantId;
        $this->merchantInvoiceId = $merchantInvoiceId;
        $this->merchantName = $merchantName;
        $this->merchantProductId = $merchantProductId;
        $this->merchantSiteId = $merchantSiteId;
        $this->merchantSiteName = $merchantSiteName;
        $this->payNumL4 = $payNumL4;
        $this->rebillAmount = $rebillAmount;
        $this->rebillCancelBy = $rebillCancelBy;
        $this->rebillCancelRequestDate = $rebillCancelRequestDate;
        $this->rebillDate = $rebillDate;
        $this->rebillEndDate = $rebillEndDate;
        $this->rebillFrequency = $rebillFrequency;
        $this->rebillLastUpdatedDate = $rebillLastUpdatedDate;
        $this->rebillStartDate = $rebillStartDate;
        $this->status = $status;
        $this->stickyMid = $stickyMid;
    }

    /**
     * @return string
     */
    public function getAffiliate()
    {
        return $this->affiliate;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return string
     */
    public function getCustomerPassword()
    {
        return $this->customerPassword;
    }

    /**
     * @return string
     */
    public function getCustomerUsername()
    {
        return $this->customerUsername;
    }

    /**
     * @return string
     */
    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

    /**
     * @return string
     */
    public function getCustomerFirstName()
    {
        return $this->customerFirstName;
    }

    /**
     * @return string
     */
    public function getCustomerLastName()
    {
        return $this->customerLastName;
    }

    /**
     * @return float
     */
    public function getInitialAmount()
    {
        return $this->initialAmount;
    }

    /**
     * @return string
     */
    public function getInitialFrequency()
    {
        return $this->initialFrequency;
    }

    /**
     * @return string
     */
    public function getLastTransactionStatus()
    {
        return $this->lastTransactionStatus;
    }

    /**
     * @return string
     */
    public function getMerchantCustomerId()
    {
        return $this->merchantCustomerId;
    }

    /**
     * @return int
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * @return string
     */
    public function getMerchantInvoiceId()
    {
        return $this->merchantInvoiceId;
    }

    /**
     * @return string
     */
    public function getMerchantName()
    {
        return $this->merchantName;
    }

    /**
     * @return string
     */
    public function getMerchantProductId()
    {
        return $this->merchantProductId;
    }

    /**
     * @return int
     */
    public function getMerchantSiteId()
    {
        return $this->merchantSiteId;
    }

    /**
     * @return string
     */
    public function getMerchantSiteName()
    {
        return $this->merchantSiteName;
    }

    /**
     * @return string
     */
    public function getPayNumL4()
    {
        return $this->payNumL4;
    }

    /**
     * @return float
     */
    public function getRebillAmount()
    {
        return $this->rebillAmount;
    }

    /**
     * @return string
     */
    public function getRebillCancelBy()
    {
        return $this->rebillCancelBy;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getRebillCancelRequestDate()
    {
        return $this->rebillCancelRequestDate;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getRebillDate()
    {
        return $this->rebillDate;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getRebillEndDate()
    {
        return $this->rebillEndDate;
    }

    /**
     * @return string
     */
    public function getRebillFrequency()
    {
        return $this->rebillFrequency;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getRebillLastUpdatedDate()
    {
        return $this->rebillLastUpdatedDate;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getRebillStartDate()
    {
        return $this->rebillStartDate;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getStickyMid()
    {
        return $this->stickyMid;
    }

}
