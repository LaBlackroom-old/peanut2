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
    
  }
}
