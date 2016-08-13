<?php
/**
 * Created by PhpStorm.
 * User: Jota
 * Date: 14/07/2016
 * Time: 3:38 PM
 */

namespace Onebrain\Domain\Model\Workspace;

use Onebrain\Domain\Model\User\UserId;

class Workspace{

    /**
     * @var WorkspaceId
     */
    protected $workspaceId;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var UserId
     */
    protected $ownerId;

    /**
     * Workspace constructor.
     * @param WorkspaceId $workspaceId
     * @param string $name
     * @param string $description
     * @param UserId $ownerId
     */
    public function __construct($workspaceId, $name, $description, $ownerId){

        $this->workspaceId  = $workspaceId;
        $this->name = $name;
        $this->description = $description;
        $this->ownerId = $ownerId;
    }


}


