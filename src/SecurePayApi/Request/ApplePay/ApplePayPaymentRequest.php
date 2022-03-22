<?php

namespace SecurePayApi\Request\ApplePay;

use SecurePayApi\Model\Response\ApplePay\ApplePayPaymentResponseObject;
use SecurePayApi\Request\RestApiRequest;

class ApplePayPaymentRequest extends RestApiRequest
{
    protected function getResponseClass(): string
    {
        return ApplePayPaymentResponseObject::class;
    }

    protected function getEndpoint(): string
    {
        return $this->buildUrl(parent::getEndpoint(), 'wallets', 'applepay', 'payments');
    }
}
