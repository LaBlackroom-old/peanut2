<?php

/**
 * Generate an html5 input type="range"
 *
 * @package peanutHtml5Plugin
 * @subpackage widget
 * @author Alexandre 'pocky' Balmes <albalmes@gmail.com>
 */


class sfWidgetFormHtml5InputRange extends sfWidgetFormHtml5InputNumber
{

  /**
   * Constructor.
   *
   * @param array $options     An array of options
   * @param array $attributes  An array of default HTML attributes
   *
   * @see http://dev.w3.org/html5/markup/input.range.html
   * @see sfWidgetFormHtml5InputNumber
   */
  protected function configure($options = array(), $attributes = array())
  {
    parent::configure($options, $attributes);

    $this->setOption('type', 'range');

    $this->disableAttribute('readonly');
    $this->disableAttribute('required');
  }

}
