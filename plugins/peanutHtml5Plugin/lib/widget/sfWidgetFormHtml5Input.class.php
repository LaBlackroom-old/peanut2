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
   * @see http://www.w3.org/TR/web-forms-2/
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
    $this->addOption('form', false);
  }


  public function getJavaScripts() {

    return array(
      '/js/widget/input.js',
      '/js/widget/jquery.html5support.min.js'
    );

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
    if($this->getOption('disabled'))
    {
      $attributes['disabled'] = $this->getOption('disabled');
    }

    if($this->getOption('autocomplete'))
    {
      $attributes['autocomplete'] = $this->getOption('autocomplete');
    }

    if($this->getOption('autofocus'))
    {
      $attributes['autofocus'] = $this->getOption('autofocus');
    }

    if($this->getOption('readonly'))
    {
      $attributes['readonly'] = $this->getOption('readonly');
    }

    if($this->getOption('required'))
    {
      $attributes['required'] = $this->getOption('required');
    }


    return parent::render($name, $value, $attributes, $errors);
  }

}
