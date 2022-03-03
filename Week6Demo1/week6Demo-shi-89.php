<?php

require_once("inc/Entities/Enemy.class.php");
require_once("inc/Entities/Grunt.class.php");
require_once("inc/Entities/Alien.class.php");
require_once("inc/Entities/Wizard.class.php");

require_once("inc/Utility/Page.class.php");

Page::setTitle("Week 6 Demo");
Page::header();

$a = new Alien("Sam");
$g = new Grunt("Mikhail");
$w = new Wizard("Ankush");


Page::footer();

?>