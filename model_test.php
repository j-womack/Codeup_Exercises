<?php

require_once('Model.php');

$model1 = new Model;

$model1->name = 'test name';

$model1->test = 'test test';

$model1->number = 5;

echo $model1->name . PHP_EOL;

echo $model1->test . PHP_EOL;

echo $model1->number . PHP_EOL;

?>