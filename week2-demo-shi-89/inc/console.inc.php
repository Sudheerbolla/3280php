<?php

/**
 * This function is for prompting the user, it will return any input.
 */
function prompt(String $message) : String   {
    echo $message."\n";
    return stream_get_line(STDIN, 1024, PHP_EOL);
}

function showAccount($accountBalance = "Not Specified")   {
    echo "Your account balance is: $accountBalance"."\n";
}