<?php
/**
 * Created by PhpStorm.
 * User: jota
 * Date: 20/07/16
 * Time: 06:20 PM
 */

namespace Onebrain\Domain\Model\User;

use Onebrain\Domain\Model\Identity;


class UserId implements Identity{


    /**
     * @return string
     */
    public function asString()
    {
        // TODO: Implement id() method.
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'UserId';
    }
}