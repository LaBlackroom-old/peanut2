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
   * @param array $options     An array of options
   * @param array $attributes  An array of default HTML attributes
   *
   * @throws InvalidArgumentException when a option is not supported
   * @throws RuntimeException         when a required option is not given
   */
  public function __construct($options = array(), $attributes = array())
  {
    $this->configure($options, $attributes);

    $currentAttributesKeys = array_keys($this->attributes);
    $attributeKeys = array_keys($attributes);

    // check attributes names
    if ($diff = array_diff($attributeKeys, $currentAttributesKeys))
    {
      throw new InvalidArgumentException(sprintf('%s does not support the following attribute: \'%s\'.',get_class($this), implode('\', \'', $diff)));
    }

    $this->attributes = array_merge($this->attributes, $attributes);

    return parent::__construct($options, $attributes);
  }


  /**
   * Constructor.
   *
   * Available attributes :
   *  * accesskey:        A key label or list of key labels with which to associate the element; each key label represents a keyboard
   *                      shortcut which UAs can use to activate the element or give focus to the element.
   *  * class:            A name of a classification, or list of names of classifications, to which the element belongs.
   *  * contenteditable:  Specifies that element represents a control whose value is not meant to be edited.
   *  * contextmenu:      The value of the id attribute on the menu with which to associate the element as a context menu.
   *  * dir:              Specifies the element’s text directionality.
   *  * draggable:        Specifies whether the element is draggable.
   *  * dropzone:         Specifies what types of content can be dropped on the element, and instructs the UA about which actions to take
   *                      with content when it is dropped on the element.
   *  * hidden:           Specifies that the element represents an element that is not yet, or is no longer, relevant.
   *  * lang:             Specifies the primary language for the contents of the element and for any of the element’s attributes that
   *                      contain text.
   *  * spellcheck:       Specifies whether the element represents an element whose contents are subject to spell checking and grammar
   *                      checking.
   *  * style:            Specifies zero or more CSS declarations that apply to the element.
   *  * tabindex:         Specifies whether the element represents an element that is is focusable (that is, an element which is part of the
   *                      sequence of focusable elements in the document), and the relative order of the element in the sequence of
   *                      focusable elements in the document.
   *  * title:            Advisory information associated with the element.
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

    $this->addAttribute('accesskey', array());
    $this->addAttribute('class');
    $this->addAttribute('contenteditable', false);
    $this->addAttribute('contextmenu');
    $this->addAttribute('dir');
    $this->addAttribute('draggable', false);
    $this->addAttribute('dropzone');
    $this->addAttribute('hidden', false);
    $this->addAttribute('lang');
    $this->addAttribute('spellcheck', false);
    $this->addAttribute('style');
    $this->addAttribute('tabindex');
    $this->addAttribute('title');

    $this->addAttribute('onabort');
    $this->addAttribute('onblur');
    $this->addAttribute('onchange');
    $this->addAttribute('onclick');
    $this->addAttribute('oncontextmenu');
    $this->addAttribute('ondblclick');
    $this->addAttribute('ondrag');
    $this->addAttribute('ondragend');
    $this->addAttribute('ondragcenter');
    $this->addAttribute('ondragleave');
    $this->addAttribute('ondragover');
    $this->addAttribute('ondragstart');
    $this->addAttribute('ondrop');
    $this->addAttribute('onerror');
    $this->addAttribute('onfocus');
    $this->addAttribute('onformchange');
    $this->addAttribute('onforminput');
    $this->addAttribute('oninput');
    $this->addAttribute('oninvalid');
    $this->addAttribute('onkeydown');
    $this->addAttribute('onkeypress');
    $this->addAttribute('onkeyup');
    $this->addAttribute('onload');
    $this->addAttribute('onmousedown');
    $this->addAttribute('onmousemove');
    $this->addAttribute('onmouseout');
    $this->addAttribute('onmouseover');
    $this->addAttribute('onmouseup');
    $this->addAttribute('onmousewheel');
    $this->addAttribute('onreadystatechange');
    $this->addAttribute('onreset');
    $this->addAttribute('onscroll');
    $this->addAttribute('onselect');
    $this->addAttribute('onsubmit');
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
    $attributes['contenteditable'] = $this->getAttribute('contenteditable') ? $this->_authorizedValues('contenteditable', array('true', 'false')) : false;
    $attributes['draggable'] = $this->getAttribute('draggable') ? $this->_authorizedValues('draggable', array('true', 'false')) : false;
    $attributes['spellcheck'] = $this->getAttribute('spellcheck') ? $this->_authorizedValues('spellcheck', array('true', 'false')) : false;
    $attributes['hidden'] = $this->getAttribute('hidden') ? $this->_authorizedValues('hidden', array('hidden')) : false;
    $attributes['dir'] = $this->getAttribute('dir') ? $this->_authorizedValues('dir', array('ltr', 'rtl', 'auto')) : null;

    if(is_array($this->getAttribute('accesskey')))
    {
      foreach($this->getAttribute('accesskey') as $char)
      {
        if(strlen($char) > 1)
        {
          throw new sfRenderException($char . ' is wrong value : must be single character');
        }
      }
      
      $attributes['accesskey'] = implode(' ', $this->getAttribute('accesskey'));
    }
    else
    {
      throw new sfRenderException('accesskey must be an array');
    }

    if($this->getAttribute('dropzone'))
    {
      $attributes['dropzone'] = $this->getAttribute('dropzone');
    }

    if(null !== $this->getAttribute('tabindex'))
    {
      if(is_int($this->getAttribute('tabindex')))
      {
      $attributes['tabindex'] = $this->getAttribute('tabindex');
      }
      else
      {
        throw new sfRenderException('tabindex must be an integer');
      }
    }

    return parent::render($name, $value, $attributes, $errors);
  }


  /**
   * Adds a new attribute name with a default value.
   *
   * @param string $name   The attribute name
   * @param mixed  $value  The default value
   *
   * @return sfWidget The current widget instance
   */
  public function addAttribute($name, $value = null)
  {
    $this->attributes[$name] = $value;
    return $this;
  }

  /**
   * Returns true if the attribute exists.
   *
   * @param  string $name  The attribute name
   *
   * @return bool true if the option exists, false otherwise
   */
  public function hasAttribute($name)
  {
    return array_key_exists($name, $this->attributes);
  }

  /**
   * Unset an attribute if exist.
   *
   * @param  string $name  The attribute name
   *
   */
  public function disableAttribute($name)
  {
    if($this->hasAttribute($name))
    {
      unset($this->attributes[$name]);
    }
  }

  /**
   * Check if the attribute value is an authorized value.
   *
   * @param  string $name  The attribute name
   * @param  array $value  An array of authorized values
   *
   * @return attribute
   *
   */
  protected function _authorizedValues($name, $value = array())
  {
    if(in_array($this->getAttribute($name), $value))
    {
      return $this->getAttribute($name);
    }

    throw new sfRenderException($this->getAttribute($name) . ' is not a valid value for ' . $name . ' attribute');
  }

  /**
   * Gets the JavaScript paths associated with the widget.
   *
   * @return array An array of JavaScript paths
   */
  public function getJavaScripts()
  {
    return array(
      '/js/widget/h5f.js'
    );
  }
}
