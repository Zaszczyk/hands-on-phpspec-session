<?php

namespace spec\Money;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class HrvatskaKunaSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith(100);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('Money\HrvatskaKuna');

        $this->shouldHaveType('Money\Money');
    }

    public function it_will_print_it_with_currency()
    {
        $this->getPrintableText()->shouldReturn('100kn');
    }

    public function it_will_print_decimal_places_too()
    {
        $this->beConstructedWith(99.99);
        $this->getPrintableText()->shouldReturn('99,99kn');
    }
}
