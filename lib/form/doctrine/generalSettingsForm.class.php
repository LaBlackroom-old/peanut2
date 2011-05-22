<?php

/**
 * googleSettings form.
 *
 * @package    peanut2
 * @subpackage form
 * @author     AlexandrepockyBalmes
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class generalSettingsForm extends peanutSettingsForm
{
  public function configure()
  {
    $this->widgetSchema['site_name'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['site_name']->setDefault(peanutConfig::get('site_name'));
    $this->widgetSchema['site_name']->setLabel('Site name');
    
    $this->widgetSchema['meteo'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['meteo']->setDefault(peanutConfig::get('meteo'));
  }
}
