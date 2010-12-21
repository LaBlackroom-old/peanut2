<?php

/**
 * Generate an html5 input type="email"
 * Use this widget with sfValidatorHtml5Email
 *
 * @package peanut5Plugin
 * @subpackage widget
 * @author Alexandre 'pocky' Balmes <albalmes@gmail.com>
 */


class sfWidgetFormHtml5InputEmail extends sfWidgetFormInput
{

  /**
   * Constructor.
   *
   * Available options:
   * 
   * * multiple: Specifies that the element allows multiple values. (default: false)
   *
   * @param array $options     An array of options
   * @param array $attributes  An array of default HTML attributes
   *
   * @see sfWidgetForm
   */
  protected function configure($options = array(), $attributes = array())
  {
    parent::configure($options, $attributes);

    $this->setOption('type', 'email');

    $this->addOption('multiple', false);
  }

  public function render($name, $value = null, $attributes = array(), $errors = array())
  {
    if($this->getOption('multiple'))
    {
      $attributes['multiple'] = 'multiple';
      if(is_array($value))
      {
        $value = implode(',', $value);
      }
    }

    return parent::render($name, $value, $attributes, $errors);
  }

}
