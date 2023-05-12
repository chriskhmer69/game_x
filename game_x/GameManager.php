<?php

public function loadGames() {
    // Se connecter à la base de données
    $dsn = "mysql:host=localhost;dbname=game_x";
    $user = "root";
    $password = "";
    $bdd = new PDO($dsn, $user, $password);

    // Récupérer la liste des jeux
    $query = "SELECT * FROM games";
    $result = $bdd->query($query);
    $games = array();
    while ($row = $result->fetch()) {
        $game = new Game($row['title'], $row['player_count']);
        $game->setId($row['id']);
        $games[] = $game;
    }
    $this->games = $games;

    // Fermer la connexion à la base de données
    $bdd = null;
}

?>





///////////////////////////////////////////////////////////////////////
<?php
class GameManager{
private $games;

public function addGame($game){
$this->games[] =$game;


}

public function getGames(){
return $this->$games;




}
}public function load game(){
$req =this->getBdd()->prepare "SELECT*FROM games);
$req->execute();
$myGames= $req->fetALL(PDO::FETCH_ASSOC);
$req->closeCursor();
foreach ($myGames as $Game){
$g =new Game ($game['id']



echo "<pre>"





}

