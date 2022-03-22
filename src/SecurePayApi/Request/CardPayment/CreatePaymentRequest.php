<?php

namespace SecurePayApi\Request\CardPayment;

use SecurePayApi\Model\Response\CardPayment\PaymentObject;
use SecurePayApi\Request\RestApiRequest;

class CreatePaymentRequest extends RestApiRequest
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
