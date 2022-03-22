<?php

namespace SecurePayApi\Model\Response\FraudGuard;

use SecurePayApi\Model\DataObject;

class PerformFraudDetectionResponseObject extends DataObject
{
    public const ORDER_ID = 'orderId';
    public const FRAUD_CHECK_TYPE = 'fraudCheckType';
    public const FRAUD_CHECK_RESULT = 'fraudCheckResult';
    public const CUSTOMER_CODE = 'customerCode';
    protected array $objectMap = [
        self::FRAUD_CHECK_RESULT => FraudCheckResultObject::class,
    ];

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
     * Getter for Fraud Check Type.
     *
     * @return string
     */
    public function getFraudCheckType(): string
    {
        return $this->getData(self::FRAUD_CHECK_TYPE);
    }

    /**
     * Getter for Fraud Check Result.
     *
     * @return FraudCheckResultObject
     */
    public function getFraudCheckResult(): FraudCheckResultObject
    {
        return $this->getData(self::FRAUD_CHECK_RESULT);
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
}
