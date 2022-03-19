<?php

namespace SecurePayApi\Model\Response\CardPayment;

use SecurePayApi\Model\DataObject;

class PreAuthPaymentObject extends DataObject
{
    public const CREATED_AT = 'createdAt';
    public const MERCHANT_CODE = 'merchantCode';
    public const CUSTOMER_CODE = 'customerCode';
    public const TOKEN = 'token';
    public const IP = 'ip';
    public const AMOUNT = 'amount';
    public const STATUS = 'status';
    public const ORDER_ID = 'orderId';
    public const BANK_TRANSACTION_ID = 'bankTransactionId';
    public const GATEWAY_RESPONSE_CODE = 'gatewayResponseCode';
    public const GATEWAY_RESPONSE_MESSAGE = 'gatewayResponseMessage';
    public const ERROR_CODE = 'errorCode';

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
     * Getter for Customer Code.
     *
     * @return string
     */
    public function getCustomerCode(): string
    {
        return $this->getData(self::CUSTOMER_CODE);
    }

    /**
     * Getter for Token.
     *
     * @return string
     */
    public function getToken(): string
    {
        return $this->getData(self::TOKEN);
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
     * Getter for Status.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->getData(self::STATUS);
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
     * Getter for Bank Transaction Id.
     *
     * @return string
     */
    public function getBankTransactionId(): string
    {
        return $this->getData(self::BANK_TRANSACTION_ID);
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

    /**
     * Getter for Error Code.
     *
     * @return string
     */
    public function getErrorCode(): ?string
    {
        return $this->getData(self::ERROR_CODE);
    }
}
