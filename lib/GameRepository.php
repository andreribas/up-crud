<?php

namespace andreribas;

class GameRepository
{
    public static function create(Game $game)
    {
        $db = DB::getDB();
        $stmt = $db->prepare('INSERT INTO game (name, description, category, release_year) VALUES (:name, :description, :category, :release_year)');
        return $stmt->execute([
            ':name' => $game->name,
            ':description' => $game->description,
            ':category' => $game->category,
            ':release_year' => $game->release_year,
        ]);
    }

    public static function find(int $game_id)
    {
        $db = DB::getDB();
        $stmt = $db->query('SELECT * FROM game WHERE id = :id');
        $stmt->bindValue(':id', $game_id);
        return $stmt->fetchObject(Game::class);
    }

    public static function findAll()
    {
        $db = DB::getDB();
        $stmt = $db->query('SELECT * FROM game');
        return $stmt->fetchAll(\PDO::FETCH_CLASS, Game::class);
    }
}