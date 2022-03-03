<?php

class Grunt extends Enemy implements ICanBeInvincible {

public function __construct(string $nName)    {
    //Call the parent constructor
    parent::__construct(3, $nName);

}

public final function decreaseHeath(int $points)  {
    //do nothing
    echo "I'm invncible!";
}

public function attackWithClub()   {
    echo "Attack with Club";
    //return hitpoint damage
    return -20;
}

public function decreaseHealth(int $points) {

}

}