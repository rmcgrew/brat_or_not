<div id="subject">
    <?php echo image_tag($post->getImagePath(), array()) ?>
</div>

<div id="results">
    <?php echo image_tag('brat.png', array("alt" => "Brat or Not", "width" =>"50", "height" => 50)) ?>
    <div class="description">
        Your New Brat!
        <?php echo link_to('Back to Brats!', '@homepage') ?>
    </div>
</div>