<?php
/**
 * Created by PhpStorm.
 * User: Jota
 * Date: 27/07/2016
 * Time: 8:25 AM
 */

namespace Onebrain\Onebrain\Domain\Model\Content\Problem;


use Onebrain\Domain\Model\User\User;
use Onebrain\Domain\Model\User\UserId;
use Onebrain\Domain\Model\Workspace\WorkspaceId;

class Problem{

    /**
     * @var ProblemId
     */
    private $problemId;

    /**
     * @var WorkspaceId
     */
    private $workspaceId;

    /**
     * @var UserId
     */
    private $authorId;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    public function __construct($problemId, $workspaceId, $authorId, $title, $description){

        $this->problemId = $problemId;
        $this->workspaceId = $workspaceId;
        $this->authorId = $authorId;
        $this->title = $title;
        $this->description = $description;

    }



}