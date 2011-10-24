<?php

/**
 * sfGuardUserAdminForm for admin generators
 *
 * @package    sfDoctrineGuardPlugin
 * @subpackage form
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfGuardUserAdminForm.class.php 23536 2009-11-02 21:41:21Z Kris.Wallsmith $
 */
class sfGuardUserAdminForm extends BasesfGuardUserAdminForm
{
  /**
   * @see sfForm
   */
  public function configure()
  {
    $user = self::getValidUser();
    
    
    
    $this->widgetSchema['first_name'] = new sfWidgetFormHtml5InputText(array(), array(
                                        'placeholder' => 'Insert the first name',
                                        'required'    => true
    ));
    
    $this->widgetSchema['last_name'] = new sfWidgetFormHtml5InputText(array(), array(
                                        'placeholder' => 'Insert the last name',
                                        'required'    => true
    ));
    
    $this->widgetSchema['email_address'] = new sfWidgetFormHtml5InputText(array(), array(
                                        'placeholder' => 'Insert the email address',
                                        'required'    => true
    ));
    
    $this->widgetSchema['username'] = new sfWidgetFormHtml5InputText(array(), array(
                                        'placeholder' => 'Insert the username',
                                        'required'    => true
    ));
    
    $this->widgetSchema['password'] = new sfWidgetFormHtml5InputPassword(array(), array(
                                        'placeholder' => 'Insert the password'
    ));
    
    $this->widgetSchema['password_again'] = new sfWidgetFormHtml5InputPassword(array(), array(
                                        'placeholder' => 'Repeat the password'
    ));
    
    $this->widgetSchema['permissions_list']  = new sfWidgetFormChoice(array(
      'choices' => $this->_getUsersPermissions(),
      'multiple' => true
    ));
    
    $this->widgetSchema['groups_list']  = new sfWidgetFormChoice(array(
      'choices' => $this->_getGroupsPermissions(),
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
  
  protected function _getGroupsPermissions()
  {
    $user = self::getValidUser();
    $groups = array();
    $choices = Doctrine::getTable('sfGuardGroup')->getGroups()->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
    
    foreach($choices as $group){
      
      $permissions = Doctrine::getTable('sfGuardGroupPermission')->getGroupPermissions($group['id']);
      $groupPermissions = $permissions->addSelect('permission_id')->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
    
      $grp = array();
    
      foreach($groupPermissions as $perm){
        $grp[] = $perm['permission_id'];
      }
      
      if($user->hasPermission('5')){ /* Super-Admin */
        $groups[$group['id']] = $group['name'];
      }
      elseif($user->hasPermission('4') && !in_array('5', $grp)){ /* Admin */
        $groups[$group['id']] = $group['name'];
      }
      elseif($user->hasPermission('3') && !in_array('5', $grp) && !in_array('4', $grp)){ /* Deleter */
        $groups[$group['id']] = $group['name'];
      }
      elseif($user->hasPermission('2') && !in_array('5', $grp) && !in_array('4', $grp) && !in_array('3', $grp)){ /* Writer */
        $groups[$group['id']] = $group['name'];
      }
      elseif($user->hasPermission('1') && !in_array('5', $grp) && !in_array('4', $grp) && !in_array('3', $grp) && !in_array('2', $grp)){ /* Reader */
        $groups[$group['id']] = $group['name'];
      }
    }
    return $groups;
  }

}
