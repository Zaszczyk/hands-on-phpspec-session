<?php

namespace Nature;

class Length
{
    private $length;

    public function __construct($length)
    {
        $this->length = (float)$length;
    }

    public function getInMeters()
    {
        return $this->length;
    }

    public function getInCentimeters()
    {
        return 100 * $this->getInMeters();
    }

    public function getInMilimeters()
    {
        return 1000 * $this->getInMeters();
    }

    public function getInFeet()
    {
        return 3.28084 * $this->getInMeters();
    }

    public function getInKilometers()
    {
        return $this->getInMeters() / 1000;
    }

}
