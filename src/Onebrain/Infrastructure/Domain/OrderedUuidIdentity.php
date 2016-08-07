<?php
/**
 * Created by PhpStorm.
 * User: Jota
 * Date: 05/08/2016
 * Time: 9:38 AM
 */

namespace Onebrain\Infrastructure\Domain;


use Onebrain\Domain\Model\Identity;
use Ramsey\Uuid\Uuid;

abstract class OrderedUuidIdentity extends Uuid implements Identity{

    public function nextIdentity(){

        $uuid = Uuid::uuid4();

    }

}