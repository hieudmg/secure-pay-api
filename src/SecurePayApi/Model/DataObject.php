<?php

namespace SecurePayApi\Model;

class DataObject
{
    protected array $data;
    protected array $objectMap = [];

    public function __construct($data = [])
    {
        foreach ($this->objectMap as $key => $class) {
            if (array_key_exists($key, $data)) {
                $data[$key] = new $class($data);
            }
        }
        $this->data = $data;
    }

    public function getData(string $key = '')
    {
        if (!empty($key)) {
            if (array_key_exists($key, $this->data)) {
                return $this->data[$key];
            }
            return null;
        }

        return $this->data;
    }

    public function toArray(): array
    {
        $result = [];
        foreach ($this->data as $key => $value) {
            if ($value instanceof DataObject) {
                $result[$key] = $value->toArray();
            } else {
                $result[$key] = $value;
            }
        }

        return $result;
    }
}
