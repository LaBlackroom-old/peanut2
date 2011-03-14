<?php

/**
 * Base project form.
 * 
 * @package    peanut
 * @subpackage form
 * @author     Your name here 
 * @version    SVN: $Id$
 */
class BaseForm extends sfFormSymfony
{
  static protected $formUser = null;
  
  static protected function getUser()
  {
    return self::$formUser;
  }
  
  static public function getValidUser()
  {
    
    if (!self::$formUser instanceof sfBasicSecurityUser && !is_null(self::$formUser))
    {
      throw new RuntimeException('No valid user instance available');
    }
    
    return self::$formUser;
  }
 
  static public function setUser(sfBasicSecurityUser $user)
  {
    self::$formUser = $user;
  }
}
