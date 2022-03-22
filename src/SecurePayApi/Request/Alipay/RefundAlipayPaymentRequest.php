<?php

namespace SecurePayApi\Request\Alipay;

use SecurePayApi\Model\Credential;
use SecurePayApi\Model\Response\ApplePay\RefundApplePayPaymentResponseObject;
use SecurePayApi\Request\RestApiRequest;

class RefundAlipayPaymentRequest extends RestApiRequest
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

    protected function getEndpoint(): string
    {
        return $this->buildUrl(parent::getEndpoint(), 'wallets', 'alipay', 'orders', $this->orderId, 'refunds');
    }
}
