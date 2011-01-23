<?php

/**
 * Generate an html5 input type="text"
 *
 * @package peanutHtml5Plugin
 * @subpackage widget
 * @author Alexandre 'pocky' Balmes <albalmes@gmail.com>
 */


class sfWidgetFormHtml5InputText extends sfWidgetFormHtml5Input
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
   * @see http://dev.w3.org/html5/markup/input.text.html
   * @see sfWidgetForm
   */
  protected function configure($options = array(), $attributes = array())
  {
    parent::configure($options, $attributes);

    $this->setOption('type', 'text');

    $this->addAttribute('disabled', false);
    $this->addAttribute('form');
    $this->addAttribute('maxlength');
    $this->addAttribute('readonly', false);
    $this->addAttribute('size');
    $this->addAttribute('autocomplete', false);
    $this->addAttribute('autofocus', false);
    $this->addAttribute('list');
    $this->addAttribute('pattern');
    $this->addAttribute('required', false);
    $this->addAttribute('placeholder');
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

    $attributes['disabled'] = $this->getAttribute('disabled') ? $this->checkBooleanAttribute('disabled', 'disabled') : false;
    $attributes['readonly'] = $this->getAttribute('readonly') ? $this->checkBooleanAttribute('readonly', 'readonly') : false;
    $attributes['autocomplete'] = $this->getAttribute('autocomplete') ? $this->checkBooleanAttribute('autocomplete', 'on') : false;
    $attributes['autofocus'] = $this->getAttribute('autofocus') ? $this->checkBooleanAttribute('autofocus', 'autofocus') : false;
    $attributes['required'] = $this->getAttribute('required') ? $this->checkBooleanAttribute('required', 'required') : false;


    if(is_string($this->getOption('form')))
    {
      $attributes['form'] = $this->getOption('form');
    }

    if(is_string($this->getOption('maxlength')))
    {
      $attributes['maxlength'] = $this->getOption('maxlength');
    }

    if(is_string($this->getOption('size')))
    {
      $attributes['size'] = $this->getOption('size');
    }

    if(is_string($this->getOption('list')))
    {
      $attributes['list'] = $this->getOption('list');
    }

    if(is_string($this->getOption('pattern')))
    {
      $attributes['pattern'] = $this->getOption('pattern');
    }

    if(is_string($this->getOption('placeholder')))
    {
      $attributes['placeholder'] = $this->getOption('placeholder');
    }

    return parent::render($name, $value, $attributes, $errors);
  }
}
