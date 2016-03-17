<?php

namespace Money;

class Euro extends Money
{
    protected function getCurrency()
    {
        return 'EUR';
    }
}
