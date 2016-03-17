<?php

namespace Money;

abstract class Money
{
    protected $value;

    public function __construct($value)
    {
        $this->value = (int) 100 * $value;
    }

    public function getPrintableText()
    {
        if ($this->value % 100) {
            return (int) ($this->value / 100).','.($this->value % 100).$this->getCurrency();
        }

        return ($this->value / 100).$this->getCurrency();
    }

    abstract protected function getCurrency();
}
