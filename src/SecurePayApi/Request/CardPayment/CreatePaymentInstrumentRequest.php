<?php

namespace SecurePayApi\Request\CardPayment;

use SecurePayApi\Model\Credential;
use SecurePayApi\Model\Response\CardPayment\PaymentInstrumentObject;
use SecurePayApi\Request\RestApiRequest;

class CreatePaymentInstrumentRequest extends RestApiRequest
{
    protected string $customerCode;
    protected array $requestHeaders = [];
    protected string $token;
    protected string $ip;

    public function __construct(bool $isLive, Credential $credential, string $customerCode, string $token, string $ip)
    {
        parent::__construct($isLive, $credential);
        $this->customerCode = $customerCode;
        $this->token = $token;
        $this->ip = $ip;
    }

    public function getEndpoint(): string
    {
        return $this->buildUrl(parent::getEndpoint(), 'customers', $this->customerCode, 'payment-instruments', 'token');
    }

    public function getRequestHeaders(): array
    {
        $headers = parent::getRequestHeaders();
        $headers['token'] = $this->token;
        $headers['ip'] = $this->ip;
        return $headers;
    }

    protected function getResponseClass(): string
    {
        return PaymentInstrumentObject::class;
    }
}
