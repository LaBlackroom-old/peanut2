<?php

/**
 * Generate an html5 input type="color"
 * Use this widget with sfValidatorColor
 *
 * @package peanutHtml5Plugin
 * @subpackage widget
 * @author Alexandre 'pocky' Balmes <albalmes@gmail.com>
 */


class sfWidgetFormHtml5InputColor extends sfWidgetFormHtml5Input
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
    
    $this->setAttribute('maxlength', null);
    $this->setAttribute('readonly', false);
    $this->setAttribute('size', null);
    $this->setAttribute('pattern', null);
    $this->setOption('required', false);
    $this->setAttribute('placeholder', null);
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
      '/css/widget/colorpicker.css' => 'all'
    );
  }

}
