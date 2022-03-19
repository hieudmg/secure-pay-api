<?php

namespace SecurePayApi\Request\CardPayment;

use SecurePayApi\Model\Response\CardPayment\PaymentOrderObject;

class InitiatePaymentOrderRequest extends CardPaymentRequest
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
