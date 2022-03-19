<?php

namespace SecurePayApi\Model\Response\CardPayment;

use SecurePayApi\Model\DataObject;

class PaymentFraudCheckDetailsObject extends DataObject
{
    public const PROVIDER_REFERENCE_NUMBER = 'providerReferenceNumber';
    public const FRAUD_CHECK_TYPE = 'fraudCheckType';

    /**
     * Getter for Provider Reference Number.
     *
     * @return string
     */
    public function getProviderReferenceNumber(): string
    {
        return $this->getData(self::PROVIDER_REFERENCE_NUMBER);
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
}
