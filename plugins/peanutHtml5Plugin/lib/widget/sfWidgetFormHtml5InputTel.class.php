<?php

/**
 * Generate an html5 input type="tel"
 *
 * @package peanut5Plugin
 * @subpackage widget
 * @author Alexandre 'pocky' Balmes <albalmes@gmail.com>
 */


class sfWidgetFormHtml5InputTel extends sfWidgetFormHtml5Input
{

  /**
   * Constructor.
   *
   * Available options:
   *
   *  * type: The widget type
   *
   * @param array $options     An array of options
   * @param array $attributes  An array of default HTML attributes
   *
   * @see sfWidgetForm
   */
  protected function configure($options = array(), $attributes = array())
  {
    parent::configure($options, $attributes);

    $this->setOption('type', 'tel');

    $this->addOption('pattern', null);
    $this->addOption('size', false);
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
    if($this->getOption('pattern'))
    {
      $attributes['pattern'] = $this->getOption('pattern');
    }

    if($this->getOption('size'))
    {
      $attributes['size'] = $this->getOption('size');
    }

    return parent::render($name, $value, $attributes, $errors);
  }
}
