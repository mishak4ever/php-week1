<?php

function task1($array = [], $return = false)
{
    foreach ($array as $value) {
        $result[] = "<p>{$value}</p>";
        echo end($result);
    }
    if ($return) {
        return implode("", $result);
    }
}

function task2(string $oper, ...$args)
{
    if (!empty($args)) {
        $first = array_shift($args);
        foreach ($args as $arg) {
            switch ($oper) {
                case '+':
                    $first = $first + $arg;
                    break;
                case '-':
                    $first = $first - $arg;
                    break;
                case '*':
                    $first = $first * $arg;
                    break;
                case '/':
                    if ($arg == 0)
                        return "Деление на ноль недопустимо";
                    $first = $first / $arg;
                    break;
                default:
                    return "Неопознанный арифметический знак";
            }
        }
        return $first;
    }
    return "Нет аргументов";
}

function task3($x, $y)
{
    if (is_int($x) && is_int($y)) {
        echo '<table style="  border-spacing: 0px 0px; ">';
        for ($i = 1; $i <= $x; $i++) {
            echo '<tr>';
            for ($b = 1; $b <= $y; $b++) {
                echo '<td style="text-align: center; border: 1px solid gray; padding: 4px;">' . ($i * $b) . '</td>';
            }
            echo '<tr>';
        }
        echo '</table>';
    } else
        return "Переданы не целые числа";
}

function task4($time)
{
    echo date("d.m.Y H:i") . "<br/>";
    echo strtotime($time) . "<br/>";
}

function task5()
{
    $a = "Карл у Клары украл Кораллы";
    $b = "Две бутылки лимонада";
    echo str_replace("К", "к", $a) . "<br/>";
    echo str_replace("Две", "Три", $b) . "<br/>";
}

function task6($filename)
{
    if (file_exists($filename)) {
        echo file_get_contents($filename);
    }
}
