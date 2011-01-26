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
    $attributes['disabled'] = $this->getAttribute('disabled') ? $this->_authorizedValues('disabled', array('disabled')) : false;
    $attributes['readonly'] = $this->getAttribute('readonly') ? $this->_authorizedValues('readonly', array('readonly')) : false;
    $attributes['autocomplete'] = $this->getAttribute('autocomplete') ? $this->_authorizedValues('autocomplete', array('on', 'off')) : false;
    $attributes['autofocus'] = $this->getAttribute('autofocus') ? $this->_authorizedValues('autofocus', array('autofocus')) : false;
    $attributes['required'] = $this->getAttribute('required') ? $this->_authorizedValues('required', array('required')) : false;

    if(null !== $this->getOption('maxlength') && is_int($this->getOption('maxlength')))
    {
      if(is_int($this->getOption('size')))
      {
        $attributes['maxlength'] = $this->getOption('maxlength');
      }
      else
      {
        throw new sfRenderException('size must be a positive integer');
      }
    }

    if(null !== $this->getOption('maxlength'))
    {
      if(is_int($this->getOption('size')))
      {
        $attributes['size'] = $this->getOption('size');
      }
      else
      {
        throw new sfRenderException('size must be a positive integer');
      }
    }
    

    return parent::render($name, $value, $attributes, $errors);
  }

  /**
   * Gets the JavaScript paths associated with the widget.
   *
   * @return array An array of JavaScript paths
   */
  public function getJavaScripts()
  {
    return array(
      '/js/widget/jquery-ui-1.8.9.custom.min.js'
    );
  }

  /**
   * Gets the stylesheet paths associated with the widget.
   *
   * The array keys are files and values are the media names (separated by a ,):
   *
   *   array('/path/to/file.css' => 'all', '/another/file.css' => 'screen,print')
   *
   * @return array An array of stylesheet paths
   */
  public function getStylesheets()
  {
    return array(
      '/css/widget/ui-lightness/jquery-ui-1.8.9.custom.css' => 'screen, projection'
    );
  }
}
