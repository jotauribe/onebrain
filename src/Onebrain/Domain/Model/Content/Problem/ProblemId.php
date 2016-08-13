<?php
/**
 * Created by PhpStorm.
 * User: Jota
 * Date: 24/07/2016
 * Time: 11:15 PM
 */

namespace Onebrain\Onebrain\Domain\Model\Content\Problem;


use Onebrain\Domain\Model\Identity;

class ProblemId implements Identity{

    /**
     * @var string
     */
    private $id;

    public function __construct($anId){

        $this->id = $anId;

    }

    /**
     * @return string
     */
    public function asString(){

        return $this->id;

    }

    public function getName(){

        return 'ProblemId';

    }
}