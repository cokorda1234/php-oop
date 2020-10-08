<?php
class ape extends Animal{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    function yell(){
        echo "Auooo";
    }
}