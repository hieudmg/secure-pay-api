<?php

namespace SecurePayApi\Request\WeChat;

use SecurePayApi\Model\Response\WeChat\InitiateWeChatTransactionResponseObject;
use SecurePayApi\Request\RestApiRequest;

class InitiateWeChatTransactionRequest extends RestApiRequest
{
    protected function getResponseClass(): string
    {
        return InitiateWeChatTransactionResponseObject::class;
    }

    protected function getEndpoint(): string
    {
        return $this->buildUrl(parent::getEndpoint(), 'wallets', 'wechat', 'payments', 'initiate');
    }
}
