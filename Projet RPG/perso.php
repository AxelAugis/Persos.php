<?php 

session_start();
require 'Cours prof/POO/Projet RPG/index.php';
require 'Cours prof/POO/Projet RPG/Aventurier.php';

if(isset($_POST)) {
    $name = $_POST['name'];
    $classe = $_POST['classe'];
    
    switch($classe) {
        case "guerrier" :
            require_once "Guerrier.php";
            $aventurier = new Guerrier($name, $classe);
            $aventurier->hello();
            break;

        case "mage" :
            require_once "Mage.php";
            $aventurier = new Mage($name, $classe);
            $aventurier->hello();
            break; 
            
        case "archer" :
            require_once "Archer.php";
            $aventurier = new Archer($name, $classe);
            $aventurier->hello();
            break;

    }
} else {
    echo "féchié";
}
?>