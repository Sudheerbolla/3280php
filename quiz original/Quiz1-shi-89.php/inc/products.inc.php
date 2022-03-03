<?php

function printProducts($products) {

    foreach ($products as $p)   {
        printf("%20s\n",$p[0]);
        printf("%20s\n",$p[1]);
    
    }
}

function cmpSortByPrice($x, $y) {
    return $x[1] <=> $y[1];
}

?>