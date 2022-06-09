<?php
namespace App\Models\TagsModel;

function findAllByPostId(\PDO $connection, int $postId) :array{
    $sql = "SELECT *
            FROM tags t
            JOIN posts_has_tags pht ON t.id = pht.tag_id
            WHERE pht.post_id = :postId
            ORDER BY t.name ASC;";
    $rs = $connection->prepare($sql);
    $rs->bindValue(':postId', $postId, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

function findAll(\PDO $connection) :array{
    $sql = "SELECT *
            FROM tags;";
    $rs = $connection->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}