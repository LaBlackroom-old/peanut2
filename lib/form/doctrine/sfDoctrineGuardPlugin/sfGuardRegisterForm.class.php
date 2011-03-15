<?php

/**
 * sfGuardRegisterForm for registering new users
 *
 * @package    sfDoctrineGuardPlugin
 * @subpackage form
 * @author     Jonathan H. Wage <jonwage@gmail.com>
 * @version    SVN: $Id: BasesfGuardChangeUserPasswordForm.class.php 23536 2009-11-02 21:41:21Z Kris.Wallsmith $
 */
class sfGuardRegisterForm extends BasesfGuardRegisterForm
{
  /**
   * @see sfForm
   */
  public function configure()
  {
    
    $this->widgetSchema['first_name'] = new sfWidgetFormHtml5InputText($options = array(), $attributes = array(
                                            'placeholder' => 'Firstname'
                                           ));
    
    $this->widgetSchema['last_name'] = new sfWidgetFormHtml5InputText($options = array(), $attributes = array(
                                            'placeholder' => 'Lastname'
                                           ));
    
    $this->widgetSchema['email_address'] = new sfWidgetFormHtml5InputText($options = array(), $attributes = array(
                                            'placeholder' => 'Your email',
                                            'required'    => true
                                           ));
    
    $this->widgetSchema['username'] = new sfWidgetFormHtml5InputText($options = array(), $attributes = array(
                                            'placeholder' => 'Username',
                                            'required'    => true
                                           ));
    
    $this->widgetSchema['password'] = new sfWidgetFormHtml5InputText($options = array(), $attributes = array(
                                            'placeholder' => 'Password',
                                            'required'    => true
                                           ));
    
    $this->widgetSchema['password_again'] = new sfWidgetFormHtml5InputText($options = array(), $attributes = array(
                                            'placeholder' => 'Repeat password',
                                            'required'    => true
                                           ));
  }
}