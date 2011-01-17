<?php

/**
 * Generate an html5 input type="time"
 *
 * @package peanut5Plugin
 * @subpackage widget
 * @author Alexandre 'pocky' Balmes <albalmes@gmail.com>
 */


class sfWidgetFormHtml5InputTime extends sfWidgetFormHtml5InputDate
{

  /**
   * Constructor.
   *
   *
   * @param array $options     An array of options
   * @param array $attributes  An array of default HTML attributes
   *
   * @see sfWidgetForm
   */
  protected function configure($options = array(), $attributes = array())
  {
    parent::configure($options, $attributes);

    $this->setOption('type', 'time');
  }

  /**
   * Get the date format to render a valid string
   *
   * @return string
   */
  protected static function _getDateFormat()
  {
    return 'H:i:s';
  }

}
