<?php

/**
 * peanutSettings form.
 *
 * @package    peanut2
 * @subpackage form
 * @author     AlexandrepockyBalmes
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class societySettingsForm extends peanutSettingsForm
{
  public function configure()
  {
    $adr = unserialize(peanutConfig::get('adr'));
    $user = self::getValidUser();
    
    $this->widgetSchema['society'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['society']->setDefault(peanutConfig::get('society'));
    
    $this->widgetSchema['url'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['url']->setDefault(peanutConfig::get('url'));
    
    $this->widgetSchema['street-address'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['street-address']->setDefault($adr['street-address']);
    
    $this->widgetSchema['locality'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['locality']->setDefault($adr['locality']);
    
    $this->widgetSchema['region'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['region']->setDefault($adr['region']);
    
    $this->widgetSchema['postal-code'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['postal-code']->setDefault($adr['postal-code']);
    
    $this->widgetSchema['country-name'] = new sfWidgetFormI18nChoiceCountry(array(
        'culture' => $user->getCulture()
    ));
    
    $this->widgetSchema['country-name']->setDefault(strtoupper(substr($adr['country-name'], 0, 2)));
    
    $this->widgetSchema['tel'] = new sfWidgetFormHtml5InputText();
    $this->widgetSchema['tel']->setDefault(peanutConfig::get('tel'));
  }
}
