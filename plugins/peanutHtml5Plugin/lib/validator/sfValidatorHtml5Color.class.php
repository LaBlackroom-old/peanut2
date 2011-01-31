<?php

/**
 * Validates an #rrggbb color value
 *
 * @see http://www.w3.org/TR/html-markup/input.color.html
 *
 * @package peanutHtml55plugin
 * @subpackage validator
 * @author Alexandre 'pocky' Balmes <albalmes@gmail.com>
 */

class sfValidatorHtml5Color extends sfValidatorBase
{
  /**
   * Configures the current validator.
   *
   * @param array $options   An array of options
   * @param array $messages  An array of error messages
   *
   * @see sfValidatorBase
   */
  public function configure($options = array(), $messages = array())
  {
    $this->setMessage('invalid', 'The date is not valid');
  }

  public function doClean($value)
  {
    if(preg_match('/^#[0-9A-Fa-f]{6}$/i', $value) == 0)
    {
      throw new sfValidatorError($this, 'invalid');
    }
  }


}


