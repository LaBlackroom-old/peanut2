<?php

/**
 * Generate an html5 input type="url"
 * Use this widget with sfValidatorUrl
 *
 * @package peanutHtml5Plugin
 * @subpackage widget
 * @author Alexandre 'pocky' Balmes <albalmes@gmail.com>
 */


class sfWidgetFormHtml5InputUrl extends sfWidgetFormHtml5InputText
{

  /**
   * Constructor.
   *
   * @param array $options     An array of options
   * @param array $attributes  An array of default HTML attributes
   *
   * @see http://dev.w3.org/html5/markup/input.url.html
   * @see sfWidgetFormHtml5Input
   */
  protected function configure($options = array(), $attributes = array())
  {
    parent::configure($options, $attributes);

    $this->setOption('type', 'url');
  }

}
