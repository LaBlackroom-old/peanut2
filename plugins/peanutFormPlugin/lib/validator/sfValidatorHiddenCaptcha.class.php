<?php

/**
 * sfWidgetFormSimple renders a simple captcha widget.
 *
 *
 * @package    peanut
 * @subpackage validator
 * @author     Alexandre "pocky" Balmes <albalmes@gmail.com>
 */

  class sfValidatorHiddenCaptcha extends sfValidatorBase
  {
    /**
     * Configures the current validator.
     *
     * Available options:
     *
     *  * first_number:   The first number
     *  * last_number:    The last number
     *
     * @see sfValidatorBase
     */

    public function configure($options = array(), $messages = array())
    {
      $this->setOption('required', false);
      $this->addMessage('captcha', 'Your fired!');
    }

    /**
     * Cleans the input value.
     *
     * The input value must be ''.
     *
     * It returns null or throw error.
     *
     * @see sfValidatorBase
     */
    protected function doClean($value)
    {
      if('' !== $value)
      {
        throw new sfValidatorError($this, 'captcha', array('error' => 'This is not a number!'));
      }

      return null;
    }

  }

