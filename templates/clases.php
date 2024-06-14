<?php

class SuperHero{
    
    public function __construct(
        public $name,
        public $powers,
        public $planet)
    {
    

    }

public function attack(){
    return "¡$this->name ataca con sus poderes $this->powers";

}
public function description(){
    return "$this->name es un superheroes que viene de 
    $this->planet y tiene los siguientes poderes 
    $this->powers";
}


}


$hero = new SuperHero("Batman","Dinero, Inteligencia","Gotham");
echo $hero->attack();




?>