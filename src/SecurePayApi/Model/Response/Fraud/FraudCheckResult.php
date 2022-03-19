<?php

namespace SecurePayApi\Model\Response\Fraud;

use SecurePayApi\Model\DataObject;

class FraudCheckResult extends DataObject
{
    public const PROVIDER_REFERENCE_NUMBER = 'providerReferenceNumber';
    public const RESULT = 'result';
    public const PROVIDER_RESPONSE_MESSAGE = 'providerResponseMessage';

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
     * Getter for Result.
     *
     * @return string
     */
    public function getResult(): string
    {
        return $this->getData(self::RESULT);
    }

    /**
     * Getter for Provider Response Message.
     *
     * @return string
     */
    public function getProviderResponseMessage(): string
    {
        return $this->getData(self::PROVIDER_RESPONSE_MESSAGE);
    }
}
