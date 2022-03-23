<?php

namespace SecurePayApi\Request\CardPayment;

use SecurePayApi\Model\Credential;
use SecurePayApi\Model\Response\CardPayment\CancelPreAuthObject;
use SecurePayApi\Request\RestApiRequest;

class CancelPreAuthRequest extends RestApiRequest
{
    protected string $orderId;

    public function __construct(bool $isLive, Credential $credential, array $data, string $orderId)
    {
        parent::__construct($isLive, $credential, $data);
        $this->orderId = $orderId;
    }
    public function getEndpoint(): string
    {
        return $this->buildUrl(parent::getEndpoint(), 'payments', 'preauths', $this->orderId, 'cancel');
    }

    protected function getResponseClass(): string
    {
        return CancelPreAuthObject::class;
    }
}
