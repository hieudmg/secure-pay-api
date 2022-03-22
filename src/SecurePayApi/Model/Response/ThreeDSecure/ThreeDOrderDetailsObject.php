<?php

namespace SecurePayApi\Model\Response\ThreeDSecure;

use SecurePayApi\Model\DataObject;

class ThreeDOrderDetailsObject extends DataObject
{
    public const PROVIDER_CLIENT_ID = 'providerClientId';
    public const SESSION_ID = 'sessionId';
    public const SIMPLE_TOKEN = 'simpleToken';

    /**
     * Getter for Provider Client Id.
     *
     * @return string
     */
    public function getProviderClientId(): string
    {
        return $this->getData(self::PROVIDER_CLIENT_ID);
    }

    /**
     * Getter for Session Id.
     *
     * @return string
     */
    public function getSessionId(): string
    {
        return $this->getData(self::SESSION_ID);
    }

    /**
     * Getter for Simple Token.
     *
     * @return string
     */
    public function getSimpleToken(): string
    {
        return $this->getData(self::SIMPLE_TOKEN);
    }
}
