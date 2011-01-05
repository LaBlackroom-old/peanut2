<?php

/**
 * Generate an html5 input type="date"
 *
 * @todo Check the value granularity for step
 * 
 * @package peanut5Plugin
 * @subpackage widget
 * @author Alexandre 'pocky' Balmes <albalmes@gmail.com>
 */


class sfWidgetFormHtml5InputDate extends sfWidgetFormHtml5InputNumber
{

  private $regexp = array();
  
  /**
   * Constructor.
   *
   * @param array $options     An array of options
   * @param array $attributes  An array of default HTML attributes
   *
   * @see sfWidgetForm
   */
  protected function configure($options = array(), $attributes = array())
  {
    parent::configure($options, $attributes);

    $this->setOption('type', 'date');
  }

  /**
   * @param  string $name        The element name
   * @param  string $value       The value displayed in this widget
   * @param  array  $attributes  An array of HTML attributes to be merged with the default HTML attributes
   * @param  array  $errors      An array of errors for the field
   *
   * @return string An HTML tag string
   *
   * @see sfWidgetForm
   */
  public function render($name, $value = null, $attributes = array(), $errors = array())
  {
    if($this->getOption('min'))
    {
      $attributes['min'] = $this->formatDate($this->getOption('min'));
    }

    if($this->getOption('max'))
    {
      $attributes['max'] = $this->formatDate($this->getOption('max'));
    }

    return parent::render($name, $value, $attributes, $errors);
  }

  
  /**
   * Format input value to a valid output value
   *
   * @return string
   */
  public function formatDate($date)
  {
    if(preg_match($this->getRegexp(), $date))
    {
      return $date;
    }
  }

  
  /**
   * Get the regexp date to match a valid value
   *
   * @return string
   */
  protected static function getRegexp()
  {
    return '//';
  }


  /**
   * Get the date format to render a valid string
   *
   * @return string
   */
  protected static function getDateFormat()
  {
    return 'Y-m-d';
  }

}
