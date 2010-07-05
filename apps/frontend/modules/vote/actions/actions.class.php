<?php

/**
 * vote actions.
 *
 * @package    brat_or_not
 * @subpackage vote
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class voteActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $this->post = Doctrine::getTable('Post')->fetchRandom();
      if ($request->isMethod("post")) {
          $this->_processVote($request);
      }
  }
  
  protected function _processVote($request)
  {
      if ($request->hasParameter("brat") && $request->hasParameter("post")) {
          $post = Doctrine::getTable('Post')
                          ->find($request->getParameter("post"));
          $vote = new Vote();
          $vote->Post = $post;

          if (strtolower($request->getParameter("brat")) == "yes") {
              $vote->is_brat = true;
          } else if (strtolower($request->getParameter("brat")) == "no") {
              $vote->is_brat = false;
          }

          if ($vote->is_brat !== null) {
              $vote->save();
          }
      }

      $this->redirect("vote/index");
  }
}
