<?php

/**
 * Generate an html5 input type="color"
 * Use this widget with sfValidatorColor
 *
 * @package peanut5Plugin
 * @subpackage widget
 * @author Alexandre 'pocky' Balmes <albalmes@gmail.com>
 */


class sfWidgetFormInputColor extends sfWidgetFormInput
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

    $this->setOption('type', 'color');
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
