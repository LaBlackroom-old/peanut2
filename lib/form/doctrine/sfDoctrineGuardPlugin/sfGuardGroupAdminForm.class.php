<?php

/**
 * sfGuardUserAdminForm for admin generators
 *
 * @package    sfDoctrineGuardPlugin
 * @subpackage form
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfGuardUserAdminForm.class.php 23536 2009-11-02 21:41:21Z Kris.Wallsmith $
 */
class sfGuardGroupAdminForm extends BasesfGuardGroupForm
{
  /**
   * @see sfForm
   */
  public function configure()
  {
    unset($this['created_at'], $this['updated_at']);
    
    $this->widgetSchema['name'] = new sfWidgetFormHtml5InputText(array(), array(
                                        'placeholder' => 'Insert the group name',
                                        'required'    => true
    ));
    
    $this->widgetSchema['description'] = new sfWidgetFormTextarea(array(), array(
                                        'placeholder' => 'A simple description'
    ));
    
    $this->widgetSchema['permissions_list']  = new sfWidgetFormChoice(array(
      'choices' => $this->_getUsersPermissions(),
      'multiple' => true
    ));

  }
  
  protected function _getUsersPermissions()
  {
    $user = self::getValidUser();
    $permissions = array();
    $choices = Doctrine::getTable('sfGuardPermission')->getPermissions()->execute();
    
    foreach($choices as $permission){
      if($user->hasPermission('5')){ /* Super-Admin */
        $permissions[$permission->getId()] = $permission->getName();
      }
      else if($user->hasPermission('4') && '5' != $permission->getId()){ /* Admin */
        $permissions[$permission->getId()] = $permission->getName();
      }
      else if($user->hasPermission('3') && '5' != $permission->getId() && '4' != $permission->getId()){ /*  */
        $permissions[$permission->getId()] = $permission->getName();
      }
      else if($user->hasPermission('2') && '5' != $permission->getId() && '4' != $permission->getId() && '3' != $permission->getId()){ /*  */
        $permissions[$permission->getId()] = $permission->getName();
      }
      else if($user->hasPermission('1') && '5' != $permission->getId() && '4' != $permission->getId() && '3' != $permission->getId() && '2' != $permission->getId()){ /*  */
        $permissions[$permission->getId()] = $permission->getName();
      }
    } 
    return $permissions;
  }
}
