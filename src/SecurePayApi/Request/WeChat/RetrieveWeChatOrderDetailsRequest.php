<?php

namespace SecurePayApi\Request\WeChat;

use SecurePayApi\Model\Credential;
use SecurePayApi\Model\Response\WeChat\RetrieveWeChatOrderDetailsResponseObject;
use SecurePayApi\Request\RestApiRequest;

class RetrieveWeChatOrderDetailsRequest extends RestApiRequest
{
    protected string $orderId;

    public function __construct(bool $isLive, Credential $credential, string $orderId)
    {
        parent::__construct($isLive, $credential);
        $this->orderId = $orderId;
    }

    protected function getResponseClass(): string
    {
        return RetrieveWeChatOrderDetailsResponseObject::class;
    }

    public function getEndpoint(): string
    {
        return $this->buildUrl(
                parent::getEndpoint(),
                'wallets',
                'wechat',
                'orders',
                $this->orderId
            ) . '?merchantCode=' . $this->credential->getMerchantCode();
    }

    public function getRequestMethod(): string
    {
        return self::METHOD_GET;
    }
}
