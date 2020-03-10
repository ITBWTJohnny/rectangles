<?php

require './functions.php';

if (empty($argv[1]) || empty($argv[2])) {
    echo 'Example: php console.php 4 6' . PHP_EOL;
} else {
    $result = countRectangles($argv[1], $argv[2]);

    echo 'Result: ' . $result . PHP_EOL;
}
