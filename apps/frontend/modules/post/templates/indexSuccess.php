<h1>Add an Image</h1>
<form class="post_form" action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
    <?php echo $form['_csrf_token']->render() ?>
    <ul>
        <li>
            <?php echo $form['title']->renderLabel() ?>
            <?php echo $form['title']->renderError() ?>
            <?php echo $form['title']->render() ?>
        </li>
        <li>
            <?php echo $form['image']->renderLabel() ?>
            <?php echo $form['image']->renderError() ?>
            <?php echo $form['image']->render() ?>
        </li>
        <li>
            <input type="submit" value="Continue &rarr;">
        </li>
    </ul>
</form>
