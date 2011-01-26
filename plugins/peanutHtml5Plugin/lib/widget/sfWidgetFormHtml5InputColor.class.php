<?php

/**
 * Generate an html5 input type="color"
 * Use this widget with sfValidatorColor
 *
 * @package peanutHtml5Plugin
 * @subpackage widget
 * @author Alexandre 'pocky' Balmes <albalmes@gmail.com>
 */


class sfWidgetFormHtml5InputColor extends sfWidgetFormHtml5InputText
{

  /**
   * Constructor.
   *
   * @param array $options     An array of options
   * @param array $attributes  An array of default HTML attributes
   *
   * @see http://dev.w3.org/html5/markup/input.color.html
   * @see sfWidgetFormHtml5Input
   */
  protected function configure($options = array(), $attributes = array())
  {
    parent::configure($options, $attributes);

    $this->setOption('type', 'color');

    $this->addOption('template.html','
      <img src="/images/widget/color_wheel.png" alt="colorPicker" class="colorSelector" />
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

    $render = parent::render($name, $value, $attributes, $errors);
    $render .= $this->getOption('template.html');

    return $render;
  }
  
  /**
   *
   * @see www.eyecon.ro/colorpicker/
   */
  public function getJavaScripts()
  {
    return array(
      '/js/widget/colorpicker.js',
      '/js/widget/color.js'
    );
  }

  public function getStylesheets()
  {
    return array(
      '/css/widget/colorpicker.css' => 'screen, projection'
    );
  }

}
