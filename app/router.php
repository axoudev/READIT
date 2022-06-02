<?php
/* ROUTEUR PRINCIPAL */


if(isset($_GET['postId'])){
    // DETAILS D'UN POST
    include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\showAction($connection, $_GET['postId']);
}else{
    // ROUTE PAR DEFAUT
    //PATTERN: /
    // CTRL: postController
    //ACTION: index

    include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\indexAction($connection);
}


