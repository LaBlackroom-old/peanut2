<?php

/**
 * Generate an html5 input
 *
 * @package peanutHtml5Plugin
 * @subpackage widget
 * @author Alexandre 'pocky' Balmes <albalmes@gmail.com>
 */


class sfWidgetFormHtml5Input extends sfWidgetFormInput
{
  
  /**
   * Constructor.
   *
   * Available options :
   *  * disabled:     Specifies that the element represents a disabled control.
   *  * form:         The value of the id attribute on the form with which to associate the element.
   *  * readonly:     Specifies that element represents a control whose value is not meant to be edited.
   *  * size:         The number of options meant to be shown by the control represented by its element.
   *  * autocomplete: Specifies whether the element represents an input control for which a UA is meant to store the value entered by the
   *                  user (so that the UA can prefill the form later).
   *  * autofocus:    Specifies that the element represents a control to which a UA is meant to give focus as soon as the document is
   *                  loaded.
   *  * list:         The value of the id attribute on the datalist with which to associate the element.
   *  * pattern:      Specifies a regular expression against which a UA is meant to check the value of the control represented by its
   *                  element.
   *  * required:     Specifies that the element is a required part of form submission.
   *  * placeholder:  A short hint (one word or a short phrase) intended to aid the user when entering data into the control represented by
   *                  its element.
   *
   * @param array $options     An array of options
   * @param array $attributes  An array of default HTML attributes
   *
   *
   * @see http://dev.w3.org/html5/markup/global-attributes.html
   * @see http://dev.w3.org/html5/markup/input.text.html
   * @see sfWidgetForm
   */
  protected function configure($options = array(), $attributes = array())
  {
    parent::configure($options, $attributes);

    $this->addOption('disabled', false);
    $this->addOption('form', null);
    $this->addOption('maxlength', null);
    $this->addOption('readonly', false);
    $this->addOption('size', null);
    $this->addOption('autocomplete', false);
    $this->addOption('autofocus', false);
    $this->addOption('list', null);
    $this->addOption('pattern', null);
    $this->addOption('required', false);
    $this->addOption('placeholder', null);
    
  }


  public function getJavaScripts()
  {
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

    // disabled option
    if($this->getOption('disabled') === true)
    {
      $attributes['disabled'] = 'disabled';
    }
    elseif($this->getOption('disabled') !== false)
    {
      throw new sfRenderException('disabled must be true or false');
    }

    // form option
    if(is_string($this->getOption('form')))
    {
      $attributes['form'] = $this->getOption('form');
    }

    // maxlength option
    if(is_string($this->getOption('maxlength')))
    {
      $attributes['maxlength'] = $this->getOption('maxlength');
    }

    // readonly option
    if($this->getOption('readonly') === true)
    {
      $attributes['readonly'] = 'readonly';
    }
    elseif($this->getOption('readonly') !== false)
    {
      throw new sfRenderException('readonly must be true or false');
    }

    // size option
    if(is_string($this->getOption('size')))
    {
      $attributes['size'] = $this->getOption('size');
    }

    // autocomplete option
    if($this->getOption('autocomplete') === true)
    {
      $attributes['autocomplete'] = 'on';
    }
    elseif($this->getOption('autocomplete') !== false)
    {
      throw new sfRenderException('autocomplete must be true or false');
    }

    // autofocus option
    if($this->getOption('autofocus') === true)
    {
      $attributes['autofocus'] = 'autofocus';
    }
    elseif($this->getOption('autofocus') !== false)
    {
      throw new sfRenderException('autofocus must be true or false');
    }

    // list option
    if(is_string($this->getOption('list')))
    {
      $attributes['list'] = $this->getOption('list');
    }
    
    // pattern option
    if(is_string($this->getOption('pattern')))
    {
      $attributes['pattern'] = $this->getOption('pattern');
    }

    // required option
    if($this->getOption('required') === true)
    {
      $attributes['required'] = 'required';
    }
    elseif($this->getOption('required') !== false)
    {
      throw new sfRenderException('required must be true or false');
    }

    // placeholder option
    if(is_string($this->getOption('placeholder')))
    {
      $attributes['placeholder'] = $this->getOption('placeholder');
    }

    return parent::render($name, $value, $attributes, $errors);
  }

}
