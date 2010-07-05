<h1 class="post_title"><?php echo $post->title ?></h1>
<p class="post_image">
    <?php echo image_tag($post->getImagePath(), array()) ?>
</p>
<form class="vote_form" action="" method="post" accept-charset="utf-8">
    <p>
        <input name="brat" type="submit" value="Yes">
        <input name="brat" type="submit" value="No">
    </p>
</form>