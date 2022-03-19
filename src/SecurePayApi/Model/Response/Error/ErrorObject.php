<?php

namespace SecurePayApi\Model\Response\Error;

use SecurePayApi\Model\DataObject;

class ErrorObject extends DataObject
{
    public const ID = 'id';
    public const CODE = 'code';
    public const DETAIL = 'detail';

    /**
     * Getter for Id.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->getData(self::ID);
    }

    /**
     * Getter for Code.
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->getData(self::CODE);
    }

    /**
     * Getter for Detail.
     *
     * @return string
     */
    public function getDetail(): string
    {
        return $this->getData(self::DETAIL);
    }
}
