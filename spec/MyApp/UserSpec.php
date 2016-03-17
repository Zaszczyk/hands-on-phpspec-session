<?php

namespace spec\MyApp;

use MyApp\BankAccount;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UserSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('MyApp\User');
    }

    function it_should_have_user_id()
    {
        $this->setId('id');
        $this->getId()->shouldReturn('id');
    }

    function it_holds_bank_account_to_monitor(BankAccount $bankAccount)
    {
        $this->setBankAccount($bankAccount);
        $this->getBankAccount()->shouldReturn($bankAccount);
    }

    function it_holds_savings_bank_account(BankAccount $savingsBankAccount)
    {
        $this->setSavingsBankAccount($savingsBankAccount);
        $this->getSavingsBankAccount()->shouldReturn($savingsBankAccount);
    }
}
