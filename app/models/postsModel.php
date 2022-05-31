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