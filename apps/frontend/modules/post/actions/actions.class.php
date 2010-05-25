<?php

/**
 * post actions.
 *
 * @package    brat_or_not
 * @subpackage post
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class postActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->form = new PostForm();
    if ($request->isMethod('post')) {
        $this->_processForm($this->form, $request);
    }
  }
  
  public function executeView(sfWebRequest $request)
  {
      $this->post = Doctrine::getTable('Post')
                            ->find($request->getParameter('id'));
      $this->forward404Unless(
        $this->post,
        "Invalid post ID"
      );
  }
  
  protected function _processForm($form, $request)
  {
      $form->bind(
        $request->getParameter($form->getName()),
        $request->getFiles($form->getName())
      );
      if ($form->isValid()) {
          $post = $form->save();
          $this->redirect("post/view?id=" . $post->id);
      } else {
          var_dump($form->getGlobalErrors());
      }
  }
  
  
}
