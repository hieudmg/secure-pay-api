<?php

namespace SecurePayApi\Model\Response\CardPayment;

use SecurePayApi\Model\DataObject;
use SecurePayApi\Model\Response\ThreeDSecure\ThreeDOrderDetailsObject;

class PaymentOrderObject extends DataObject
{
    public const CREATED_AT = 'createdAt';
    public const MERCHANT_CODE = 'merchantCode';
    public const IP = 'ip';
    public const AMOUNT = 'amount';
    public const ORDER_TYPE = 'orderType';
    public const ORDER_ID = 'orderId';
    public const ORDER_TOKEN = 'orderToken';
    public const THREED_SECURE_DETAILS = 'threedSecureDetails';
    protected array $objectMap = [
        self::THREED_SECURE_DETAILS => ThreeDOrderDetailsObject::class,
    ];

    /**
     * Getter for Created At.
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * Getter for Merchant Code.
     *
     * @return string
     */
    public function getMerchantCode(): string
    {
        return $this->getData(self::MERCHANT_CODE);
    }

    /**
     * Getter for Ip.
     *
     * @return string
     */
    public function getIp(): string
    {
        return $this->getData(self::IP);
    }

    /**
     * Getter for Amount.
     *
     * @return string
     */
    public function getAmount(): string
    {
        return $this->getData(self::AMOUNT);
    }

    /**
     * Getter for Order Type.
     *
     * @return string
     */
    public function getOrderType(): string
    {
        return $this->getData(self::ORDER_TYPE);
    }

    /**
     * Getter for Order Id.
     *
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->getData(self::ORDER_ID);
    }

    /**
     * Getter for Order Token.
     *
     * @return string
     */
    public function getOrderToken(): string
    {
        return $this->getData(self::ORDER_TOKEN);
    }

    /**
     * Getter for ThreeD Secure Details.
     *
     * @return ThreeDOrderDetailsObject
     */
    public function getThreedSecureDetails(): ?ThreeDOrderDetailsObject
    {
        return $this->getData(self::THREED_SECURE_DETAILS);
    }
}
