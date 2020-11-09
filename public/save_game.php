<?php

include('../setup.php');

if (!isset($_POST['name']) || !isset($_POST['release_year']) || !isset($_POST['category']) || !isset($_POST['description'])) {
    echo "Error adding new game: fill all required fields";
    echo '<a href="javascript:history.back()">Go Back</a>';
    exit(1);
}

$game = new \andreribas\Game();
$game->name = $_POST['name'];
$game->category = $_POST['category'];
$game->release_year = $_POST['release_year'];
$game->description = $_POST['description'];

$result = \andreribas\GameRepository::create($game);

if ($result) {
    echo "Game {$game->name} added successfully";
    echo '<a href="index.php">Games</a>';
} else {
    echo "Error adding new game: db error";
    echo '<a href="javascript:history.back()">Go Back</a>';
}
