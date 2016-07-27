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

class Problem{

    /**
     * @var ProblemId
     */
    private $problemId;

    /**
     * @var
     */
    private $workspaceId;

    /**
     * @var UserId
     */
    private $authorId;

}