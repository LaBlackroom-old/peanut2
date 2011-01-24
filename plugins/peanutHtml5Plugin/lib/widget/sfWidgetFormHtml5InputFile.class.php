<?php

/**
 * Generate an html5 input type="file"
 *
 * @package peanutHtml5Plugin
 * @subpackage widget
 * @author Alexandre 'pocky' Balmes <albalmes@gmail.com>
 */


class sfWidgetFormHtml5InputFile extends sfWidgetFormHtml5InputEmail
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

    $this->addAttribute('accept');
    
    $this->disableAttribute('maxlength');
    $this->disableAttribute('readonly');
    $this->disableAttribute('size');
    $this->disableAttribute('autocomplete');
    $this->disableAttribute('list');
    $this->disableAttribute('pattern');
    $this->disableAttribute('placeholder');
  }

}
