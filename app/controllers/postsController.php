<?php

namespace App\Controllers\PostsController;
use \App\Models\PostsModel;

/**
 * Undocumented function
 *
 * @param \PDO $connection
 * @return void
 */
function indexAction(\PDO $connection){
    include_once '../app/models/postsModel.php';
    $posts = PostsModel\findAll($connection);
    
    GLOBAL $content, $title;
    $title = "Blog";
    ob_start();
        include '../app/views/posts/index.php';
    $content = ob_get_clean();
}


function showAction(\PDO $connection, int $id){
    include_once '../app/models/postsModel.php';
    $post = PostsModel\findOneById($connection, $id);

    include_once '../app/models/authorsModel.php';
    $author = \App\Models\AuthorsModel\findOneById($connection, $post['author_id']);

    include_once '../app/models/tagsModel.php';
    $tags = \App\Models\TagsModel\findAllByPostId($connection, $id);

    include_once '../app/models/commentsModel.php';
    $comments = \App\Models\CommentsModel\findAllByPostId($connection, $id);

    GLOBAL $content, $title;
    $title = $post['title'];

    ob_start();
        include '../app/views/posts/show.php';
    $content = ob_get_clean();
}
