<?php

namespace PrettyPrinter;

use Nature\Length;

class ProductLengthPrinter
{
    private $length;

    public function __construct(Length $length)
    {
        $this->length = $length;
    }

    public function getPrintableText()
    {
        if ($this->length->getInMilimeters() < 100) {
            return $this->length->getInMilimeters().'mm';
        }
        if ($this->length->getInMeters() < 1) {
            return $this->length->getInCentimeters().'cm';
        }

        return $this->length->getInMeters().'m';
    }
}
