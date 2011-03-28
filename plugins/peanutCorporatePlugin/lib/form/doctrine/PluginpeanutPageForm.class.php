<?php

/**
 * peanutPage form.
 *
 * @package    blackroom
 * @subpackage form
 * @author     Alexandre pocky Balmes
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class PluginpeanutPageForm extends BasepeanutPageForm
{
  public function setup()
  {
    parent::setup();
    
    $user = self::getValidUser();
    
    $this->useFields(array(
     'title',
     'slug',
     'content',
     'excerpt',
     'status',
     'author',
     'peanutMenuId',
     'created_at'
    ));
    
    $this->widgetSchema['content'] = new sfWidgetFormCKEditor();
    
    $this->widgetSchema['excerpt'] = new sfWidgetFormTextarea($options = array(), $attributes = array(
        'placeholder' => 'Excerpt or aside for my content'
    ));
    
    if(!$this->isNew()) {
      $this->widgetSchema['created_at'] = new sfWidgetFormI18nDate(array(
        'culture' => $user->getCulture(),
      ));
    }
    else
    {
      unset($this['created_at']);
    }
    
    $this->validatorSchema['content'] = new sfValidatorString($options = array(
      'required'  => true
    ),$messages = array(
      'required'  => 'Fill this please'
    ));
  }
}
