<?php

namespace SecurePayApi\Request\CardPayment;

use SecurePayApi\Model\Credential;
use SecurePayApi\Model\Response\CardPayment\PaymentInstrumentObject;
use SecurePayApi\Request\RestApiRequest;

class PaymentInstrumentsRequest extends RestApiRequest
{
    protected string $customerCode;
    protected string $ip;

    public function __construct(bool $isLive, Credential $credential, string $customerCode, string $ip)
    {
        parent::__construct($isLive, $credential);
        $this->customerCode = $customerCode;
        $this->ip = $ip;
    }

    public function getRequestMethod(): string
    {
        return self::METHOD_GET;
    }

    public function getEndpoint(): string
    {
        return $this->buildUrl(parent::getEndpoint(), 'customers', $this->customerCode, 'payment-instruments');
    }

    public function getRequestHeaders(): array
    {
        $headers = parent::getRequestHeaders();
        $headers['ip'] = $this->ip;
        return $headers;
    }

    protected function getResponseClass(): string
    {
        return PaymentInstrumentObject::class;
    }
}
