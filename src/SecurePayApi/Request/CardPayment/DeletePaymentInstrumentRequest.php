<?php

namespace SecurePayApi\Request\CardPayment;

use SecurePayApi\Model\Credential;
use SecurePayApi\Model\Response\CardPayment\DeletePaymentInstrumentObject;
use SecurePayApi\Request\RestApiRequest;

class DeletePaymentInstrumentRequest extends RestApiRequest
{
    protected string $customerCode;

    public function __construct(bool $isLive, Credential $credential, string $customerCode)
    {
        parent::__construct($isLive, $credential);
        $this->customerCode = $customerCode;
    }

    public function getEndpoint(): string
    {
        return $this->buildUrl(parent::getEndpoint(), 'customers', $this->customerCode, 'payment-instruments', 'token');
    }

    public function getRequestMethod(): string
    {
        return self::METHOD_DELETE;
    }

    protected function getResponseClass(): string
    {
        return DeletePaymentInstrumentObject::class;
    }
}
