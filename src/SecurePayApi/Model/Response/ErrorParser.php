<?php

namespace SecurePayApi\Model\Response;

use SecurePayApi\Exception\InvalidResponseException;
use SecurePayApi\Exception\UnauthorizedException;
use SecurePayApi\Model\Response\Error\ErrorObject;
use SecurePayApi\Model\Response\Error\ResponseError;

class ErrorParser
{
    public static function parse($code, $data)
    {
        if ($code == 400 || $code == 500) {
            $errors = [];
            foreach ($data['errors'] as $error) {
                $errors[] = new ErrorObject($error);
            }
            return new ResponseError(['errors' => $errors]);
        }

        if ($code == 401) {
            throw new UnauthorizedException();
        }

        throw new InvalidResponseException();
    }
}
