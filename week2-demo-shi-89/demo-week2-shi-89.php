<?php

require_once("./inc/account.inc.php");
require_once("./inc/console.inc.php");


$accountBalance = 0;
// Absolute file  paths bad!
// require_once("c:/temp/demoweek2/inc/console.inc.php");

$name = prompt("Please enter your name");

makeDeposit($accountBalance);

// showAccount($accountBalance);
showAccount();

var_dump($name);