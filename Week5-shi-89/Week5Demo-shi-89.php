<?php

require_once("inc/config.inc.php");
require_once("inc/html.inc.php");
require_once("inc/file.inc.php");
require_once("inc/products.inc.php");


// $data = getcontents(DATA_FILE);
if (isset($_FILES) && !empty($_FILES)) {
    $data = getcontents($_FILES["csvUpload"]["tmp_name"]);
}

html_header("Week 5 Demo");

// var_dump($_FILES);

html_uploadForm();

if (isset($data))   {
    html_ProductView(parseProducts($data));
}

html_footer();

?>