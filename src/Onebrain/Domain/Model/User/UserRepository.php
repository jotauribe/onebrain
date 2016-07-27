<?php
/**
 * Created by PhpStorm.
 * User: Jota
 * Date: 14/07/2016
 * Time: 12:45 PM
 */

namespace Onebrain\Domain\Model\User;

interface UserRepository{

    /**
     * @param UserId $userId
     * @return User
     */
    public function userOfId($userId);

    /**
     * @return UserId
     */
    public function nextIdentity();

    /**
     * @param \ArrayObject $criterias
     * @return \ArrayObject
     */
    public function userOf($criterias);

    /**
     * @param User $aUser
     * @return void
     */
    public function save($aUser);

}