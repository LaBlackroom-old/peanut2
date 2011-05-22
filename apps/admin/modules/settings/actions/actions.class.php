<?php

require_once(dirname(__FILE__).'/../lib/BaseSettingsActions.class.php');

/**
 *
 * @package    peanut
 * @subpackage settings
 * @author     Alexandre 'pocky' Balmes <falbalmes@gmail.com>
 */

class settingsActions extends BaseSettingsActions
{
  public function executeSeo(sfWebRequest $request)
  {
    $this->form = new seoSettingsForm();
    
    if($request->isMethod('post'))
    { 
      $this->form->bind($request->getParameter('settings'));
      
      if($this->form->isValid())
      {
        
        foreach($this->form->getValues() as $name => $value)
        {
          peanutConfig::set($name, $value);
        }
        
      }

    }
  }
}