<?php
/**
 * Created by PhpStorm.
 * User: Jota
 * Date: 19/07/2016
 * Time: 12:51 AM
 */

namespace Onebrain\Domain\Model\Content\Idea;

use Onebrain\Domain\Model\Identity;
use Onebrain\Domain\Model\User\UserId;
use Onebrain\Onebrain\Domain\Model\Content\Problem\ProblemId;

class IdeaId implements Identity{

    /**
     * @var string
     */
    private $id;

    /**
     * IdeaId constructor.
     * @param string $anId
     */
    public function __construct($anId)
    {
        $this->id = $anId;
    }

    /**
     * @return string
     */
    public function asString(){

        return $this->id;
    }

    /**
     * @return string
     */
    public function equals(IdeaId $aIdeaId)
    {
        return $this->asString() === $aIdeaId->asString();
    }

    public function __toString()
    {
        return $this->id;
    }
}
