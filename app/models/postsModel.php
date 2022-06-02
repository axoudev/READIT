<?php

namespace App\Models\PostsModel;


/**
 * Undocumented function
 *
 * @param \PDO $connection
 * @return array
 */
function findAll(\PDO $connection) :array{
    $sql = "SELECT *
            FROM posts 
            ORDER BY created_at DESC 
            LIMIT 10;";
    $rs = $connection->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

/**
 * Undocumented function
 *
 * @param \PDO $connection
 * @param [type] $id
 * @return array
 */
function findOneById(\PDO $connection, $id) :array{
    $sql = "SELECT *
            FROM posts
            WHERE id = :id;";
    $rs = $connection->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(\PDO::FETCH_ASSOC);
}