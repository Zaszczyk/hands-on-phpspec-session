<?php

namespace spec\Nature;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LengthSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(1);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Nature\Length');
    }

    function it_can_return_length_in_meters()
    {
        $this->getInMeters()->shouldReturn(1.0);
    }

    function it_can_return_length_in_centimeters()
    {
        $this->getInCentimeters()->shouldReturn(100.0);
    }

    function it_can_return_length_in_milimeters()
    {
        $this->getInMilimeters()->shouldReturn(1000.0);
    }

    function it_can_return_length_in_meters_even_if_it_was_given_as_string()
    {
        $this->beConstructedWith('1');
        $this->getInMeters()->shouldReturn(1.0);
    }

    function it_can_return_length_in_centimeters_even_if_it_was_given_as_string()
    {
        $this->beConstructedWith('1');
        $this->getInCentimeters()->shouldReturn(100.0);
    }

    function it_can_return_length_in_milimeters_even_if_it_was_given_as_string()
    {
        $this->beConstructedWith('1');
        $this->getInMilimeters()->shouldReturn(1000.0);
    }

    function it_will_work_for_partial_lenghts()
    {
        $this->beConstructedWith(1.5);
        $this->getInMeters()->shouldReturn(1.5);
        $this->getInCentimeters()->shouldReturn(150.0);
        $this->getInMilimeters()->shouldReturn(1500.0);
    }

    function it_can_return_length_in_feet()
    {
        $this->getInFeet()->shouldReturn(3.28084);
    }

    function it_can_return_length_in_kilometers()
    {
        $this->getInKilometers()->shouldReturn(0.001);
    }

}
