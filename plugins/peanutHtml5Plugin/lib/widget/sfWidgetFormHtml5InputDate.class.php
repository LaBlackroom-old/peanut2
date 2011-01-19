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
    $this->setOption('min', $this->_convertDate($this->getOption('min')));
    $this->setOption('max', $this->_convertDate($this->getOption('max')));
    
    return parent::render($name, $value, $attributes, $errors);
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
    if (null === $date)
    {
      return null;
    }
    
    if($date instanceof DateTime)
    {
      return $date->format($this->_getDateFormat());
    }
    
    if(is_string($date) && strtotime($date) !== false)
    {
      $date = strtotime($date);
    }
    
    if (is_numeric($date))
    {
      return date($this->_getDateFormat(), $date);
    }
    
    throw new sfRenderException(sprintf('%s is not a valid value.', $date));
  }
}
