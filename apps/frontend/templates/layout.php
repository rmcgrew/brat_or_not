<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <h1 class="logo"><a href="<?php echo url_for("@homepage") ?>"><?php echo image_tag('logo.png', array("alt" => "Brat or Not", "width" => 50, "height" => 50)) ?>Brat or Not</a></h1>
    <?php echo $sf_content ?>
  </body>
</html>
