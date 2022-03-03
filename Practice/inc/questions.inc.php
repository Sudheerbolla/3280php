<?php

// Write a program that uses a function to add two numbers together.
function question1(int $numb1,int $numb2) : String   {
    return $numb1+$numb2;
}

// Write a program that prompts the user for a number, using a function return if the valude is odd or
// even, your function must return a boolean value (true or false).

function question2IsEven() : bool {
    echo "Please enter a number: "."\n";
    $inputNumber = stream_get_line(STDIN, 1024, PHP_EOL);
    return ($inputNumber % 2 == 0) ;
}

//  Write a program that calculates the area of a cube. Use a function to perform the calculation.
function question3() : int {
    echo "Please enter length of cube: "."\n";
    $inputNumber = stream_get_line(STDIN, 1024, PHP_EOL);
    return $inputNumber*$inputNumber*$inputNumber ;
}

// Write a program that pronts the user for the address label, store it in an associative array. Your function
// when printing the label must accept only one array and print the information out in format:
function question4() {
    echo "Please enter First Name: \n";
    $firstName = stream_get_line(STDIN, 1024, PHP_EOL);
    echo "Please enter Last Name: \n";
    $lastName = stream_get_line(STDIN, 1024, PHP_EOL);
    echo "Please enter Street Address: \n";
    $streetAddress = stream_get_line(STDIN, 1024, PHP_EOL);
    echo "Please enter City: \n";
    $city = stream_get_line(STDIN, 1024, PHP_EOL);
    echo "Please enter Province: \n";
    $province = stream_get_line(STDIN, 1024, PHP_EOL);
    echo "Please enter Postal Code: \n";
    $postalCode = stream_get_line(STDIN, 1024, PHP_EOL);

    $addressArray= [
        "firstName" => $firstName,
        "lastName" => $lastName,
        "streetAddress" => $streetAddress,
        "City" => $city,
        "province" => $province,
        "postalCode" => $postalCode,    
    ];

    return $addressArray["firstName"]." ".$addressArray["lastName"]."\n".$addressArray["streetAddress"]."\n".$addressArray["city"]." ".$addressArray["province"]."\n".$addressArray["postalCode"];
}

// White a program that prompts the user for an unliminted set of numbers, store the numbers in an array
// and then have the program do the following:
// Add all the numbers together
// Determinate the average of all the numbers
// Determine the hightest number
// Determine the lowest number>
// You must store the results for all of the above calculations in a single array using one funciton. You must print
// them out using another function that accepts the array from the calculations function.

function question5() {
    $array = range(0, 75);

    $totalSum = array_sum($array);
    $totalCount = count($array);
    $average = $totalSum/$totalCount;
    $highestNumber = max($array);
    $lowestNumber = min($array);

    $detailsArray= [
        $totalSum,
        $average,         
        $highestNumber,
        $lowestNumber
    ];
    calculations($detailsArray);

    return $totalSum." is total sum, \n".$average." is average, ".$highestNumber." is highest number, \n".$lowestNumber." is lowest number\n";
}

function calculations($array) {
    foreach($array as $item) {
        echo $item."\n";
    }
}

// Write a program that contains the following data in an array.
// Sort the Array by population in reverse order and print out the result. You must use the usort() function.
// City Population
// Vancouver 631,486
// Surrey 517,887
// Burnaby 232,755
// Richmond 198,309
// Abotsford 141,397
// Victoria 85,792

function question6() {
    $citiesArray= [
        "Vancouver" => 631486,
        "Surrey" => 517887,
        "Burnaby" => 232755,
        "Richmond" => 198309,
        "Abotsford" => 141397,
        "Victoria" => 85792,
    ];

    usort($citiesArray,'sortArrayWithPopulation');
    
    print_r($citiesArray);

}

function sortArrayWithPopulation($x, $y) {
    if ($x > $y)    {
        return 1;
    } else if ($x < $y) {
        return -1;
    } else {
        return 0;
    }
}

// Given the following data, write a program that holds the information in an array. Write a program that
// calculates the total amount of sales per category for the year 2019 in an array. Your program logic
// should allow for additional items and categories without modifying the logic.
// Week 2 - Arrays and Sorting Excercises.md 27/12/2019
// 2 / 2
// Item Category Year Price
// Wool Scarf Clothing 2018 $19.99
// Wool Socks Clothing 2019 $14.99
// Pocket Knife Accessories 2018 $49.99
// Black WristWatch Accessories 2019 $19.99
// Pocket Light Accessories 2019 $35.99
// Print the output per category

function question7(){

    
}

?>