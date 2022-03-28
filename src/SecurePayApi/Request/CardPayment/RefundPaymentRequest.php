<?php

namespace SecurePayApi\Request\CardPayment;

use SecurePayApi\Model\Credential;
use SecurePayApi\Model\Response\CardPayment\RefundObject;
use SecurePayApi\Request\RestApiRequest;

class RefundPaymentRequest extends RestApiRequest
{
    protected string $orderId;
    protected string $ip;

    public function __construct(bool $isLive, Credential $credential, array $data, string $orderId, string $ip)
    {
        parent::__construct($isLive, $credential, $data);
        $this->orderId = $orderId;
        $this->ip = $ip;
    }

    public function getEndpoint(): string
    {
        return $this->buildUrl(parent::getEndpoint(), 'orders', $this->orderId, 'refunds');
    }

    public function getRequestHeaders(): array
    {
        $headers = parent::getRequestHeaders();
        $headers['ip'] = $this->ip;
        return $headers;
    }

    protected function getResponseClass(): string
    {
        return RefundObject::class;
    }
}
