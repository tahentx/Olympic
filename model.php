<?php

class Model
{
    private $attributes = [];

    public function __set($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }

        return null;
    }
}

$model = new Model;

$model->name = 'Todd'; 

echo ($model->name);

?>