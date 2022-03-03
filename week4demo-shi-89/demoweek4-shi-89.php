<?php

require_once("inc/html.inc.php");
require_once("inc/calculator.inc.php");
require_once("inc/date.inc.php");

//If we have the get variables then generate the array from the model.
if (isset($_GET["xaxis"]) && isset($_GET["yaxis"])) {
    $timesTables = generateTables($_GET["xaxis"], $_GET["yaxis"]);
}

//Check to see if the date info form was used
if (isset($_GET["dob"]))    {
    //Convert the post data to a timestamp
    $ts = strtotime($_GET["dob"]);
}

html_header();

//Check if to see we have times tables
if (isset($timesTables))    {
    //Pass the model data to the view....
    html_timesTables($timesTables);
}

//Check if there is a valid timestamp
if (isset($ts)) {
    html_dateInfo($ts);
} else {
    //Genearte one
    $ts = getDefaultTimeStamp();
    html_dateInfo($ts);
}

//Display the form.
html_timesTablesForm();
html_datesForm();

html_footer();


?>