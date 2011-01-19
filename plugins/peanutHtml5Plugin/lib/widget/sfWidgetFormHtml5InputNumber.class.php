<?php

/**
 * Generate an html5 input type="number"
 *
 * @package peanutHtml5Plugin
 * @subpackage widget
 * @author Alexandre 'pocky' Balmes <albalmes@gmail.com>
 * @author Xav 'xavismeh'<xav.is@2cool4school.fr>
 */


class sfWidgetFormHtml5InputNumber extends sfWidgetFormHtml5Input
{

  /**
   * Constructor.
   *
   * Available options:
   *
   *  * min: Minimum acceptable value for this field
   *  * max: Maximum acceptable value
   *  * step: Combined with the min value, define the acceptable numbers in the range up to the max value
   *
   * @param array $options     An array of options
   * @param array $attributes  An array of default HTML attributes
   *
   * @see http://dev.w3.org/html5/markup/input.number.html
   * @see sfWidgetFormHtml5Input
   */
  protected function configure($options = array(), $attributes = array())
  {
    parent::configure($options, $attributes);
    
    $this->setOption('type', 'number');
    
    $this->addOption('min', null);
    $this->addOption('max', null);
    $this->addOption('step', false);
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
    if(!is_null($this->getOption('min')) && !is_null($this->getOption('max')))
    {
      if($this->getOption('min') < $this->getOption('max'))
      {
        $attributes['min'] = $this->getOption('min');
        $attributes['max'] = $this->getOption('max');
      }
      
      if($this->getOption('step'))
      {
        $attributes['step'] = $this->_checkStep($this->getOption('step'));
      }
    }
    else
    {
      if(!is_null($this->getOption('min')))
      {
        $attributes['min'] = $this->getOption('min');
      }
      
      if(!is_null($this->getOption('max')))
      {
        $attributes['max'] = $this->getOption('max');
      }
      
      if($this->getOption('step'))
      {
        $attributes['step'] = $this->_checkStep($this->getOption('step'));
      }
    }
    
    return parent::render($name, $value, $attributes, $errors);
  }
  
  
  
  /**
   * Check if step is a valid value
   *
   * @param  string|numeric $step Sometimes a string, sometimes a numeric value
   * @return string
   */
  protected function _checkStep($step)
  {
    if(is_string($step))
    {
      if($step == 'any')
      {
        return $step;
      }
      else
      {
        if(false !== strpos($step, ','))
        {
         $step = str_replace(',', '.', $step);
        }
      }
    }
    
    if(is_numeric($step))
    {
      if(!is_null($this->getOption('max')) && $step <= $this->getOption('max'))
      {
        return (string) $step;
      }
      elseif(is_null($this->getOption('max')))
      {
        return (string) $step;
      }
      else
      {
        throw new sfRenderException('step option must be inferior or equal of max option');
      }
    }
    
    throw new sfRenderException('step option must be a numeric value or "any"');
  }
}
