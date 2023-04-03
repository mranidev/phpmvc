<?php

namespace app\core;

class Model
{
    public function save(array $data)
    {
        foreach($data as $key => $value)
        {
            if (property_exists($this, $key))
            {
                $this->{$key} = $value;
            }
        }
    }

    public function validate()
    {
        return true;
    }
}