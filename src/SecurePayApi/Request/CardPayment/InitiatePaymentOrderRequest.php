<?php

namespace SecurePayApi\Request\CardPayment;

use SecurePayApi\Model\Response\CardPayment\PaymentOrderObject;
use SecurePayApi\Request\RestApiRequest;

class InitiatePaymentOrderRequest extends RestApiRequest
{
    protected function getEndpoint(): string
    {
        return $this->buildUrl(parent::getEndpoint(), 'payments', 'orders', 'initiate');
    }

    protected function getResponseClass(): string
    {
        return PaymentOrderObject::class;
    }
}
