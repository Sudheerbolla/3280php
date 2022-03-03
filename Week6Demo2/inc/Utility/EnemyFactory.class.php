<?php

class EnemyFactory
{

    private static $gruntNames = array("Sam Hill", "Wilson", "George");
    private static $alienNames = array("Lukara", "Martok", "Mara");
    private static $wizardNames = array("Gandalf the Grey", "Harry Potter", "Merlin");
    private static $enemyTypes = array("Grunt", "Wizard", "Alien");

    private static function generateEnemy() {
        $newType = self::$enemyTypes[rand(0, count(self::$enemyTypes) - 1)];
        $newName = self::getname($newType);
        //Get a random name
        $e = new $newType($newName);
        return $e;
    }

    public static function generateEnemies(int $numberOfEnemies)    {
        $enemies = array();
        for ($i =0; $i <= $numberOfEnemies;$i++) {
            //Add an enemy
            $enemies[] = self::generateEnemy();
        }
        //Return the array
        return $enemies;
    }

    private static function getName($type) {
        $randomName = "";
        switch ($type) {
            case "Grunt":
                $randomName  = self::$gruntNames[rand(0, count(self::$gruntNames) - 1)];
                break;
            case "Alien":
                $randomName =   self::$alienNames[rand(0, count(self::$alienNames) - 1)];
                break;
            case "Wizard":
                $randomName = self::$wizardNames[rand(0, count(self::$wizardNames) - 1)];
                break;
            default:
            $randomName = "nameless";
                break;
        }
        return $randomName;
    }
}
