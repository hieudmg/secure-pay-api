<?php

namespace SecurePayApi\Model;

use SecurePayApi\Request\ClientCredentialsRequest;

class Credential
{
    protected bool $isLive;
    protected string $merchantCode;
    protected string $clientId;
    protected string $clientSecret;
    protected string $token;

    public function __construct(
        bool $isLive,
        string $merchantCode,
        string $clientId,
        string $clientSecret,
        string $token = null
    ) {
        $this->isLive = $isLive;
        $this->merchantCode = $merchantCode;
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        if (!$token) {
            $request = new ClientCredentialsRequest($isLive, $clientId, $clientSecret);
            $token = $request->execute()->getAccessToken();
        }
        $this->token = $token;
    }

    /**
     * @return bool
     */
    public function isLive(): bool
    {
        return $this->isLive;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @return string
     */
    public function getMerchantCode(): string
    {
        return $this->merchantCode;
    }

    /**
     * @return string
     */
    public function getClientId(): string
    {
        return $this->clientId;
    }

    /**
     * @return string
     */
    public function getClientSecret(): string
    {
        return $this->clientSecret;
    }
}
