<?php

function getcontents($fileName) {

    try {
    //file Handle
    $fh = fopen($fileName, 'r');

    //check if I could get a file handle, if not throw an exception
    if (is_null($fh))   {
        throw new Exception("Could not open file $fileName");
    }

    //Read contents
    $contents = fread($fh, filesize($fileName));

    //Shut the damn door
    fclose($fh);

  
    } catch (Exception $fex)    {
        //Barfs
        echo $fex->getMessage();
        //Barfs to log file.
        error_log($fex->getMessage(), 1);
    }

      //return the contents of the file
      return $contents;
    
}