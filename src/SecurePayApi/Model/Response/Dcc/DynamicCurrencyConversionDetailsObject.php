<?php

namespace SecurePayApi\Model\Response\Dcc;

use SecurePayApi\Model\DataObject;

class DynamicCurrencyConversionDetailsObject extends DataObject
{
    public const INITIATED_ORDER_ID = 'initiatedOrderId';

    /**
     * Getter for Initiated Order Id.
     *
     * @return string
     */
    public function getInitiatedOrderId(): string
    {
        return $this->getData(self::INITIATED_ORDER_ID);
    }
}
