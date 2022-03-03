`<?php

function html_header()  {

echo '<!DOCTYPE html>
<html>

    <head>
        <title>
            CSIS 3280 Week4
        </title>
    </head>
    
<body>
    <h1>CSIS 3280 Week4</h1>';

}


function html_footer() { 
echo '</body>    
</html>';
}

function html_timesForm()   { ?>

<?php 
}

function html_timesTables($data) {

    echo '<table border=1>';

    foreach ($data as $row) {
        echo "<tr>";
        for ($y = 1; $y <=  count($row); $y++)   {
            echo "<td>". $row[$y] ."</td>";
        }
        echo "</tr>";
    }

    echo '</table>';

}

function html_timesTablesForm() {
    echo '<form action="" method="get">
    <p>Please enter the first number for your times tables</p>
    <input type="number" name="xaxis" value=7></p>
    <p>Please enter the second number for your times tables</p>
    <input type="number" name="yaxis" value=6></p>
    <input type="submit" value="Go get them!">  </form>';
}

function html_datesForm() {
    echo '<form action="" method="get">
    <p>Please enter a date.</p>
    <input type="date" name="dob" value=7></p>
    <input type="submit" value="Get Date Info!">  </form>';
}

function html_dateInfo($ts)    {
    echo "The current month is: ".date("M", $ts)."<br>";
    echo "The current year is: ".date("Y", $ts)."<br>";
    echo "The current month has: ".date("t", $ts)." days<br>";
    echo "The current day of the week is: ".date("w", $ts)."<br>";
}

?>