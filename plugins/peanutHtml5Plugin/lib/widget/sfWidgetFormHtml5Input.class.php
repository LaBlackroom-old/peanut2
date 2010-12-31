<?php

/**
 * Generate an html5 input
 *
 * @package peanut5Plugin
 * @subpackage widget
 * @author Alexandre 'pocky' Balmes <albalmes@gmail.com>
 */


class sfWidgetFormHtml5Input extends sfWidgetFormInput
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

    $this->addOption('disabled', false);
    $this->addOption('autocomplete', false);
    $this->addOption('autofocus', false);
    $this->addOption('readonly', false);
    $this->addOption('required', false);

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
    foreach($this->getOptions() as $key => $val)
    {
      $attributes[$key] = $val;
    }

    return parent::render($name, $value, $attributes, $errors);
  }

}
