<?php
/**
 * Created by PhpStorm.
 * User: Jota
 * Date: 06/08/2016
 * Time: 5:55 PM
 */

namespace Onebrain\Domain\Model\Workspace;


use Onebrain\Domain\Model\User\UserId;

interface WorkspaceRepository{

    /**
     * @param UserId $userId
     * @return mixed
     */
    public function workspaceOfUserId($userId);

    /**
     * @param Workspace $workspace
     * @return mixed
     */
    public function save($workspace);

}