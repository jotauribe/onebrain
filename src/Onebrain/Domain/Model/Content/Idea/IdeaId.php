<?php
/**
 * Created by PhpStorm.
 * User: Jota
 * Date: 19/07/2016
 * Time: 12:51 AM
 */

namespace Onebrain\Domain\Model\Content\Idea;

use Onebrain\Domain\Model\Identity;
use Onebrain\Onebrain\Domain\Model\Content\Problem\ProblemId;

class IdeaId implements Identity{

    /**
     * @var string
     */
    private $id;

    /**
     * @return string
     */
    public function id(){

        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(){

        return 'IdeaId';

    }
}
