<?php

function prompt($string)    {
    echo $string . "\n";
    $response = stream_get_line(STDIN, 1024, PHP_EOL);
    return $response;
}