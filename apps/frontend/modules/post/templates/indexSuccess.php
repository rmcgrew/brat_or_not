<div id="subject">
    <form class="post_form" action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        <?php echo $form['_csrf_token']->render() ?>
        <table>
            <tr class="title">
                <th>
                    <?php echo $form['title']->renderLabel() ?>
                </th>
                <td>
                    <?php echo $form['title']->renderError() ?>
                    <?php echo $form['title']->render() ?>
                </td>
            </tr>
            <tr>
              <th>
                 <?php echo $form['image']->renderLabel() ?>
              </th>
              <td>
                  <?php echo $form['image']->renderError() ?>
                  <?php echo $form['image']->render() ?>
              </td>
            </tr>
            <tr class="submit">
              <th></th>
              <td><input type="submit" value="Continue &rarr;"></td>
            </tr>
        </table>
    </form>
</div>

<div id="results">
    <?php echo image_tag('brat.png', array("alt" => "Brat or Not", "width" =>"50", "height" => 50)) ?>
    <div class="description">
        Upload Your Brat!<br/>
        <?php echo link_to('Back to Brats!', '@homepage') ?>
    </div>
</div>
