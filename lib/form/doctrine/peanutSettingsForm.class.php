<?php

/**
 * peanutSettings form.
 *
 * @package    peanut2
 * @subpackage form
 * @author     AlexandrepockyBalmes
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class peanutSettingsForm extends BasepeanutSettingsForm
{
  public function setup()
  {
    parent::setup();
    
    $this->useFields();
    unset($this['id']);
    
    $this->widgetSchema->setNameFormat('settings[%s]');
    $this->validatorSchema->setOption('allow_extra_fields', true);
    $this->validatorSchema->setOption('filter_extra_fields', false);
  }
}
