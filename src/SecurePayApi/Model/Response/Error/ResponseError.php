<?php

namespace SecurePayApi\Model\Response\Error;

use SecurePayApi\Model\DataObject;

class ResponseError extends DataObject
{
    public const ERRORS = 'errors';

    public function getFirstError(): ?ErrorObject
    {
        $errors = $this->getErrors();
        if (is_array($errors) && count($errors) > 0) {
            return $errors[0];
        }

        return null;
    }

    /**
     * Getter for Errors.
     *
     * @return ErrorObject[]
     */
    public function getErrors(): ?array
    {
        return $this->getData(self::ERRORS);
    }
}
