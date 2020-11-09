<?php include('../setup.php'); ?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<head>
    <title>Add new Game</title>
</head>
<body>
    <h1>Add new Game</h1>
    <form method="post">
        <div class="input-group">
            <label for="name">Name</label>
            <input id="name" type="text" name="name">
        </div>

        <div class="input-group">
            <label for="release_year">Release Year</label>
            <input id="release_year" type="text" name="release_year">
        </div>

        <div class="input-group">
            <label for="category">Category</label>
            <input id="category" type="text" name="category">
        </div>

        <div class="input-group">
            <label for="description">Description</label>
            <textarea id="description"></textarea>
        </div>

        <button type="submit">Create</button>
    </form>
</body>
</html>
