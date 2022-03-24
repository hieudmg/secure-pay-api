<?php

namespace SecurePayApi\Model\Response\CardPayment;

use SecurePayApi\Model\DataObject;

class CancelPreAuthObject extends DataObject
{
    public const MERCHANT_CODE = 'merchantCode';
    public const IP = 'ip';
    public const AMOUNT = 'amount';
    public const ORDER_ID = 'orderId';
    public const GATEWAY_RESPONSE_CODE = 'gatewayResponseCode';
    public const GATEWAY_RESPONSE_MESSAGE = 'gatewayResponseMessage';

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
     * Getter for Order Id.
     *
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->getData(self::ORDER_ID);
    }

    /**
     * Getter for Gateway Response Code.
     *
     * @return string
     */
    public function getGatewayResponseCode(): string
    {
        return $this->getData(self::GATEWAY_RESPONSE_CODE);
    }

    /**
     * Getter for Gateway Response Message.
     *
     * @return string
     */
    public function getGatewayResponseMessage(): string
    {
        return $this->getData(self::GATEWAY_RESPONSE_MESSAGE);
    }
}
