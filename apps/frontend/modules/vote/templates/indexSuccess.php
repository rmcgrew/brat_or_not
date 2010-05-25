<h1><?php echo $post->title ?></h1>
<p>
    <?php echo image_tag($post->getImagePath(), array()) ?>
</p>
<form action="" method="post" accept-charset="utf-8">
    <p>
        <input name="brat" type="submit" value="Yes">
        <input name="brat" type="submit" value="No">
    </p>
</form>