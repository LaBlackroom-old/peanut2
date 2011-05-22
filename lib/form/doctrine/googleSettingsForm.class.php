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
    
    $this->widgetSchema['google_guid'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['google_guid']->setDefault(peanutConfig::get('google_guid'));
    $this->widgetSchema['google_guid']->setLabel('Your GUID (google analytics)');
    
    $this->widgetSchema->setHelps(array(
        'google_tracking' => 'The id of the site you want to track (webmaster tools)',
        'google_guid'     => 'The guid of your site (Google Analytics)'
    ));
  }
}
