<?php
namespace Phone;

class Phone
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function getModel()
    {
        echo "My phone is - ";
        return $this->model;
    }
}