<?php

/**
 * Student Name: Sam Hill
 * Lab: Demo Code
 * Student Number: 123456789
 */

//Store the command from the user
$userCommand = "";

//Store the account balance
$accountBalance = 0;

//forever
while (true)    {

    
    echo "Please enter a command: (h - help, q -q quit, d - deposit, b - account balance)";
    //do all the things
    $userCommand = stream_get_line(STDIN,1024,PHP_EOL);


    switch($userCommand)    {
        //deposit
        case "d":
            echo "Please enter an amount to deposit";
            $accountBalance += stream_get_line(STDIN,1024,PHP_EOL);
        break;

        case "b":
            // echo "Your account balance is: $accountBalance"."\n";
            printf("Your account balance is: $%.2f \n", $accountBalance);
            break;

        case "q":
            //Quit
            return;
        break;

        default:
            //Do nothing
        break;
    }
}

?>