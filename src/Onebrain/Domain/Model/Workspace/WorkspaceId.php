<?php
/**
 * Created by PhpStorm.
 * User: Jota
 * Date: 27/07/2016
 * Time: 1:26 PM
 */

namespace Onebrain\Domain\Model\Workspace;


use Onebrain\Domain\Model\Identity;

class WorkspaceId implements Identity{

    /**
     * @var string
     */
    private $id;

    /**
     * WorkspaceId constructor.
     * @param string $id
     */
    public function __construct($id){

        $this->id = $id;

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
    public function getName()
    {
        return 'WorkspaceId';
    }
}