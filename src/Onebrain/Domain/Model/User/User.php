<?php
/**
 * Created by PhpStorm.
 * User: Jota
 * Date: 14/07/2016
 * Time: 10:44 AM
 */

namespace Onebrain\Domain\Model\User;


class User{

    /**
     * @var UserId
     */
    private $userId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $email;

    /**
     * User constructor.
     *
     * @param $userId
     * @param string $name
     * @param string $lastname
     * @param string $email
     */
    public function __construct($userId,$name, $lastname, $email){

        $this->UserId = userId;
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function name(){

        return $this->name;

    }

    /**
     * @param string $name
     */
    public function editName($name){

        $this->name = $name;

    }

    /**
     * @return string
     */
    public function editId(){

        return $this->userId;

    }

    /**
     * @return string
     */
    public function lastname(){

        return $this->lastname;

    }

    /**
     * @param string $lastname
     */
    public function editLastname($lastname){

        $this->lastname = $lastname;

    }

    /**
     * @return string
     */
    public function email(){

        return $this->email;

    }

    /**
     * @param string $email
     */
    public function editEmail($email){

        $this->email = $email;

    }

}