<?php

abstract class Aventurier {

    private $name;
    private $classe;

    public function __construct (string $name, string $classe) {
        $this->name = $name;
        $this->classe = $classe;
    }

    public function hello()
    {
        echo "Bonjour, je m'appelle " .$this->name. ". Je suis un" .$this->classe. " !"; 
    }

    public function avancer() 
    {
        echo "J'avance en pas chassé, c'est plus discret"; 
    }

    abstract protected function attack();

}


?>