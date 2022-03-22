<?php

namespace SecurePayApi\Model\Response\ApplePay;

use SecurePayApi\Model\DataObject;

class InitiateSessionResponseObject extends DataObject
{
    public const MERCHANT_CODE = 'merchantCode';
    public const IP = 'ip';
    public const SESSION_OBJECT = 'sessionObject';

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
     * Getter for Session Object.
     *
     * @return array
     */
    public function getSessionObject(): array
    {
        return $this->getData(self::SESSION_OBJECT);
    }
}
