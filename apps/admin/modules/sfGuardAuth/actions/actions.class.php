<?php

/*
 * This file is part of the symfony package.
 * (c) 2004-2006 Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 */

require_once(sfConfig::get('sf_plugins_dir').'/sfDoctrineGuardPlugin/modules/sfGuardAuth/lib/BasesfGuardAuthActions.class.php');


/**
 *
 * @package    sfDoctrineGuardPlugin
 * @subpackage plugin
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: actions.class.php 23319 2009-10-25 12:22:23Z Kris.Wallsmith $
 */

class sfGuardAuthActions extends BasesfGuardAuthActions
{
  public function executeSignin($request)
  {
    parent::executeSignin($request);
    
    sfContext::getInstance()->getResponse()->setCookie('peanutAdmin', '', time()+60*60*24*15, '/');

    $this->setLayout('login');
  }
}
