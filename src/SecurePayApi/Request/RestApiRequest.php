<?php

namespace SecurePayApi\Request;

use SecurePayApi\Endpoint;
use SecurePayApi\Model\Credential;

abstract class RestApiRequest extends Request
{
    protected string $version = 'v2';
    protected Credential $credential;
    protected array $data;

    public function __construct(bool $isLive, Credential $credential, array $data)
    {
        parent::__construct($isLive);
        $this->credential = $credential;
        $this->data = $data;
    }

    public function execute()
    {
        return $this->request(
            $this->getEndpoint(),
            $this->getRequestMethod(),
            $this->getRequestData(),
            $this->getRequestHeaders()
        );
    }

    protected function getEndpoint(): string
    {
        $endpoint = $this->isLive ? Endpoint::ENDPOINT_API_LIVE : Endpoint::ENDPOINT_API_SANDBOX;
        return $this->buildUrl($endpoint, $this->version);
    }

    protected function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    protected function getRequestData(): array
    {
        return $this->data;
    }

    protected function getRequestHeaders(): array
    {
        return [
            self::HEADER_AUTHORIZATION => 'Bearer ' . $this->credential->getToken(),
        ];
    }
}
