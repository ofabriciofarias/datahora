<?php

echo strtotime("2001-09-11") . "<br>";
echo strtotime("now") . "<br>";
echo strtotime("+1 day") . "<br>";
echo strtotime("+1 week") . "<br>";
echo strtotime("+1 Year") . "<br>";
echo date("d/m/Y",strtotime("+1 day +2 week")) . "<br>";

$timeStamp = strtotime("2001-09-11");

echo date("d/m/Y", $timeStamp);
?>