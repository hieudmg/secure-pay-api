<?php

namespace SecurePayApi\Request;

use SecurePayApi\Endpoint;
use SecurePayApi\Exception\InvalidResponseException;
use SecurePayApi\Exception\RequestException;
use SecurePayApi\Exception\UnauthorizedException;
use SecurePayApi\Model\Response\ClientCredentialsData;
use SecurePayApi\Model\Response\ErrorParser;

class ClientCredentialsRequest extends Request
{
    protected string $clientId;
    protected string $clientSecret;

    public function __construct(bool $isLive, string $clientId, string $clientSecret)
    {
        parent::__construct($isLive);
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
    }

    /**
     * @throws RequestException
     * @throws InvalidResponseException
     * @throws UnauthorizedException
     */
    public function execute()
    {
        if ($this->isLive) {
            $url = Endpoint::ENDPOINT_AUTH_LIVE;
        } else {
            $url = Endpoint::ENDPOINT_AUTH_SANDBOX;
        }

        $data = [
            'grant_type' => 'client_credentials',
            'audience' => 'https://api.payments.auspost.com.au',
        ];

        $headers = [
            self::HEADER_AUTHORIZATION => 'Basic ' . base64_encode($this->clientId . ':' . $this->clientSecret),
        ];

        return parent::request($url, self::METHOD_POST, $data, $headers, self::CONTENT_TYPE_FORM);
    }

    protected function getResponseClass(): string
    {
        return ClientCredentialsData::class;
    }
}
