<?php

/**
 * Generate an html5 input type="date"
 *
 * @todo Check the value granularity for step
 * 
 * @package peanutHtml5Plugin
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
   * @see http://dev.w3.org/html5/markup/input.date.html
   * @see sfWidgetFormHtml5Input
   */
  protected function configure($options = array(), $attributes = array())
  {
    parent::configure($options, $attributes);
    
    $this->setOption('type', 'date');

    $this->addOption('template.javascript', '
      <script>
        jQuery(document).ready(function() {
          if(!Modernizr.inputtypes.date)
          {
            jQuery("input[type=date]").datepicker({
              minDate: new Date("{min}"),
              maxDate: new Date("{max}"),
              dateFormat: "yy-mm-dd",
              showOn: "button",
              buttonImage: "/images/widget/calendar.png",
              buttonImageOnly: true
            });
          }
        });
      </script>
    ');
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
    $this->setAttribute('min', $this->_convertDate($this->getAttribute('min')));
    $this->setAttribute('max', $this->_convertDate($this->getAttribute('max')));

    $template_vars = array(
      '{min}'   => $this->getAttribute('min'),
      '{max}'   => $this->getAttribute('max')
    );

    $render = parent::render($name, $value, $attributes, $errors);
    $render .= strtr($this->getOption('template.javascript'), $template_vars) ;
    
    return $render;
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
