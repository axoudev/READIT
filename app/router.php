<?php
/* ROUTEUR PRINCIPAL */

// ROUTE PAR DEFAUT
//PATTERN: /
// CTRL: postController
//ACTION: index

include_once '../app/controllers/postsController.php';
\App\Controllers\PostsController\indexAction($connection);