<?php


require_once("inc/console.inc.php");
require_once("inc/products.inc.php");


$command = "";
$products = array();


while ($command != "q" )    {
    $command = prompt("Please enter your command, (i - for item, l - for list and s - for sort");

    switch ($command)   {
        case "i":

            $itemName = prompt("Please enter the item name: ");
            $itemPrice = prompt("Please enter the item price");

            $products[] = [ $itemName, $itemPrice ]; 

            break;
            case "l";
                printProducts($products);
            break;
            case "s";
            usort($products, 'cmpSortByPrice');
            break;
    }
}

?>
