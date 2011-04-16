<?php

/**
 * contact form.
 *
 * @package    peanutFormPlugin
 * @subpackage contact form
 * @author     Alexandre 'pocky' BALMES
 */

 class contactForm extends BaseForm
 {
   public function configure()
   {
     /*
      *  Widgets for the form
      */

     $this->widgetSchema['name'] = new sfWidgetFormHtml5InputText($options = array(), $attributes = array(
       'placeholder' => 'Your name'
     ));

     $this->widgetSchema['mail'] = new sfWidgetFormHtml5InputEmail($options = array(), $attributes = array(
       'placeholder' => 'Your mail address'
     ));

     $this->widgetSchema['message'] = new sfWidgetFormTextarea($options = array(), $attributes = array(
       'placeholder'  => 'Thanks for your message'
     ));

     $this->widgetSchema['captcha'] = new sfWidgetFormHtml5InputText($options = array(), $attributes = array(
       'class'        => 'hidden'
     ));


     /*
      *  Validators for the form
      */

     $this->validatorSchema['name'] = new sfValidatorString($options = array(
         'required'   => true
       ), $attributes = array(
         'required'   => 'Name is required'
       )
     );

     $this->validatorSchema['mail'] = new sfValidatorEmail($options = array(
         'required'   => true
       ), $attributes = array(
         'required'   => 'Email is required',
         'invalid'    => '%value% isn\'t a valid mail!'
       )
     );

     $this->validatorSchema['message'] = new sfValidatorString($options = array(
         'required'   => true,
         'min_length' => 4
       ), $attributes = array(
         'required'   => 'Message is required',
         'min_length' => 'Your message is too small (min %min_length% chars).'
       )
     );

     $this->validatorSchema['captcha'] = new sfValidatorHiddenCaptcha();

     /*
      *  Labels for the form
      */
     
     $this->widgetSchema['name']->setLabel('Name');
     $this->widgetSchema['mail']->setLabel('Mail');
     $this->widgetSchema['message']->setLabel('Message');
     $this->widgetSchema['captcha']->setLabel('Captcha');

     
     /*
      *   Form options
      */
     
     $this->widgetSchema->setNameFormat('contact[%s]');
     $this->validatorSchema->setOption('allow_extra_fields', true);
     $this->validatorSchema->setOption('filter_extra_fields', false);
     $this->widgetSchema->getFormFormatter()->setTranslationCatalogue('peanutForm');

   }
 }