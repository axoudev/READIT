<?php
namespace APP\Models\CommentsModel;

function findAllByPostId(\PDO $connection, int $postId) :array{
    $sql = "SELECT *
            FROM comments 
            WHERE post_id = :postId
            ORDER BY created_at DESC;";
    $rs = $connection->prepare($sql);
    $rs->bindValue(':postId', $postId, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}