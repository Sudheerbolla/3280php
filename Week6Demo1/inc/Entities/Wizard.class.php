<?php

class Wizard extends Enemy  {

    public function __construct(string $nName)  {
        //Call the parent constructor
        parent::__construct(1,$nName);
    }

    public function castASpell()    {
        echo "Abarah Cadabara!";
        //Health points
        die();
    }

}