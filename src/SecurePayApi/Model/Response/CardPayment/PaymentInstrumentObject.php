<?php

namespace SecurePayApi\Model\Response\CardPayment;

use SecurePayApi\Model\DataObject;

class PaymentInstrumentObject extends DataObject
{
    public const CREATED_AT = 'createdAt';
    public const CUSTOMER_CODE = 'customerCode';
    public const TOKEN = 'token';
    public const BRAND_TYPE = 'brandType';
    public const BRAND_CATEGORY = 'brandCategory';
    public const SCHEME = 'scheme';
    public const BIN = 'bin';
    public const LAST_4 = 'last4';
    public const EXPIRY_MONTH = 'expiryMonth';
    public const EXPIRY_YEAR = 'expiryYear';

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
     * Getter for Brand Type.
     *
     * @return string
     */
    public function getBrandType(): string
    {
        return $this->getData(self::BRAND_TYPE);
    }

    /**
     * Getter for Brand Category.
     *
     * @return string
     */
    public function getBrandCategory(): string
    {
        return $this->getData(self::BRAND_CATEGORY);
    }

    /**
     * Getter for Scheme.
     *
     * @return string
     */
    public function getScheme(): string
    {
        return $this->getData(self::SCHEME);
    }

    /**
     * Getter for Bin.
     *
     * @return string
     */
    public function getBin(): ?string
    {
        return $this->getData(self::BIN);
    }

    /**
     * Getter for Last 4.
     *
     * @return string
     */
    public function getLast4(): string
    {
        return $this->getData(self::LAST_4);
    }

    /**
     * Getter for Expiry Month.
     *
     * @return string
     */
    public function getExpiryMonth(): string
    {
        return $this->getData(self::EXPIRY_MONTH);
    }

    /**
     * Getter for Expiry Year.
     *
     * @return string
     */
    public function getExpiryYear(): string
    {
        return $this->getData(self::EXPIRY_YEAR);
    }
}
