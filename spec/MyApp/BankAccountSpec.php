<?php

namespace spec\MyApp;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BankAccountSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('MyApp\BankAccount');
    }

    function it_has_our_own_entity_id(){
        $this->setId('our-id');
        $this->getId()->shouldReturn('our-id');
    }

    function it_has_bank_account_number(){
        $this->setBankAccountNumber('12345-123456789');
        $this->getBankAccountNumber()->shouldReturn('12345-123456789');
    }
}
