<?php

/**
 * Validates emails.
 *
 * @see http://www.w3.org/TR/html-markup/input.color.html
 *
 * @package peanutHtml5plugin
 * @subpackage validator
 * @author Alexandre 'pocky' Balmes <albalmes@gmail.com>
 */

class sfValidatorHtml5Email extends sfValidatorEmail
{
  /**
   * Configures the current validator.
   *
   * Available options:
   *
   * * multiple: Specifies that the element allows multiple values. (default: false)
   *
   * @param array $options   An array of options
   * @param array $messages  An array of error messages
   *
   * @see sfValidatorBase
   */
  public function configure($options = array(), $messages = array())
  {
    parent::configure($options, $messages);
    
    $this->addOption('multiple', false);
  }

  public function doClean($value)
  {
    if($this->getOption('multiple') === false)
    {
      return parent::doClean($value);
    }

    $value = explode(',', $value);
    foreach($value as $key => $email)
    {
      $value[$key] = parent::doClean($email);
    }

    return $value;
  }

}


