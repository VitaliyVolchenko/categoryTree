<?php

class Controller
{
    public $model;

    public function __construct()
    {        
        $this->model = new Model();
    }

}