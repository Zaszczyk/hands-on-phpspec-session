<?php

namespace spec\PrettyPrinter;

use Nature\Length;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProductLengthPrinterSpec extends ObjectBehavior
{
    public function let(Length $input)
    {
        $this->beConstructedWith($input);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('PrettyPrinter\ProductLengthPrinter');
    }

    public function it_will_return_length_in_meters_for_product($input)
    {
        $input->getInMilimeters()->willReturn(1000)->shouldBeCalled();
        $input->getInMeters()->willReturn(1.00)->shouldBeCalled();
        $this->getPrintableText()->shouldReturn('1m');
    }

    public function it_will_return_length_in_meters_for_large_sized_products($input)
    {
        $input->getInMilimeters()->willReturn(10000)->shouldBeCalled();
        $input->getInMeters()->willReturn(10.00)->shouldBeCalled();
        $this->getPrintableText()->shouldReturn('10m');
    }

    public function it_will_return_length_in_centimeters_if_product_is_between_10cm_and_1meter($input)
    {
        $input->getInMeters()->willReturn(0.4)->shouldBeCalled();
        $input->getInCentimeters()->willReturn(40.00)->shouldBeCalled();
        $input->getInMilimeters()->willReturn(400)->shouldBeCalled();
        $this->getPrintableText()->shouldReturn('40cm');
    }

    public function it_will_return_length_in_milimeters_for_small_product_sized_items($input)
    {
        $input->getInMilimeters()->willReturn(12)->shouldBeCalled();
        $this->getPrintableText()->shouldReturn('12mm');
    }
}
