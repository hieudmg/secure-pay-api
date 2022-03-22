<?php

namespace SecurePayApi\Request\CardPayment;

use SecurePayApi\Model\Response\CardPayment\PreAuthPaymentObject;
use SecurePayApi\Request\RestApiRequest;

class CreatePreAuthRequest extends RestApiRequest
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
