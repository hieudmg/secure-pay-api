<?php

namespace SecurePayApi\Request\CardPayment;

use SecurePayApi\Model\Credential;
use SecurePayApi\Model\Response\CardPayment\AccountVerificationObject;

class CreateAccountVerificationRequest extends CardPaymentRequest
{
    public function getEndpoint(): string
    {
        return $this->buildUrl(parent::getEndpoint(), 'payments', 'account-verification');
    }

    protected function getResponseClass(): string
    {
        return AccountVerificationObject::class;
    }
}
