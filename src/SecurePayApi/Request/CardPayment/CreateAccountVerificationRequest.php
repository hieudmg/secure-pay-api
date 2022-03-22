<?php

namespace SecurePayApi\Request\CardPayment;

use SecurePayApi\Model\Response\CardPayment\AccountVerificationObject;
use SecurePayApi\Request\RestApiRequest;

class CreateAccountVerificationRequest extends RestApiRequest
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
