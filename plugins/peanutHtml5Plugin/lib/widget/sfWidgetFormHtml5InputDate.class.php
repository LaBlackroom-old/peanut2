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


class sfWidgetFormHtml5InputDate extends sfWidgetFormHtml5Input
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
    $min = $this->_convertDate($this->getOption('min'));
    $max = $this->_convertDate($this->getOption('max'));
    
    if($min && $max)
    {
      if($min < $max)
      {
        $attributes['min'] = $this->formatDate($this->getOption('min'));
        $attributes['max'] = $this->formatDate($this->getOption('max'));
      }
      else
      {
        throw new sfRenderException('min option must be inferior of max option');
      }
    }

    elseif(!is_null($this->getOption('min')))
    {
      $attributes['min'] = $this->formatDate($this->getOption('min'));
    }

    elseif(!is_null($this->getOption('max')))
    {
      $attributes['max'] = $this->formatDate($this->getOption('max'));
    }

    elseif(!is_null($this->getOption('step')))
    {
      $attributes['step'] = $this->getOption('step');
    }

    return parent::render($name, $value, $attributes, $errors);
  }

  
  /**
   * Format input value to a valid output value
   *
   * @param  string|DateTime|int $date
   * @return string
   */
  protected function formatDate($date)
  {
    if(is_string($date) && strtotime($date) !== false)
    {
      return date(self::_getDateFormat(), strtotime($date));
    }

    if(is_integer($date))
    {
      return date(self::_getDateFormat(), $date);
    }

    if(is_object($date) && $date instanceof DateTime)
    {
      return $date->format(self::_getDateFormat());
    }

    throw new sfRenderException(sprintf('The value must be a string in %s format, a timestamp or a DateTime object', self::_getDateFormat()));
  }


  /**
   * Get the date format to render a valid string
   *
   * @return string
   */
  protected static function _getDateFormat()
  {
    return 'Y-m-d';
  }

  /**
   * Convert date into timestamp
   *
   * @return int
   */
  protected static function _convertDate($date)
  {
    if($date instanceof DateTime)
    {
      $date = $date->format(self::_getDateFormat());
      return strtotime($date);
    }

    if(($date = strtotime($date)) !== false)
    {
      return $date;
    }

    return $date;
  }

}
