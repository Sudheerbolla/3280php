<?php

function makeDeposit(& $accountBalance) {

    $depositAmount = prompt("Please enter the amount you would like to deposit");
    //transaction charge
    $accountBalance -= 1;
    $accountBalance += $depositAmount;
}

?>