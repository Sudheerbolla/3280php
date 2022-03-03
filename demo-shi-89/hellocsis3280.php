<?php

// <% .. %>
//<script

//Initialize Variables
$firstName = "";
$lastName = "";
$studentNumber = "";
$assessmentName = "";

//Variable to store the naming convention
$namingConvention = "";

//Prompt the user for the information
echo "Please enter your first name:";
$firstName = stream_get_line(STDIN,1024,PHP_EOL);

echo "Please enter your last name:";
$lastName = stream_get_line(STDIN,1024,PHP_EOL);

echo "Please enter your student number:";
$studentNumber = stream_get_line(STDIN,1024,PHP_EOL);

echo "Please enter the name of the assessment:";
$assessmentName = stream_get_line(STDIN,1024,PHP_EOL);

//Remove Spaces from assesssment
$namingConvention = str_replace(" ", "",$assessmentName); 
//Put a dash
$namingConvention .= "-";
//First character from the first name
$namingConvention .= substr($firstName,0,1);
//First two characters from the last name
$namingConvention .= substr($lastName,0,2);
//Put a dash
$namingConvention .= "-";
//Last two digits of the student number
$namingConvention .= substr($studentNumber,-2);


//Lowercase
$namingConvention = strtolower($namingConvention);

echo "You should use the naming convention: $namingConvention";

?>