<?php

namespace SecurePayApi\Request;

use SecurePayApi\Endpoint;
use SecurePayApi\Exception\InvalidResponseException;
use SecurePayApi\Exception\RequestException;
use SecurePayApi\Exception\UnauthorizedException;
use SecurePayApi\Model\Credential;
use SecurePayApi\Model\DataObject;
use SecurePayApi\Model\Response\Error\ResponseError;

abstract class RestApiRequest extends Request
{
    protected string $version = 'v2';
    protected Credential $credential;
    protected ?array $data;

    public function __construct(bool $isLive, Credential $credential, ?array $data = null)
    {
        parent::__construct($isLive);
        $this->credential = $credential;
        $this->data = $data;
    }

    /**
     * @return DataObject|ResponseError
     * @throws InvalidResponseException
     * @throws RequestException
     * @throws UnauthorizedException
     */
    public function execute()
    {
        return $this->request(
            $this->getEndpoint(),
            $this->getRequestMethod(),
            $this->getRequestData(),
            $this->getRequestHeaders(),
            $this->getRequestContentType()
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

    protected function getRequestData(): ?array
    {
        return $this->data;
    }

    protected function getRequestHeaders(): array
    {
        return [
            self::HEADER_AUTHORIZATION => 'Bearer ' . $this->credential->getToken(),
        ];
    }

    protected function getRequestContentType(): string
    {
        return self::CONTENT_TYPE_JSON;
    }
}
