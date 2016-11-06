<?php
/**
 * Created by PhpStorm.
 * User: jota
 * Date: 20/07/16
 * Time: 06:20 PM
 */

namespace Onebrain\Domain\Model\User;

use Onebrain\Domain\Model\Identity;
use Onebrain\Infrastructure\Domain\Model\OrderedUuidIdentity;


class UserId implements Identity{

    /**
     * @var string $id
     */
    private $id;


    /**
     * @return string
     */

    public function __construct($anId)
    {
        $this->id = $anId;
    }

    public function asString()
    {
        return $this->id;

    }

    public function equals(UserId $userId){
        return $userId->asString() === $this->asString();
    }

    public function __toString()
    {
        return $this->asString();
    }

}