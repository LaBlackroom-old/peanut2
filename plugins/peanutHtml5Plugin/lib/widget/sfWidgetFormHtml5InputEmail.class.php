<?php

/**
 * Generate an html5 input type="email"
 * Use this widget with sfValidatorHtml5Email
 *
 * @package peanutHtml5Plugin
 * @subpackage widget
 * @author Alexandre 'pocky' Balmes <albalmes@gmail.com>
 */


class sfWidgetFormHtml5InputEmail extends sfWidgetFormHtml5InputText
{

  /**
   * Constructor.
   *
   * Available options:
   * * multiple: Specifies that the element allows multiple values.
   *
   * @param array $options     An array of options
   * @param array $attributes  An array of default HTML attributes
   *
   * @see http://dev.w3.org/html5/markup/input.email.html
   * @see sfWidgetFormHtml5Input
   */
  protected function configure($options = array(), $attributes = array())
  {
    parent::configure($options, $attributes);

    $this->setOption('type', 'email');

    $this->addAttribute('multiple', false);
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
    if($this->getAttribute('multiple'))
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
