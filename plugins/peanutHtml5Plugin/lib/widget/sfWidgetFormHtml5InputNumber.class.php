<?php

/**
 * Generate an html5 input type="number"
 *
 * @package peanutHtml5Plugin
 * @subpackage widget
 * @author Alexandre 'pocky' Balmes <albalmes@gmail.com>
 * @author Xav 'xavismeh'<xav.is@2cool4school.fr>
 */


class sfWidgetFormHtml5InputNumber extends sfWidgetFormHtml5InputText
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
    
    $this->addAttribute('min');
    $this->addAttribute('max');
    $this->addAttribute('step', false);
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
    if(!is_null($this->getAttribute('min')) && !is_null($this->getAttribute('max')))
    {
      if($this->getAttribute('min') < $this->getAttribute('max'))
      {
        $attributes['min'] = $this->getAttribute('min');
        $attributes['max'] = $this->getAttribute('max');
      }
      
      if($this->getAttribute('step'))
      {
        $attributes['step'] = $this->_checkStep($this->getAttribute('step'));
      }
    }
    else
    {
      if(!is_null($this->getAttribute('min')))
      {
        $attributes['min'] = $this->getAttribute('min');
      }
      
      if(!is_null($this->getAttribute('max')))
      {
        $attributes['max'] = $this->getAttribute('max');
      }
      
      if($this->getAttribute('step'))
      {
        $attributes['step'] = $this->_checkStep($this->getAttribute('step'));
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
      if(!is_null($this->getAttribute('max')) && $step <= $this->getAttribute('max'))
      {
        return (string) $step;
      }
      elseif(is_null($this->getAttribute('max')))
      {
        return (string) $step;
      }
      else
      {
        throw new sfRenderException('step attribute must be inferior or equal of max attribute');
      }
    }
    
    throw new sfRenderException('step attribute must be a numeric value or "any"');
  }
}
