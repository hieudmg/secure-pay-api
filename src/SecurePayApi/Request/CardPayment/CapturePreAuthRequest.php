<?php

namespace SecurePayApi\Request\CardPayment;

use SecurePayApi\Model\Credential;
use SecurePayApi\Model\Response\CardPayment\CapturePaymentObject;
use SecurePayApi\Request\RestApiRequest;

class CapturePreAuthRequest extends RestApiRequest
{
    protected string $orderId;

    public function __construct(bool $isLive, Credential $credential, array $data, string $orderId)
    {
        parent::__construct($isLive, $credential, $data);
        $this->orderId = $orderId;
    }

    protected function getEndpoint(): string
    {
        return $this->buildUrl(parent::getEndpoint(), 'payments', 'preauths', $this->orderId, 'capture');
    }

    protected function getResponseClass(): string
    {
        return CapturePaymentObject::class;
    }
}
