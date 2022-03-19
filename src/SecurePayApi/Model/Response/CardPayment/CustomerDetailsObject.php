<?php

namespace SecurePayApi\Model\Response\CardPayment;

use SecurePayApi\Model\DataObject;

class CustomerDetailsObject extends DataObject
{
    public const EMAIL_ADDRESS = 'emailAddress';

    /**
     * Getter for Email Address.
     *
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->getData(self::EMAIL_ADDRESS);
    }
}
