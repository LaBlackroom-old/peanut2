<?php

/**
 * Validates a date Y-m-d value
 *
 * @see http://www.w3.org/TR/html-markup/input.date.html
 *
 * @package peanutHtml5plugin
 * @subpackage validator
 * @author Alexandre 'pocky' Balmes <albalmes@gmail.com>
 */

class sfValidatorHtml5Date extends sfValidatorBase
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


  /**
   * Cleans the input value.
   *
   * Every subclass must implements this method.
   *
   * @param  mixed $value  The input value
   *
   * @return mixed The cleaned value
   *
   * @throws sfValidatorError
   */
  public function doClean($value)
  {
    if(!$this->_convertDate($value))
    {
      throw new sfValidatorError($this, 'invalid');
    }
  }

  
  /**
   * Get the date format to render a valid string
   *
   * @return string
   */
  protected function _getDateFormat()
  {
    return 'Y-m-d';
  }


  /**
   * Convert date into timestamp
   *
   * @return null|int
   * @throws sfRenderException If the value is not valid string value
   */
  protected function _convertDate($date)
  {
    if(is_string($date) && strtotime($date) !== false)
    {
      $date = strtotime($date);
      return date($this->_getDateFormat(), $date);
    }

    return null;
  }

}
