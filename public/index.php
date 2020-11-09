<?php include('../setup.php'); ?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<head>
    <title>Games</title>
</head>
<body>
    <a href="add_game.php">Add new Game</a>
    <h1>Games</h1>
    <?php foreach (\andreribas\GameRepository::findAll() as $game): ?>
        <article>
            <h2><?= $game->name ?><small> - <?= $game->release_year ?></small></h2>
            <p><?= $game->description ?></p>
        </article>
    <?php endforeach; ?>
</body>
</html>

