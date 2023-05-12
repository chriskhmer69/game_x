<?php
require_once "Game.php";


// Afficher les jeux dans une table
ob_start();
?>
<h2>Liste de jeux</h2>
<table class="table table-hover text-center">
    <thead class="table-dark">
        <tr>
            <th>Titre</th>
            <th>Nombre de joueurs</th>
            <th colspan="2">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($gameManager->getGames() as $game) { ?>
            <tr>
                <td><?= $game->getTitle() ?></td>
                <td><?= $game->getPlayerCount() ?></td>
                <td><a href="edit_game.php?id=<?= $game->getId() ?>"><i class="fas fa-edit"></i></a></td>
                <td><a href="delete_game.php?id=<?= $game->getId() ?>"><i class="fas fa-trash"></i></a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<button class="btn btn-outline-success w-50 d-block m-auto"><a href="add_game.php">Ajouter un jeu</a></button>
<?php
$content = ob_get_clean();
$title = "Liste de jeux";
require_once "base.html.php";
?>

<a href="<?=URL ?>games/add"
<a href="<?=URL?>games














<?php ob_start()?>

<!-- Inclure le lien vers le fichier CSS de Font Awesome -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">

<?php
// Afficher un titre pour la section
echo "<h2>Games - Notre sélection</h2>";
?>

<table class="table table-hover text-center">
  <thead class="table-dark">
    <tr>
      <th>Titre</th>
      <th>Nombre de joueurs</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Starcraft 2</td>
      <td>8</td>
      <td><a href=""><i class="fa-solid fa-pen-to-square"></i></a></td>
      <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
    </tr>
    <tr>
      <td>Among US</td>
      <td>15</td>
      <td><a href=""><i class="fa-solid fa-pen-to-square"></i></a></td>
      <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
    </tr>
    <tr>
      <td>Valorant</td>
      <td>10</td>
      <td><a href=""><i class="fa-solid fa-pen-to-square"></i></a></td>
      <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
    </tr>
  </tbody>
</table>

<button class="btn btn-outline-success w-50 d-block m-auto"><a href="">Ajouter un jeu</a></button>

// Définir une classe Game pour représenter un jeu vidéo
class Game {
    private $title;
    private $playerCount;

    public function __construct($title, $playerCount) {
        $this->title = $title;
        $this->playerCount = $playerCount;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getPlayerCount() {
        return $this->playerCount;
    }
}

// Définir une classe GameManager pour gérer une liste de jeux vidéo
class GameManager {
    private $games = array();

    public function addGame($game) {
        $this->games[] = $game;
    }

    public function getGames() {
        return $this->games;
    }
}

?>

<?php
require once "game.php";
require once "GameManager.php";

$GameManager= new GameManager;

$game1= new Game(1"Starcraft2",8);
$game2= new Game(2"Among Us",10);
$game3= new Game(3"Valorant",10);

$gameManager->addGame($game1);
$gameManager->addGame($game2);
$gameManager->addGame($game3);

$gameManager->getGames();
<?php ob_start(); ?>


<?php 

$content= ob_get_clean();
$title= "Liste de jeux";
require_once "base.html.php";

?>
