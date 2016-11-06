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
    private $lastName;

    /**
     * @var string
     */
    private $email;

    /**
     * @var \DateTime
     */
    private $createdOn;

    /**
     * @var \DateTime
     */
    private $updatedOn;

    /**
     * User constructor.
     *
     * @param $anUserId
     * @param $aName
     * @param $aLastName
     * @param $anEmail
     */
    public function __construct($anUserId,$aName, $aLastName, $anEmail){

        $this->UserId = $anUserId;
        $this->setName($aName);
        $this->setLastName($aLastName);
        $this->setEmail($anEmail);
        $this->createdOn = new \DateTime();
        $this->updatedOn = new \DateTime();
    }

    public function id()
    {
        return $this->userId;
    }

    /**
     * @return string
     */
    public function name(){

        return $this->name;

    }

    /**
     * @param $aName
     */
    public function changeName($aName){

        $this->setName($aName);
        $this->setUpdateDate();

    }

    protected function setName($aName)
    {
        $aName = trim($aName);
        if (!$aName) {
            throw new \InvalidArgumentException('A valid name must be provided');
        }
    }

    /**
     * @return string
     */
    public function lastName(){

        return $this->lastName;

    }

    /**
     * @param string $aLastName
     */
    public function changeLastName($aLastName){

        $this->setLastName($aLastName);
        $this->setUpdateDate();

    }

    /**
     * @param $aLastName
     */
    protected function setLastName($aLastName)
    {
        $aLastName = trim($aLastName);
        if (!$aLastName) {
            throw new \InvalidArgumentException('A valid lastname must be provided');
        }
        $this->lastName = $aLastName;
    }

    /**
     * @return string
     */
    public function email(){

        return $this->email;

    }

    /**
     * @param $anEmail
     * @internal param string $email
     */
    public function changeEmail($anEmail){
        $this->setEmail($anEmail);
        $this->setUpdateDate();
    }

    /**
     * @param $anEmail
     * @internal param string $email
     */
    public function setEmail($anEmail){
        $anEmail = trim($anEmail);
        if (!$anEmail) {
            throw new \InvalidArgumentException('A valid email must be provided');
        }

        $this->email = $anEmail;

    }

    /**
     * @return void
     */
    protected function setUpdateDate()
    {
        $this->updatedOn = new \DateTime();
    }

}