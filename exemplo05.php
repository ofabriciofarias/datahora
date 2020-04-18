<?php

$data = new DateTime();

echo $data->format("d/m/Y H:i:s") . "<br>";

$periodo = new DateInterval("P15D");

$data->add($periodo);

echo $data->format("d/m/Y H:i:s") . "<br>";
?>