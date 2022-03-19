<?php


namespace SecurePayApi\Request;

use PHPUnit\Framework\TestCase;
use SecurePayApi\Exception\InvalidResponseException;
use SecurePayApi\Exception\RequestException;

class ClientCredentialsRequestTest extends TestCase
{
    public function testRequestSuccess()
    {
        $clientCredentialsRequest = new ClientCredentialsRequest(
            false,
            $_SERVER['client_id'],
            $_SERVER['client_secret']
        );
        $response = $clientCredentialsRequest->execute();
        self::assertTrue(preg_match('/^[A-Za-z0-9-_=]+\.[A-Za-z0-9-_=]+\.?[A-Za-z0-9-_.+\/=]*$/', $response->getAccessToken()) !== false);
        self::assertEquals('Bearer', $response->getTokenType());
        self::assertIsInt($response->getExpiresIn());
    }

    public function testRequestFail() {
        $clientCredentialsRequest = new ClientCredentialsRequest(
            false,
            '',
            ''
        );
        try {
            $clientCredentialsRequest->execute();
        } catch (InvalidResponseException $e) {
            $this->addToAssertionCount(1);
        } catch (RequestException $e) {
            $this->addToAssertionCount(1);
        }
    }
}
