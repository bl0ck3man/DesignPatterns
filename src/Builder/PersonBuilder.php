<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 21/08/2017
 * Time: 22:33
 */

namespace Builder;

require_once 'src/Builder/Person.php';

class PersonBuilder
{
    private $name;
    private $surname;
    private $email;
    private $phone;

    public function name($name)
    {
        $this->name = $name;
        return $this;
    }

    public function surname($surname)
    {
        $this->surname = $surname;
        return $this;
    }

    public function email($email)
    {
        $this->email = $email;
        return $this;
    }

    public function phone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    public function build() {
        return new Person($this);
    }
}