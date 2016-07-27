<?php
/**
 * Created by PhpStorm.
 * User: Jota
 * Date: 21/07/2016
 * Time: 3:49 PM
 */

namespace Onebrain\Infrastructure\Domain\Model\User;


use Doctrine\ORM\EntityRepository;
use Onebrain\Domain\Model\User\User;
use Onebrain\Domain\Model\User\UserId;
use Onebrain\Domain\Model\User\UserRepository;

class DoctrineUserRepository extends EntityRepository implements UserRepository{

    /**
     * @param UserId $userId
     * @return User
     */
    public function userOfId($userId){

        return $this->find($userId);

    }

    public function nextIdentity(){

        // TODO: Implement nextIdentity() method.

    }

    /**
     * @param User $user
     */
    public function save($user){

       $this->getEntityManager()->persist($user);

    }

    /**
     * @param \ArrayObject
     * @return \ArrayObject
     */
    public function userOf($criterias){

        return $this->findOneBy($criterias);

    }
}