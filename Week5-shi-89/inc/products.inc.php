<?php

function parseProducts($data)   {

    //Array to store all the products
    $products = array();

    try {

            $lines = explode("\n", $data);

            //For each line
        for ($ln = 1; $ln < count($lines); $ln++)   {
            
            //check for double quotes
                if (!empty(strstr($lines[$ln],'"'))) {
                    $lineArray = str_split($lines[$ln]);

                    //Find the first one
                    $firstInstance = strpos($lines[$ln],'"');
                    //Find the second one, starting after the position of the first
                    
                    $secondInstance = strpos(substr($lines[$ln],$firstInstance + 1,count($lineArray) -1),'"');

                    //Cut the string
                    $fieldWithNoCommas = substr($lines[$ln], $firstInstance, $secondInstance +1);

                    //remove the comma
                    $fieldWithNoCommas = str_replace(',',"",$fieldWithNoCommas);
                    $fieldWithNoCommas = str_replace('"',"",$fieldWithNoCommas);

                    //Get the first part of the string
                    $first = substr($lines[$ln],0,$firstInstance);
                    
                    //get the last part of the string
                    $last = substr($lines[$ln],$secondInstance +2,  (count($lineArray) - $secondInstance));

                    $lines[$ln] = $first . $fieldWithNoCommas . $last;

                //     var_dump($first);
                //     var_dump($fieldWithNoCommas);
                //     var_dump($last);
                }
               
            //Split by comma
            $columns = explode(",", $lines[$ln]);

            //Check the column count matches what we expect
            if (count($columns) != 4)   {
                throw new Exception("Problem parsing file on line $ln");
            } else {
                //Add the product
                $products[] = $columns;
            }
        }
        
        } catch (Exception $pex)    {
            echo $pex->getMessage();
        }
    
    return $products; 
}