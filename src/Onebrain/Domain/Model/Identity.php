<?php
/**
 * Created by PhpStorm.
 * User: jota
 * Date: 20/07/16
 * Time: 06:20 PM
 */

namespace Onebrain\Domain\Model;

interface Identity{

    /**
     * @return string
     */
    public function asString();

}