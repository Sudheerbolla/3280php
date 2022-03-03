<?php

require_once("./inc/courses.inc.php");
// $courses = array("CSIS 3280", "CSIS 3275", "CSIS 3160");

//associative array

$courses = [];

// $courses = ["CSIS 3275" => "Ivan Wong",
//     "CSIS 3280" => "Bambang Sarif",
//     "CSIS 3160" => "Rahim Virani"];

$courses = array(
    array("CSIS 3275","Ivan Wong","B+","5"),
    array("CSIS 3280","Bambang Sarif", "A+","2"),
    array("CSIS 3160","Gabriel Vitus","F","3")
);

// sort($courses);
// usort($courses,'cmp_InstructorName');
usort($courses,'cmp_InstructorLastName');
// usort($courses, function($x,$y) { return $x[3] <=> $y[3];});



    //print out

    // echo $courses[1];
    
    // echo $courses["CSIS 3280"]."\n";

    //CSIS 3160, change of instructor
    // $courses["CSIS 3160"] = "Gabriel Vitus";

    //Show all the instructor
    // foreach($courses as $course)    {
    // foreach($courses as $key => $value)    {
    //     // echo $course."\n";
    //     echo "$value $key \n";
    // }

var_dump($courses);
?>
