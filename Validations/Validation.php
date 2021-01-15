<?php

abstract class Validation
{
    protected $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    abstract public function validate();
}
