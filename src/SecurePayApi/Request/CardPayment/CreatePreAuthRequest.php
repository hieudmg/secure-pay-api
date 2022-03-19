<?php

namespace SecurePayApi\Request\CardPayment;

use SecurePayApi\Model\Response\CardPayment\PreAuthPaymentObject;

class CreatePreAuthRequest extends CardPaymentRequest
{
    public function getEndpoint(): string
    {
        return $this->buildUrl(parent::getEndpoint(), 'payments', 'preauths');
    }

    protected function getResponseClass(): string
    {
        return PreAuthPaymentObject::class;
    }
}
