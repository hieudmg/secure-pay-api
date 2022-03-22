<?php

namespace SecurePayApi\Request\FraudGuard;

use SecurePayApi\Model\Response\FraudGuard\PerformFraudDetectionResponseObject;
use SecurePayApi\Request\RestApiRequest;

class PerformFraudDetectionRequest extends RestApiRequest
{
    protected function getResponseClass(): string
    {
        return PerformFraudDetectionResponseObject::class;
    }

    protected function getEndpoint(): string
    {
        return $this->buildUrl(parent::getEndpoint(), 'antifraud', 'check');
    }
}
