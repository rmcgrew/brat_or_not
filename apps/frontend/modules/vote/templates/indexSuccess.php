<script type="text/javascript">
$(function() {
    $("#brat").click(function() {
        $("#vote_value").val("yes");
        $("#vote_form").submit();
        return false;
    });
    $("#not").click(function() {
        $("#vote_value").val("no");
        $("#vote_form").submit();
        return false;
    });
});
</script>
<div id="results">
        <?php echo image_tag('brat.png', array("alt" => "Brat or Not", "width" =>"50", "height" => 50)) ?>
        <div class="description">
            <?php if ($post): ?>
                <span class="percent"><?php echo $post->bratiness ?></span> of people said this was a Brat.<br/>
            <?php endif ?>
            <?php echo link_to('Add your own brat!', 'post/index') ?>
        </div>
</div>

<div id="subject">
    <?php if ($post): ?>
        <?php echo image_tag($post->getImagePath(), array()) ?>
    <?php endif ?>
</div>

<a href="#" id="brat"><span class="link">This is<br /> <strong>DEFINITELY</strong><br /> a brat</span></a>
<a href="#" id="not"><span class="link">This is<br /> <strong>NOT</strong><br /> a brat</span></a>

<form id="vote_form" action="" method="post" accept-charset="utf-8">
    <?php if ($post): ?>
        <input id="post" name="post" type="hidden" value="<?php echo $post->id ?>" /q>
    <?php endif ?>
    <input id="vote_value" name="brat" type="hidden" value="" />
</form>