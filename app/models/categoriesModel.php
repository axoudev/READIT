<?php
namespace App\Models\CategoriesModel;

function findAll(\PDO $connection) :array{
    $sql = "SELECT *
            FROM categories";
    $rs = $connection->prepare($sql);
    $rs->execute();
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}