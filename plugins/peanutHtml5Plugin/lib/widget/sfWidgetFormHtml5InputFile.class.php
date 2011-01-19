<?php

/**
 * Generate an html5 input type="file"
 *
 * @package peanutHtml5Plugin
 * @subpackage widget
 * @author Alexandre 'pocky' Balmes <albalmes@gmail.com>
 */


class sfWidgetFormHtml5InputFile extends sfWidgetFormHtml5Input
{

  /**
   * Constructor.
   *
   * @param array $options     An array of options
   * @param array $attributes  An array of default HTML attributes
   *
   * @todo Add accept option
   * @todo Add multiple option
   * 
   * @see http://dev.w3.org/html5/markup/input.file.html
   * @see sfWidgetFormHtml5Input
   */
  protected function configure($options = array(), $attributes = array())
  {
    parent::configure($options, $attributes);

    $this->setOption('type', 'file');
    $this->setOption('needs_multipart', true);

    $this->setAttribute('maxlength', null);
    $this->setAttribute('readonly', false);
    $this->setAttribute('size', null);
    $this->setAttribute('autocomplete', false);
    $this->setAttribute('list', null);
    $this->setAttribute('pattern', null);
    $this->setAttribute('placeholder', null);
  }

}
