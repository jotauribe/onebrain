<?php

/**
 * Created by PhpStorm.
 * User: Jota
 * Date: 27/07/2016
 * Time: 8:33 AM
 */

namespace Onebrain\Infrastructure\Domain\Model\Idea;

use Doctrine\ORM\EntityRepository;
use Onebrain\Domain\Model\Content\Idea\Idea;
use Onebrain\Domain\Model\Content\Idea\IdeaId;
use Onebrain\Domain\Model\Content\Idea\IdeaRepository;
use Onebrain\Infrastructure\Domain\Model\OrderedUuidIdentity;

class DoctrineIdeaRepository extends EntityRepository implements IdeaRepository{

    /**
     * @return IdeaId
     */
    public function nextIdentity(){

        return new IdeaId(OrderedUuidIdentity::orderedUuid());

    }

    /**
     * @param IdeaId $ideaId
     * @return Idea
     */
    public function ideaOfId($ideaId){

        return $this->find($ideaId);

    }

    /**
     * @param \ArrayObject $array
     * @return \ArrayObject
     */
    public function ideaOf($criteriaArray){

        return $this->findOneBy($criteriaArray);

    }

    /**
     * @param Idea $idea
     * @return void
     */
    public function save($idea){

        $this->getEntityManager()->persist($idea);

    }

}