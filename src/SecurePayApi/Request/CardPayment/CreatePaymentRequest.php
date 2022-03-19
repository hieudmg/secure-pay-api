<?php

namespace SecurePayApi\Request\CardPayment;

use SecurePayApi\Model\Response\CardPayment\PaymentObject;

class CreatePaymentRequest extends CardPaymentRequest
{
    public function getEndpoint(): string
    {
        return $this->buildUrl(parent::getEndpoint(), 'payments');
    }

    protected function getResponseClass(): string
    {
        return PaymentObject::class;
    }
}
