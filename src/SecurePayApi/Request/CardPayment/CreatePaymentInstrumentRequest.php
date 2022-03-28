<?php

namespace SecurePayApi\Request\CardPayment;

use SecurePayApi\Model\Credential;
use SecurePayApi\Model\Response\CardPayment\PaymentInstrumentObject;
use SecurePayApi\Request\RestApiRequest;

class CreatePaymentInstrumentRequest extends RestApiRequest
{
    protected string $customerCode;
    protected array $requestHeaders = [];

    public function __construct(bool $isLive, Credential $credential, string $customerCode)
    {
        parent::__construct($isLive, $credential);
        $this->customerCode = $customerCode;
    }

    protected function getResponseClass(): string
    {
        return PaymentInstrumentObject::class;
    }

    public function getEndpoint(): string
    {
        return $this->buildUrl(parent::getEndpoint(), 'customers', $this->customerCode, 'payment-instruments', 'token');
    }
}
