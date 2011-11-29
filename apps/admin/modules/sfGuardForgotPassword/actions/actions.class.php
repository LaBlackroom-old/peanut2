<?php

require_once(sfConfig::get('sf_plugins_dir').'/sfDoctrineGuardPlugin/modules/sfGuardForgotPassword/lib/BasesfGuardForgotPasswordActions.class.php');

/**
 * sfGuardForgotPassword actions.
 * 
 * @package    sfGuardForgotPasswordPlugin
 * @subpackage sfGuardForgotPassword
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12534 2008-11-01 13:38:27Z Kris.Wallsmith $
 */
class sfGuardForgotPasswordActions extends BasesfGuardForgotPasswordActions
{
  public function executeIndex($request)
  {
    parent::executeIndex($request);

    $this->setLayout('login');
  }

  public function executeChange($request)
  {
    parent::executeChange($request);

    $this->setLayout('login');
  }
}
