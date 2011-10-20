<?php

/**
 * peanutPage form.
 *
 * @package    peanut3
 * @subpackage form
 * @author     DACHEZ Nicolas
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class peanutPageForm extends PluginpeanutPageForm
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
    $users = array();
    //$choices = Doctrine::getTable('sfGuardUser')->getUsersWhereGroupIs('2')->execute();

    $permission = array('2', '3');
    $choices = Doctrine::getTable('sfGuardUser')->getUsersWherePermissionIs($permission)->execute();

    foreach($choices as $user)
    {
      $users[$user->getId()] = $user->getName();
    }

    return $users;
  }
}
