<?php

require_once dirname(__FILE__).'/../lib/adminItemGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/adminItemGeneratorHelper.class.php';

/**
 * adminItem actions.
 *
 * @package    peanutCorporatePlugin
 * @subpackage adminItem
 * @author     Alexandre "pocky" Balmes <albalmes@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class adminItemActions extends autoAdminItemActions
{
  protected function addSortQuery($query)
  {
    $query->addOrderBy('menu asc');
    $query->addOrderBy('position asc');
  }
  
  public function executePromote()
  {
    $object = Doctrine_Core::getTable('peanutItem')->findOneById($this->getRequestParameter('id'));
    
    $object->promote();
    $this->redirect('@peanut_item');
  }

  public function executeDemote()
  {
    $object = Doctrine_Core::getTable('peanutItem')->findOneById($this->getRequestParameter('id'));

    $object->demote();
    $this->redirect('@peanut_item');
  }
  
  public function executeNewLink(sfWebRequest $request)
  {
    $this->form = new peanutLinkForm();
    $this->peanut_item = $this->form->getObject();
  }
  
  public function executeNewPage(sfWebRequest $request)
  {
    $this->form = new peanutPageForm();
    $this->peanut_item = $this->form->getObject();
  }
  
  public function executeEdit(sfWebRequest $request)
  {
    $object = $this->getRoute()->getObject();
    
    if($object->getType() == 'page')
    {
      $this->redirect('@peanut_page_edit?id=' . $object->getId());
    }
    
    if($object->getType() == 'link')
    {
      $this->redirect('@peanut_link_edit?id=' . $object->getId());
    }
  }
  
  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';

      try {
        $peanut_item = $form->save();
      } catch (Doctrine_Validator_Exception $e) {

        $errorStack = $form->getObject()->getErrorStack();

        $message = get_class($form->getObject()) . ' has ' . count($errorStack) . " field" . (count($errorStack) > 1 ?  's' : null) . " with validation errors: ";
        foreach ($errorStack as $field => $errors) {
            $message .= "$field (" . implode(", ", $errors) . "), ";
        }
        $message = trim($message, ', ');

        $this->getUser()->setFlash('error', $message);
        return sfView::SUCCESS;
      }

      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $peanut_item)));

      if ($request->hasParameter('_save_and_add'))
      {
        $this->getUser()->setFlash('notice', $notice.' You can add another one below.');

        $this->redirect('@' . $form->getName() . '_new');
      }
      else
      {
        $this->getUser()->setFlash('notice', $notice);

        $this->redirect(array('sf_route' => '@' . $form->getName() . '_edit', 'sf_subject' => $peanut_item));
      }
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }
}
