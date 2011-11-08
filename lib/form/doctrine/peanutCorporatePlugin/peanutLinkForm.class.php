<?php

/**
 * peanutLink form.
 *
 * @package    peanut3
 * @subpackage form
 * @author     DACHEZ Nicolas
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class peanutLinkForm extends PluginpeanutLinkForm
{
  /**
   * @see peanutItemForm
   */
  public function configure()
  {
    parent::configure();
  }
  
  protected function _getUsers()
  {
    /* Advanced Writer OR Basic Writer */
    if( ($this->getUser()->hasPermission('2') || $this->getUser()->hasPermission('3')) 
         && !$this->getUser()->hasPermission('4') 
         && !$this->getUser()->hasPermission('5')
      )
    { 
      $choices = Doctrine::getTable('sfGuardUser')->getUsersWithId($this->getUser()->getGuardUser()->getId())->execute();
    }
    else{
      
      if($this->getUser()->hasPermission('5')) /* Cas du Super Admin */
      { 
        $permissions = array('2', '3', '4', '5');
        $excludes = null;
      }
      elseif($this->getUser()->hasPermission('4')) /* Cas de l'Admin */
      { 
        $permissions = array('2', '3', '4');
        $excludes = array('5');
      }
      $choices = Doctrine::getTable('sfGuardUser')->getUsersWherePermissionIs($permissions, $excludes)->execute();
     
    }

    foreach($choices as $user)
    {
      $users[$user->getId()] = $user->getName();
    }

    return $users;
  }
}
