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
    <?php $games = \andreribas\GameRepository::findAll(); ?>
    <?php if (count($games)): ?>
        <?php foreach ($games as $game): ?>
            <article>
                <h2><?= $game->name ?><small> - <?= $game->release_year ?></small></h2>
                <p><?= $game->description ?></p>
            </article>
        <?php endforeach; ?>
    <?php else: ?>
        No game has been added yet
    <?php endif; ?>
</body>
</html>

