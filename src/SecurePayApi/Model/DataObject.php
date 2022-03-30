<?php

namespace SecurePayApi\Model;

class DataObject
{
    protected array $data;
    protected array $objectMap = [];

    /**
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        foreach ($this->objectMap as $key => $class) {
            if (array_key_exists($key, $data)) {
                $data[$key] = new $class($data[$key]);
            }
        }
        $this->data = $data;
    }

    /**
     * @param string $key
     *
     * @return mixed|null
     */
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

    /**
     * @return array
     */
    public function toArray(): array
    {
        $result = [];
        foreach ($this->data as $key => $value) {
            if ($value instanceof DataObject) {
                $result[$key] = $value->toArray();
            } elseif (is_array($value)) {
                foreach ($value as $itemKey => $item) {
                    if ($item instanceof DataObject) {
                        $result[$key][$itemKey] = $item->toArray();
                    } else {
                        $result[$key][$itemKey] = $item;
                    }
                }
            } else {
                $result[$key] = $value;
            }
        }

        return $result;
    }
}
