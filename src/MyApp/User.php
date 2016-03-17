<?php

namespace MyApp;

class User
{
    private $id;
    private $username;
    private $password;
    private $email;
    /** @var BankAccount */
    private $bankAccount;
    /** @var BankAccount */
    private $savingsBankAccount;

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return BankAccount
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * @param BankAccount $bankAccount
     *
     * @return $this
     */
    public function setBankAccount($bankAccount)
    {
        $this->bankAccount = $bankAccount;

        return $this;
    }

    /**
     * @return BankAccount
     */
    public function getSavingsBankAccount()
    {
        return $this->savingsBankAccount;
    }

    /**
     * @param BankAccount $savingsBankAccount
     *
     * @return $this
     */
    public function setSavingsBankAccount($savingsBankAccount)
    {
        $this->savingsBankAccount = $savingsBankAccount;

        return $this;
    }

}
