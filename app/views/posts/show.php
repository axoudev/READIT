<?php
?>

<p class="mb-5">
    <img src="images/<?php echo $post['image'] ?>" alt="" class="img-fluid">
</p>

<h1 class="mb-3 h1"><?php echo $post['title'] ?></h1>

<div>
    <?php echo $post['content'] ?>
</div>


<!-- TAGS LIST -->
<?php
    include_once '../app/controllers/tagsController.php';
    \App\Controllers\TagsController\indexByPostIdAction($connection, $post['id']);
?>

