<?php
/**
 * Created by PhpStorm.
 * User: jota
 * Date: 20/07/16
 * Time: 06:20 PM
 */

namespace Onebrain\Domain\Model;


abstract class Identity{

    /**
     * @var string
     */
    private $id;

    /**
     * @return string
     */
    public function id(){

        return $this->id;

    }

    /**
     * @param Identity $anObject
     * @return bool
     */
    public function equals($anObject = null){

        return ((!$anObject == null) && ($anObject instanceof self) && ($anObject->id() == $this->id()));

    }

}