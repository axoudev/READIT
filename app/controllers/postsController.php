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
