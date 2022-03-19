<?php

namespace SecurePayApi\Request\CardPayment;

use SecurePayApi\Model\Credential;
use SecurePayApi\Model\Response\CardPayment\PaymentInstrumentObject;

class PaymentInstrumentsRequest extends CardPaymentRequest
{
    protected string $customerCode;

    public function __construct(bool $isLive, Credential $credential, array $data, string $customerCode)
    {
        parent::__construct($isLive, $credential, $data);
        $this->customerCode = $customerCode;
    }

    protected function getRequestMethod(): string
    {
        return self::METHOD_GET;
    }

    protected function getEndpoint(): string
    {
        return $this->buildUrl(parent::getEndpoint(), 'customers', $this->customerCode, 'payment-instruments');
    }

    protected function getResponseClass(): string
    {
        return PaymentInstrumentObject::class;
    }
}
