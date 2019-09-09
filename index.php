<?php
include_once "QuadraticEquation.php";
$numberA = 1  ;
$numberB = 2;
$numberC = 1;
$test = new QuadraticEquation($numberA,$numberB,$numberC);
echo $test->display();
echo "<br>";