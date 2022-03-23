<?php

namespace SecurePayApi\Request\CardPayment;

use SecurePayApi\Model\Credential;
use SecurePayApi\Model\Response\CardPayment\PaymentInstrumentObject;
use SecurePayApi\Request\RestApiRequest;

class CreatePaymentInstrumentRequest extends RestApiRequest
{
    protected string $customerCode;
    protected array $requestHeaders = [];

    public function __construct(bool $isLive, Credential $credential, array $data, string $customerCode)
    {
        parent::__construct($isLive, $credential, $data);
        $this->customerCode = $customerCode;
    }

    protected function getResponseClass(): string
    {
        return PaymentInstrumentObject::class;
    }

    protected function getEndpoint(): string
    {
        return $this->buildUrl(parent::getEndpoint(), 'customers', $this->customerCode, 'payment-instruments', 'token');
    }

    /**
     * @param array $headers
     * @return CreatePaymentInstrumentRequest
     */
    public function setRequestHeaders(array $headers): CreatePaymentInstrumentRequest
    {
        $this->requestHeaders = $headers;
        return $this;
    }

    protected function getRequestHeaders(): array
    {
        $parentHeaders = parent::getRequestHeaders();
        $requestHeaders = array_merge($parentHeaders, [
            'Content-Type' => 'application/json'
        ], $this->requestHeaders);
        return $requestHeaders;
    }
}
