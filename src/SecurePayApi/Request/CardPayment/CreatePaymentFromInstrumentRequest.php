<?php

namespace SecurePayApi\Request\CardPayment;

use SecurePayApi\Model\Credential;
use SecurePayApi\Model\Response\CardPayment\PaymentObject;
use SecurePayApi\Request\RestApiRequest;

class CreatePaymentFromInstrumentRequest extends RestApiRequest
{
    protected string $customerCode;

    public function __construct(bool $isLive, Credential $credential, array $data, string $customerCode)
    {
        parent::__construct($isLive, $credential, $data);
        $this->customerCode = $customerCode;
    }

    protected function getResponseClass(): string
    {
        return PaymentObject::class;
    }

    public function getEndpoint(): string
    {
        return $this->buildUrl(parent::getEndpoint(), 'customers', $this->customerCode, 'payments');
    }
}
