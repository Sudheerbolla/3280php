<?php

class Grunt extends Enemy{

public function __construct(string $nName)    {
    //Call the parent constructor
    parent::__construct(3, $nName);

}

public function attackWithClub()   {
    echo "Attack with Club";
    //return hitpoint damage
    return -20;
}

}