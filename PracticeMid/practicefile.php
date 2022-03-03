<?php

require_once("inc/Entities/ICanBeInvincible.interface.php");
require_once("inc/Entities/Enemy.class.php");
require_once("inc/Entities/Grunt.class.php");
require_once("inc/Entities/Alien.class.php");
require_once("inc/Entities/Wizard.class.php");

require_once("inc/Utility/Page.class.php");
require_once("inc/Utility/EnemyFactory.class.php");

Page::setTitle("Week 6 Demo");
Page::header();

$newEnemies = EnemyFactory::generateEnemies(5);

foreach($newEnemies as  $e)  {
    $e->greeting();
    $e->decreaseHealth(rand(0,100));
    $e->healthStatus();
}


Page::footer();

?>