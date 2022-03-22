<?php

namespace SecurePayApi\Model;

use PHPUnit\Framework\TestCase;

class DataObjectTest extends TestCase
{
    public function testToArray()
    {
        $object1 = new DataObject([
            'key_1' => 'value_1',
        ]);

        $object2 = new DataObject([
            'key_2' => 'value_2',
            'key_3' => [
                'key_4' => 'value_4',
            ],
            'key_5' => $object1
        ]);

        self::assertEquals('value_1', $object1->getData('key_1'));

        $array = $object2->toArray();

        self::assertTrue(isset($array['key_3']['key_4']));
        self::assertTrue(isset($array['key_5']['key_1']));
        self::assertEquals('value_4', $array['key_3']['key_4']);
        self::assertEquals('value_1', $array['key_5']['key_1']);
    }
}
