<?php
namespace App\Models\AuthorsModel;

function findOneById(\PDO $connection, int $id) :array{
    $sql = "SELECT *
            FROM authors
            WHERE id = :id;";
    $rs = $connection->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(\PDO::FETCH_ASSOC);
}