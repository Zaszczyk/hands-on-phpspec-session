<?php

namespace spec\Money;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EuroSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith(99.99);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('Money\Euro');
        $this->shouldHaveType('Money\Money');
    }
    public function it_will_print_it_with_currency()
    {
        $this->getPrintableText()->shouldReturn('99,99EUR');
    }
}
