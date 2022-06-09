<div class="sidebar-box ftco-animate">
    <h3>Tag Cloud</h3>
    <div class="tagcloud">
    <?php 
        include_once '../app/models/tagsModel.php';
        $tags = \App\Models\TagsModel\findAll($connection);
    ?>
    <?php foreach($tags as $tag): ?>
        <a href="#" class="tag-cloud-link"><?php echo $tag['name'] ?></a>
    <?php endforeach;  ?>
    </div>
</div>