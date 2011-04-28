<?php

require_once dirname(__FILE__).'/../lib/adminMenuGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/adminMenuGeneratorHelper.class.php';

/**
 * adminMenu actions.
 *
 * @package    peanutCorporatePlugin
 * @subpackage adminMenu
 * @author     Alexandre "pocky" Balmes <albalmes@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class adminMenuActions extends autoAdminMenuActions
{
  protected function addSortQuery($query)
  {
    $query->addOrderBy('root_id asc');
    $query->addOrderBy('lft asc');
  }
  
  public function executeBatch(sfWebRequest $request)
  {
    if ("batchOrder" == $request->getParameter('batch_action'))
    {
      return $this->executeBatchOrder($request);
    }
    
    parent::executeBatch($request);
  }
  
  public function executeUp()
  {
    $object = Doctrine::getTable('peanutMenu')->find($this->getRequestParameter('id'));
    $node = $object->getNode();
    
    if($node->isValidNode() && $node->hasPrevSibling())
    {
      $sibling = Doctrine::getTable('peanutMenu')->find($node->getPrevSibling()->getId());
      
      $node->moveAsPrevSiblingOf($sibling);
      $object->save();
      
      $this->getUser()->setFlash('notice', 'Order Updated!');
    }
    elseif($node->isRoot())
    { 
      $prevSibling = Doctrine::getTable('peanutMenu')->findOneByRootId($node->getRootValue() - 1);
      
      if($prevSibling)
      {
        $prevNode = $prevSibling->getNode();
        $prevRight = $prevNode->getRightValue();
        
        $currentRight = $node->getRightValue();
        
        $node->setRightValue($prevRight);
        $node->setRootValue($node->getRootValue() - 1);
        
        if($node->hasChildren())
        {
          $childs = Doctrine::getTable('peanutMenu')->find($node->getChildren());
          
          foreach($childs as $child)
          {
            $children = Doctrine::getTable('peanutMenu')->find($child->getId());
            $childNode = $children->getNode();
            $childNode->setRootValue($node->getRootValue() - 1);
            $children->save();
            
            $this->getUser()->setFlash('error', $child);
          }
        }
        
        
        $prevNode->setRightValue($currentRight);
        $prevNode->setRootValue($node->getRootValue() + 1);
        
        if($prevNode->hasChildren())
        {
          $childs = $prevNode->getChildren();
          
          foreach($childs as $child)
          {
            $children = Doctrine::getTable('peanutMenu')->find($child->getId());
            $childNode = $children->getNode();
            $childNode->setRootValue($node->getRootValue() + 1);
            $children->save();
            
            $this->getUser()->setFlash('error', $prevRight . ' - ' . $currentRight);
          }
        }

        $prevSibling->save();
        $object->save();
        
        $this->getUser()->setFlash('notice', 'Order Updated!');
      }
      else
      {
        $this->getUser()->setFlash('error', 'This page do not have previous sibling');
      }
    }
    else
    {
      $this->getUser()->setFlash('error', 'This page do not have previous sibling');
    }
    
    $this->redirect("@peanut_menu");
  }
  
  public function executeDown()
  {
    $object = Doctrine::getTable('peanutMenu')->find($this->getRequestParameter('id'));
    $node = $object->getNode();
    
    if($node->isValidNode() && $node->hasNextSibling())
    {
      $sibling = Doctrine::getTable('peanutMenu')->find($node->getNextSibling()->getId());
      
      $node->moveAsNextSiblingOf($sibling);
      $object->save();
      
      $this->getUser()->setFlash('notice', 'Order Updated!');
    }
    if($node->isRoot())
    { 
      $nextSibling = Doctrine::getTable('peanutMenu')->findOneByRootId($node->getRootValue() + 1);
      
      if($prevSibling)
      {
        
        $nextNode = $nextSibling->getNode();
        
        $node->setRootValue($node->getRootValue() + 1);
        $nextNode->setRootValue($nextNode->getRootValue() - 1);
        
        $nextSibling->save();
        $object->save();
        
        $this->getUser()->setFlash('notice', 'Order Updated!');
      }
      else
      {
        $this->getUser()->setFlash('error', 'This page do not have previous sibling');
      }
    }
    else
    {
      $this->getUser()->setFlash('error', 'This page do not have next sibling');
    }
  
    $this->redirect("@peanut_menu");
  }
  
  public function executeMakeRoot()
  {
    $object = Doctrine::getTable('peanutMenu')->find($this->getRequestParameter('id'));
    $node = $object->getNode();
    
    if($node->isValidNode() && $node->hasParent())
    {
      
      $node->makeRoot($this->getRequestParameter('id'));
      $object->save();
      
      $this->getUser()->setFlash('notice', 'Order Updated!');
    }
    else
    {
      $this->getUser()->setFlash('error', 'This page do not have a parent');
    }
    
    $this->redirect("@peanut_menu");
  }
  
  public function executeBatchOrder(sfWebRequest $request)
  {
    $newparent = $request->getParameter('newparent');
    
    $ids = array();
    foreach ($newparent as $key => $val)
    {
      $ids[$key] = true;
      if (!empty($val))
        $ids[$val] = true;
    }
    $ids = array_keys($ids);
    
    $validator = new sfValidatorDoctrineChoice(array('model' => 'peanutMenu', 'multiple' => true));
    try
    {
      $ids = $validator->clean($ids);
  
      $count = 0;
      $flash = "";
  
      foreach ($newparent as $id => $parentId)
      {
        if (!empty($parentId))
        {
          $node = Doctrine::getTable('peanutMenu')->find($id);
          $parent = Doctrine::getTable('peanutMenu')->find($parentId);
          
          if (!$parent->getNode()->isDescendantOfOrEqualTo($node))
          {
            $node->getNode()->moveAsFirstChildOf($parent);
            $node->save();
  
            $count++;
  
            $flash .= "<br/>Moved '".$node['name']."' under '".$parent['name']."'.";
          }
        }
      }
  
      if ($count > 0)
      {
        $this->getUser()->setFlash('notice', sprintf("page order updated, moved %s item%s:".$flash, $count, ($count > 1 ? 's' : '')));
      }
      else
      {
        $this->getUser()->setFlash('error', "You must at least move one item to update the page order");
      }
    }
    catch (sfValidatorError $e)
    {
      $this->getUser()->setFlash('error', 'Cannot update the page order, maybe some item are deleted, try again');
    }
     
    $this->redirect('@peanut_menu');
  }
  
  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();
  
    $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $this->getRoute()->getObject())));
  
    $object = $this->getRoute()->getObject();
    if ($object->getNode()->isValidNode())
    {
      $object->getNode()->delete();
    }
    else
    {
      $object->delete();
    }
  
    $this->getUser()->setFlash('notice', 'The item was deleted successfully.');
    $this->redirect('@peanut_menu');
  }
  
  public function executeListNew(sfWebRequest $request)
  {
    $this->executeNew($request);
    $this->form->setDefault('parent', $request->getParameter('id'));
    $this->setTemplate('edit');
  }
}
