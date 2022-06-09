<div class="sidebar-box ftco-animate">
    <h3>Recent Blog</h3>
    <?php 
        include_once '../app/models/PostsModel.php';
        $recentPosts = \App\Models\PostsModel\findRecent($connection);
    ?>

    <?php 
        foreach($recentPosts as $post): 
        $created_at = strtotime($post['post_date']);
    ?>
        <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(images/<?php echo $post['post_image'] ?>);"></a>
            <div class="text">
                <h3 class="heading"><a href="#"><?php echo $post['post_title'] ?></a></h3>
                <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span><?php echo date('F d, Y', $created_at); ?></a></div>
                    <div><a href="#"><span class="icon-person"></span><?php echo $post['author_firstname'] ?></a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
            </div>
        </div>
    <?php endforeach;  ?>
</div>