<?php

/**
 * googleSettings form.
 *
 * @package    peanut2
 * @subpackage form
 * @author     vito
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contactSettingsForm extends peanutSettingsForm
{
  public function configure()
  {
    $this->widgetSchema['contact_from'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['contact_from']->setDefault(peanutConfig::get('contact_from'));
    $this->widgetSchema['contact_from']->setLabel('Your email');
    
    $this->widgetSchema['webmaster_name'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['webmaster_name']->setDefault(peanutConfig::get('webmaster_name'));
    $this->widgetSchema['webmaster_name']->setLabel('The webmaster name');
    
    $this->widgetSchema['webmaster_mail'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['webmaster_mail']->setDefault(peanutConfig::get('webmaster_mail'));
    $this->widgetSchema['webmaster_mail']->setLabel('The webmaster email');
    
    $this->widgetSchema['subject'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['subject']->setDefault(peanutConfig::get('subject'));
    $this->widgetSchema['subject']->setLabel('Subject');
    
    $this->widgetSchema['map_name'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['map_name']->setDefault(peanutConfig::get('map_name'));
    $this->widgetSchema['map_name']->setLabel('Google map name');
    
    $this->widgetSchema['map_center'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['map_center']->setDefault(peanutConfig::get('map_center'));
    $this->widgetSchema['map_center']->setLabel('Google map center');
    
    $this->widgetSchema['map_address'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['map_address']->setDefault(peanutConfig::get('map_address'));
    $this->widgetSchema['map_address']->setLabel('Google map address');
    
    $this->widgetSchema['map_zoom'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['map_zoom']->setDefault(peanutConfig::get('map_zoom'));
    $this->widgetSchema['map_zoom']->setLabel('Google map zoom');
    
    $this->widgetSchema['map_size'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['map_size']->setDefault(peanutConfig::get('map_size'));
    $this->widgetSchema['map_size']->setLabel('Google map size');
    
  }
}
