<?php
/**
 * Created by PhpStorm.
 * User: Jota
 * Date: 05/08/2016
 * Time: 2:01 PM
 */

require '..\..\vendor\autoload.php';


$start = microtime(true);
echo Ramsey\Uuid\Uuid::uuid1().'<br>';
echo '<br> microtime(true): '.(microtime(true));
echo '<br> Tiempo de ejecucion: '.(microtime(true) - $start);

$uuid = Ramsey\Uuid\Uuid::uuid1();
$uuidAsArray = explode('-', $uuid);
var_dump($uuidAsArray);
echo "<br> vardumpmicrotime:   ";var_dump(microtime(true));
printf("%u\n", hexdec($uuidAsArray[1]));
$result = sprintf('%01.8s',microtime(true)/10000);
$result2 = $result * 1000;
echo '<br> MICROTIME.result   '. $result.'  result2:   '.$result2;
echo '<br>time()'.time();
echo '<br>';
var_dump(gettimeofday());
var_dump($uuid->getDateTime());
echo "<br> DATE TIME";
var_dump(new DateTime('+00:00'));
echo '<br><br> explode microtime false';
var_dump(substr(explode(' ', microtime(false))[0], 2, 5));
var_dump(microtime(false));
var_dump(microtime(true));




