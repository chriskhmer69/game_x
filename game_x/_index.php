<?php 
include_once "GameManager.php;
class GameCONTROLER
if (empty($_GET['PAGE'])){

require_once "view/home.vieau.php";

}else {


    switch($_GET[PAGE]){
case "accueil": require_once "view/home.view.php";
    }else{
        $url = explode ("/", filter_var ($GET['page']),FILTER);
        var_dump($url);
switch($GET['page']){
case"accueil" : require_once "view/home.view.php";
break;
case "games" :$gameController-> displayGames();
break;

switch(url[0]){
case "accueil" : require_once"wiew/home.view.php";
breack;
case "games":
    if(empty($url[1])) 
    $gameController->display();
break;
}

}


}

    }
    case"games":
        if (empty($url[1])){
$gamesController->displayGames();
        }else if (url[1]=== "add"){
$gameController->newGamesForm();
        }else if (url[1]==="edit"){

    }else if ($url[1]==="delete"){
        echo "supprimer un jeu";
    }
      
    break;


        






    









ob start()?>






<p>ACCEUIL - hello world</p>


<?php

$content = ob_get_clean();
$title= Bienvenue chez Game-x";
require_once "base.html.php";
?>


$content="Accueil-Hello world";
$title="Bienvenue chez Game-X"
require_once "base.html.php";







?>