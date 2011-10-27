<?php

/**
 * googleSettings form.
 *
 * @package    peanut2
 * @subpackage form
 * @author     AlexandrepockyBalmes
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class googleSettingsForm extends peanutSettingsForm
{
  public function configure()
  {
    $this->widgetSchema['google_mail'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['google_mail']->setDefault(peanutConfig::get('google_mail'));
    
    $this->widgetSchema['google_password'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['google_password']->setDefault(peanutConfig::get('google_password'));
    
    $this->widgetSchema['google_tracking'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['google_tracking']->setDefault(peanutConfig::get('google_tracking'));
    
    $this->widgetSchema['google_guid_wt'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['google_guid_wt']->setDefault(peanutConfig::get('google_guid_wt'));
    $this->widgetSchema['google_guid_wt']->setLabel('Your GUID (Google Webmaster Tools)');

    $this->widgetSchema['google_guid_ga'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['google_guid_ga']->setDefault(peanutConfig::get('google_guid_ga'));
    $this->widgetSchema['google_guid_ga']->setLabel('Your GUID (Google Analytics)');
    
    $this->widgetSchema['domain_name'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['domain_name']->setDefault(peanutConfig::get('domain_name'));
    $this->widgetSchema['domain_name']->setLabel('Your domain name (without www)');
    
    
    $this->widgetSchema->setHelps(array(
        'google_tracking' => 'The id of the site you want to track (webmaster tools)',
        'google_guid_wt'  => 'The guid of your site (Google Webmaster Tools)',
        'google_guid_ga'  => 'The guid of your site (Google Analytics)',
        'domain_name'     => 'The name of your domain without the www'
    ));
  }
}
