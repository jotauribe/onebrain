<?php
/**
 * Created by PhpStorm.
 * User: Jota
 * Date: 05/08/2016
 * Time: 9:38 AM
 */

namespace Onebrain\Infrastructure\Domain\Model;


use Onebrain\Domain\Model\Identity;
use Ramsey\Uuid\Uuid;

abstract class OrderedUuidIdentity extends Uuid{

    /**
     * The factory to use when creating UUIDs.
     * @var UuidFactoryInterface
     */
    private static $factory = null;

    public static function orderedUuid(){

        return self::getFactory()->orderedUuid();
    }

    public static function getFactory()
    {
        if (!self::$factory) {
            self::$factory = new OrderedUuidIdentityFactory();
        }

        return self::$factory;
    }

}