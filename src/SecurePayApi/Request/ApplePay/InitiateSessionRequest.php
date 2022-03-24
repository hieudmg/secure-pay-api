<?php

namespace SecurePayApi\Request\ApplePay;

use SecurePayApi\Model\Response\ApplePay\InitiateSessionResponseObject;
use SecurePayApi\Request\RestApiRequest;

class InitiateSessionRequest extends RestApiRequest
{
    protected function getResponseClass(): string
    {
        return InitiateSessionResponseObject::class;
    }

    protected function getEndpoint(): string
    {
        return $this->buildUrl(parent::getEndpoint(), 'wallets', 'applepay', 'sessions', 'initiate');
    }
}
