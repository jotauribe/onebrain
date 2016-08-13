<?php
/**
 * Created by PhpStorm.
 * User: Jota
 * Date: 05/08/2016
 * Time: 2:01 PM
 */

require '..\vendor\autoload.php';


var_dump((Onebrain\Infrastructure\Domain\Model\OrderedUuidIdentity::orderedUuid()));
echo Onebrain\Infrastructure\Domain\Model\OrderedUuidIdentity::orderedUuid().'<br>';
echo Onebrain\Infrastructure\Domain\Model\OrderedUuidIdentity::orderedUuid().'<br>';
echo Onebrain\Infrastructure\Domain\Model\OrderedUuidIdentity::orderedUuid().'<br>';
echo Onebrain\Infrastructure\Domain\Model\OrderedUuidIdentity::orderedUuid().'<br>';
echo Onebrain\Infrastructure\Domain\Model\OrderedUuidIdentity::orderedUuid().'<br>';
echo Onebrain\Infrastructure\Domain\Model\OrderedUuidIdentity::orderedUuid().'<br>';
echo '<br> DEC"HEX'.microtime(true).'+++++++++++++++++++++'.dechex(microtime(true));