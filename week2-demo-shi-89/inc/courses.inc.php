<?php


/**
 * This function sorts by instructorname
 */
function cmp_InstructorName($x, $y) {
    //If X is greater than Y
    if ($x[1] > $y[1])    {
        return 1;
    } else if ($x[1] < $y[1]) {
        return -1;
    } else {
        return 0;
    }
}

function cmp_InstructorLastName($x, $y) {
    //split the name and record the last name
    $lastNameX = explode(" ",$x[1])[1];
    $lastNameY = explode(" ",$y[1])[1];
    echo "Comparing: $lastNameX and $lastNameY"."\n"; 

    return $lastNameX <=> $lastNameY;

}