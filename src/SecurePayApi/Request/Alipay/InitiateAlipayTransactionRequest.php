<?php

namespace SecurePayApi\Request\Alipay;

use SecurePayApi\Model\Response\Alipay\InitiateAlipayTransactionResponseObject;
use SecurePayApi\Request\RestApiRequest;

class InitiateAlipayTransactionRequest extends RestApiRequest
{
    protected function getResponseClass(): string
    {
        return InitiateAlipayTransactionResponseObject::class;
    }

    public function getEndpoint(): string
    {
        return $this->buildUrl(parent::getEndpoint(), 'wallets', 'alipay', 'payments', 'initiate');
    }
}
