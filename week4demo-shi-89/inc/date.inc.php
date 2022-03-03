<?php

function getDefaultTimeStamp()  {
    $year = 2022;
    $month = 9;
    $day = 21;

    return mktime(0,0,$month,$day,$year);
}