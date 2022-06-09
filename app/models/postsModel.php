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

/**
 * Undocumented function
 *
 * @param \PDO $connection
 * @return array
 */
function findRecent(\PDO $connection) :array{
    $sql = "SELECT COUNT(c.id) as nb_comment, p.title as post_title, p.created_at as post_date, p.image as post_image,
                   a.firstname as author_firstname, a.lastname as author_lastname
            FROM comments c
            RIGHT JOIN posts p ON p.id = c.post_id
            RIGHT JOIN authors a ON p.author_id = a.id
            GROUP BY p.id
            ORDER BY p.created_at DESC
            LIMIT 3;";
    $rs = $connection->prepare($sql);
    $rs->execute();
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}