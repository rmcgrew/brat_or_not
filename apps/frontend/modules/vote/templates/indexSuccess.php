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
        <span class="percent"><?php echo $post->bratiness ?></span> of people said this was a Brat.
</div>

<div id="subject">
    <?php echo image_tag($post->getImagePath(), array()) ?>
</div>

<a href="#" id="brat"><span class="link">This is<br /> <strong>DEFINITELY</strong><br /> a brat</span></a>
<a href="#" id="not"><span class="link">This is<br /> <strong>NOT</strong><br /> a brat</span></a>

<form id="vote_form" action="" method="post" accept-charset="utf-8">
    <input id="vote_value" name="brat" type="hidden" value="" />
</form>