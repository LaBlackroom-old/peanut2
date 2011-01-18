<?php

/**
 * Generate an html5 input
 *
 * @package peanut5Plugin
 * @subpackage widget
 * @author Alexandre 'pocky' Balmes <albalmes@gmail.com>
 */


class sfWidgetFormHtml5Input extends sfWidgetFormInput
{
  
  /**
   * Constructor.
   *
   * @param array $options     An array of options
   * @param array $attributes  An array of default HTML attributes
   *
   * @see http://www.w3.org/TR/web-forms-2/
   * @see sfWidgetForm
   */
  protected function configure($options = array(), $attributes = array())
  {
    parent::configure($options, $attributes);

    $this->addOption('disabled', false);
    $this->addOption('autocomplete', false);
    $this->addOption('autofocus', false);
    $this->addOption('readonly', false);
    $this->addOption('required', false);
    $this->addOption('form', null);
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

    if($this->getOption('disabled') === true)
    {
      $attributes['disabled'] = 'disabled';
    }
    elseif($this->getOption('disabled') !== false)
    {
      throw new sfRenderException('disabled must be true or false');
    }

    if($this->getOption('autocomplete') === true)
    {
      $attributes['autocomplete'] = 'on';
    }
    elseif($this->getOption('autocomplete') !== false)
    {
      throw new sfRenderException('autocomplete must be true or false');
    }

    if($this->getOption('autofocus') === true)
    {
      $attributes['autofocus'] = 'autofocus';
    }
    elseif($this->getOption('autofocus') !== false)
    {
      throw new sfRenderException('autofocus must be true or false');
    }

    if($this->getOption('readonly') === true)
    {
      $attributes['readonly'] = 'readonly';
    }
    elseif($this->getOption('readonly') !== false)
    {
      throw new sfRenderException('readonly must be true or false');
    }

    if($this->getOption('required') === true)
    {
      $attributes['required'] = 'required';
    }
    elseif($this->getOption('required') !== false)
    {
      throw new sfRenderException('required must be true or false');
    }

    if(!is_null($this->getOption('form')))
    {
      $attributes['form'] = $this->getOption('form');
    }

    return parent::render($name, $value, $attributes, $errors);
  }

}
