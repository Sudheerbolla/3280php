<?php

function generateTables($xaxis,$yaxis)   {
    $tables = array();

    for ($x = 1; $x <= $xaxis; $x++) {
        for ($y = 1; $y <= $yaxis; $y++) {
            $tables[$x][$y] = ($x * $y);
        }
    }

    return $tables;
}