<?php

class Enemy {

private int $health;
private int $level;
private string $name;

public function __construct(int $nLevel, string $nName)   {
        //Set a hundred health
        $this->health = 100;
        $this->level = $nLevel;
        $this->name = $nName;
}

public function greeting()   {
    return "Hello, my name is $this->name";
}

public function decreaseHealth(int $points) {
    $this->health -= $points;
}

public function healthStatus()  {
    echo "Health is: ". $this->health ."<br>"."Type is: ". get_class($this)."<br>";
}

}

?>