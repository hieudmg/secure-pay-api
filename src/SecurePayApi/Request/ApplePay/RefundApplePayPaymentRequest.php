<?php

namespace SecurePayApi\Request\ApplePay;

use SecurePayApi\Model\Credential;
use SecurePayApi\Model\Response\ApplePay\RefundApplePayPaymentResponseObject;
use SecurePayApi\Request\RestApiRequest;

class RefundApplePayPaymentRequest extends RestApiRequest
{
    protected string $orderId;

    public function __construct(bool $isLive, Credential $credential, array $data, string $orderId)
    {
        parent::__construct($isLive, $credential, $data);
        $this->orderId = $orderId;
    }

    protected function getResponseClass(): string
    {
        return RefundApplePayPaymentResponseObject::class;
    }

    public function getEndpoint(): string
    {
        return $this->buildUrl(parent::getEndpoint(), 'wallets', 'applepay', 'orders', $this->orderId, 'refunds');
    }
}
