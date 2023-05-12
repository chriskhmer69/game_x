<?php

require_once "GameManager.php";




class GameController{
private $gameManager;

}



// Charger la liste des jeux depuis la base de données
public function_construct(){

$this->gameMANAGER + NEW GameManager
$this->gameManager->loadGames();



}

public function displayGames(){
$games= $this->gameManager
require_once

}



$gameManager = new GameManager();
$gameManager->loadGames();
$games= GameManager->getGames();

public function newGamesForm(){
require_once "view/new.game.view.php"

}




?>