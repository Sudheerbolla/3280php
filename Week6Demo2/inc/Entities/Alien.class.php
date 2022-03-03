<?php

class Alien extends Enemy {

    public function __construct(string $nName)    {
        //Call the parent constructor
        parent::__construct(2, $nName);
    }
    
    public function attackWithBlaster() {
        echo "ZZZZAAAAaaappp";
        return -50;
    }

}