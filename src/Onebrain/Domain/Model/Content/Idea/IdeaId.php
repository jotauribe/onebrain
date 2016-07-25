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

class IdeaId extends Identity{

    /**
     * @var ideaId
     */
    private $ideaId;

    /**
     * @var ProblemId
     */
    private $problemId;

    /**
     * @var UserId
     */
    private $autorId;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $createdOn;

    /**
     * @var \DateTime
     */
    private $updatedOn;

    /**
     * IdeaId constructor.
     * @param IdeaId $ideaId
     * @param ProblemId $problemId
     * @param string $title
     * @param string $description
     */
    public function __construct($ideaId, $problemId, $title, $description){

        $this->ideaId = $ideaId;
        $this->problemId = $problemId;
        $this->title = $title;
        $this->description = $description;
        $this->createdOn = new \DateTimeImmutable();

    }

}
