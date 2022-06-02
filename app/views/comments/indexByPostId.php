<?php ?>
<div class="pt-5 mt-5">
    <h3 class="mb-5"><?php echo count($comments) ?> Commentaires</h3>
    <ul class="comment-list">
    <?php 
        foreach($comments as $comment): 
        $created_at = strtotime($comment['created_at']);
    ?>
    <li class="comment">
        <div class="comment-body">
        <h3><?php echo $comment['pseudo'] ?></h3>
        <div class="meta mb-3"><?php echo date('F d, Y  \a\t h:ia', $created_at); ?></div>
        <p><?php echo $comment['content'] ?></p>
        </div>
    </li>
    <?php endforeach; ?>
    </ul>
    <!-- END comment-list -->

    <?php include '../app/views/comments/_addForm.php' ?>
</div>