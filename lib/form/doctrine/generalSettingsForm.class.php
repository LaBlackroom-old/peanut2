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
    
    
    $this->widgetSchema['facebook_url'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['facebook_url']->setDefault(peanutConfig::get('facebook_url'));
    
    $this->widgetSchema['facebook_like'] = new sfWidgetFormChoice(array(
        'choices' => array('1' => 'Yes', '0' => 'No')
    ));
    $this->widgetSchema['facebook_like']->setDefault(peanutConfig::get('facebook_like'));
    
    $this->widgetSchema['twitter_url'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['twitter_url']->setDefault(peanutConfig::get('twitter_url'));
    
    $this->widgetSchema['twitter_follow'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['twitter_follow']->setDefault(peanutConfig::get('twitter_follow'));
    
    $this->widgetSchema['google_plus_1'] = new sfWidgetFormChoice(array(
        'choices' => array('1' => 'Yes', '0' => 'No')
    ));$this->widgetSchema['google_plus_1']->setDefault(peanutConfig::get('google_plus_1'));
    
    $this->widgetSchema['google_plus_url'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['google_plus_url']->setDefault(peanutConfig::get('google_plus_url'));
    
    $this->widgetSchema['viadeo_url'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['viadeo_url']->setDefault(peanutConfig::get('viadeo_url'));

    
    $this->widgetSchema['news_feed'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['news_feed']->setDefault(peanutConfig::get('news_feed'));
  }
}
