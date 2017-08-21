<?php
/**
 * Created by PhpStorm.
 * User: sergey
 * Date: 21/08/2017
 * Time: 22:33
 */

namespace Builder;

require_once 'src/Builder/PersonBuilder.php';

class Person
{
    private $name;
    private $surname;
    private $email;
    private $phone;

    /**
     * Person constructor.
     * @param PersonBuilder $personBuilder
     */
    public function __construct(PersonBuilder $personBuilder)
    {
        $this->name = $personBuilder->getName();
        $this->surname = $personBuilder->getSurname();
        $this->email = $personBuilder->getEmail();
        $this->phone = $personBuilder->getPhone();
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


}