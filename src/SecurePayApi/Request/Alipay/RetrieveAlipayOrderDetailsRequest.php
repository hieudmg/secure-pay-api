<?php

namespace SecurePayApi\Request\Alipay;

use SecurePayApi\Model\Credential;
use SecurePayApi\Model\Response\Alipay\RetrieveAlipayOrderDetailsResponseObject;
use SecurePayApi\Request\RestApiRequest;

class RetrieveAlipayOrderDetailsRequest extends RestApiRequest
{
    protected string $orderId;

    public function __construct(bool $isLive, Credential $credential, string $orderId)
    {
        parent::__construct($isLive, $credential);
        $this->orderId = $orderId;
    }

    protected function getResponseClass(): string
    {
        return RetrieveAlipayOrderDetailsResponseObject::class;
    }

    protected function getEndpoint(): string
    {
        return $this->buildUrl(
                parent::getEndpoint(),
                'wallets',
                'alipay',
                'orders',
                $this->orderId
            ) . '?merchantCode=' . $this->credential->getMerchantCode();
    }

    protected function getRequestMethod(): string
    {
        return self::METHOD_GET;
    }
}
