<?php

namespace SecurePayApi\Model\Response\CardPayment;

use SecurePayApi\Model\DataObject;

class DeletePaymentInstrumentObject extends DataObject
{
    public const CUSTOMER_CODE = 'customerCode';
    public const TOKEN = 'token';
    public const DELETED = 'deleted';

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
     * Getter for Deleted.
     *
     * @return bool
     */
    public function getDeleted(): bool
    {
        return $this->getData(self::DELETED);
    }
}
