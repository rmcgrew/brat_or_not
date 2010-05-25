<?php

/**
 * Post form.
 *
 * @package    brat_or_not
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PostForm extends BasePostForm
{
    public function configure()
    {
        $this->useFields(array("title", "image"));

        $this->widgetSchema['image'] = new sfWidgetFormInputFile();

        $this->validatorSchema['image'] = new sfValidatorFile(array(
            "required"   => true,
            "path"       => sfConfig::get('sf_upload_dir') . "/images",
            "mime_types" => "web_images"
        ));

        $this->widgetSchema->setHelp("image", "Select an image to upload.");
        $this->widgetSchema->setHelp("title", "Select a title for your image.");
    }
}
