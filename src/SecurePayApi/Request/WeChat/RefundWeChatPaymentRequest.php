<?php

namespace SecurePayApi\Request\WeChat;

use SecurePayApi\Model\Credential;
use SecurePayApi\Model\Response\ApplePay\RefundApplePayPaymentResponseObject;
use SecurePayApi\Model\Response\WeChat\RefundWeChatPaymentResponseObject;
use SecurePayApi\Request\RestApiRequest;

class RefundWeChatPaymentRequest extends RestApiRequest
{
    protected string $orderId;

    public function __construct(bool $isLive, Credential $credential, array $data, string $orderId)
    {
        parent::__construct($isLive, $credential, $data);
        $this->orderId = $orderId;
    }

    protected function getResponseClass(): string
    {
        return RefundWeChatPaymentResponseObject::class;
    }

    protected function getEndpoint(): string
    {
        return $this->buildUrl(parent::getEndpoint(), 'wallets', 'wechat', 'orders', $this->orderId, 'refunds');
    }
}
