<?php

namespace SecurePayApi\Request\ApplePay;

use SecurePayApi\Model\Response\ApplePay\InitiateSessionResponseObject;

class InitiateSessionRequest extends \SecurePayApi\Request\RestApiRequest
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
