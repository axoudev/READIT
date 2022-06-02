<?php
namespace App\Controllers\TagsController;
use \App\Models\TagsModel;

function indexByPostIdAction(\PDO $connection, int $postId){
    include_once '../app/models/tagsModel.php';
    $tags = TagsModel\findAllByPostId($connection, $postId);

    include '../app/views/tags/indexByPostId.php';
}