<?php

require('src/functions.php');

$cont = task1(["a", "b", "c"]);
$cont = task2("+", 1, 2, 3, 4, 5, 0);
echo $cont . "<br/>";
$cont = task3(3, 3);
echo $cont . "<br/>";
task4("24.02.2016 00:00:00");
task5();

file_put_contents("test.txt", "Hello again!");
task6("test.txt");
