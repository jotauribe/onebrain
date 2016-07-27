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
    public function id();

    /**
     * @param Identity $anObject
     * @return bool
     */
    //public function equals($anObject = null){
    //
    //    return ((!$anObject == null) && ($anObject instanceof $this) && ($anObject->id() == $this->id()));

    //}

}