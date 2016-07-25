<?php
/**
 * Created by PhpStorm.
 * User: Jota
 * Date: 21/07/2016
 * Time: 3:49 PM
 */

namespace Onebrain\Infrastructure\Domain\Model\User;


use Doctrine\ORM\EntityRepository;
use Onebrain\Domain\Model\User\UserRepository;

class DoctrineUserRepository extends EntityRepository implements UserRepository{


    public function userOfId($userId){
        $this->findOneBy($userId);
    }

    public function nextIdentity()
    {
        // TODO: Implement nextIdentity() method.
    }

    public function postOfId($aPostId)
    {
        // TODO: Implement postOfId() method.
    }

    public function save($aPost)
    {
        // TODO: Implement save() method.
    }
}