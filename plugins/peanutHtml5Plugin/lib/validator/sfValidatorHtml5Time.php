<?php

/**
 * Validates a time value
 *
 * @see http://www.w3.org/TR/html-markup/input.date.html
 *
 * @package peanutHtml5plugin
 * @subpackage validator
 * @author Alexandre 'pocky' Balmes <albalmes@gmail.com>
 */

class sfValidatorHtml5Time extends sfValidatorHtml5Date
{

  
  /**
   * Get the date format to render a valid string
   *
   * @return string
   */
  protected function _getDateFormat()
  {
    return 'H:i:s';
  }

}


