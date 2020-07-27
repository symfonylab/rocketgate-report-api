<?php


namespace SymfonyLab\RocketGateReport\Model;


interface SubscriptionInterface
{
    const REBILL_CANCEL_BY_NON_RECURRING_MEMBERSHIP = 'Non-Recurring Membership';
    const REBILL_CANCEL_BY_REBILL_FAILED = 'Rebill Failed';
    const REBILL_CANCEL_BY_USER = 'User';
    const REBILL_CANCEL_BY_SUPPORT = 'Support';
    const REBILL_CANCEL_BY_CHARGEBACK = 'Chargeback';

    const STATUS_ACTIVE = 'Active';
    const STATUS_CANCELED = 'Canceled';
    const STATUS_SET_TO_CANCEL = 'Set To Cancel';
    const STATUS_SUSPENDED = 'Suspended';

    /**
     * Affiliate code.
     * @return string
     */
    public function getAffiliate();

    /**
     * The currency code of the subscription.
     * @return string
     */
    public function getCurrency();

    /**
     * Customer Password.
     * @return string
     */
    public function getCustomerPassword();

    /**
     * Customer Username.
     * @return string
     */
    public function getCustomerUsername();

    /**
     * Customer Email.
     * @return string
     */
    public function getCustomerEmail();

    /**
     * Customer First Name.
     * @return string
     */
    public function getCustomerFirstName();

    /**
     * Customer Last Name.
     * @return string
     */
    public function getCustomerLastName();

    /**
     * Initial transaction amount for the subscription.
     * @return float
     */
    public function getInitialAmount();

    /**
     * Initial frequency for the subscription. For example was this a 3day trial, 30 day, or MONTHLY subscription.
     * @return string
     */
    public function getInitialFrequency();

    /**
     * Status of the last transaction related to this subscription.
     * @return string
     */
    public function getLastTransactionStatus();

    /**
     * Customer ID of cardholder in merchant’s internal systems
     * @return string
     */
    public function getMerchantCustomerId();

    /**
     * Merchant’s RocketGate identification number.
     * @return int
     */
    public function getMerchantId();

    /**
     * Invoice / Subscription ID applied to transaction by merchant’s internal systems.
     * @return string
     */
    public function getMerchantInvoiceId();

    /**
     * Merchant’s RocketGate identification name
     * @return string
     */
    public function getMerchantName();

    /**
     * Merchant’s product ID.
     * @return string
     */
    public function getMerchantProductId();

    /**
     * Optional site identification number.
     * @return int
     */
    public function getMerchantSiteId();

    /**
     * Optional site identification name. This can be configured in Mission Control.
     * @return string
     */
    public function getMerchantSiteName();

    /**
     * The last four digits of the credit card number associated with this subscription
     * @return string
     */
    public function getPayNumL4();

    /**
     * Amount of recurring charges
     * @return float
     */
    public function getRebillAmount();

    /**
     * Indicates the reason for the cancel date
     * @return string
     */
    public function getRebillCancelBy();

    /**
     * Indicates the date a cancelation was requested.
     * @return \DateTimeImmutable|null
     */
    public function getRebillCancelRequestDate();

    /**
     * Next scheduled rebill date
     * @return \DateTimeImmutable
     */
    public function getRebillDate();

    /**
     * If canceled or set to cancel, the scheduled cancel date.
     * @return \DateTimeImmutable|null
     */
    public function getRebillEndDate();

    /**
     * Frequency of recurring charge (monthly, quarterly, annually, …)
     * @return string
     */
    public function getRebillFrequency();

    /**
     * The date this subscription was last updated.
     * @return \DateTimeImmutable|null
     */
    public function getRebillLastUpdatedDate();

    /**
     * The initial start date for this subscription
     * @return \DateTimeImmutable
     */
    public function getRebillStartDate();

    /**
     * Status of the subscription
     * @return string
     */
    public function getStatus();

    /**
     * Merchant Account Sequence # set for StickyRebills option. 0=Not set.
     * @return string
     */
    public function getStickyMid();
}
