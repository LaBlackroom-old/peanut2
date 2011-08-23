<?php

/**
 *
 * @package    peanut
 * @subpackage settings
 * @author     Alexandre 'pocky' Balmes <falbalmes@gmail.com>
 */

class BaseSettingsActions extends sfActions
{
  public function executeSociety(sfWebRequest $request)
  {
    $this->form = new societySettingsForm();
    
    if($request->isMethod('post'))
    { 
      $this->form->bind($request->getParameter('settings'));
      
      if($this->form->isValid())
      {
        
        peanutConfig::set('society', $this->form->getValue('society'));
        peanutConfig::set('url', $this->form->getValue('url'));
        peanutConfig::set('tel', $this->form->getValue('tel'));

        $adr = array(
          'street-address'  => $this->form->getValue('street-address'),
          'locality'        => $this->form->getValue('locality'),
          'region'          => $this->form->getValue('region'),
          'postal-code'     => $this->form->getValue('postal-code'),
          'country-name'    => $this->form->getValue('country-name')
        );
        
        peanutConfig::set('adr', serialize($adr));
        
      }

    }
  }
  
  public function executeGoogle(sfWebRequest $request)
  {
    $this->form = new googleSettingsForm();
    
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
  
  public function executeGeneral(sfWebRequest $request)
  {
    $this->form = new generalSettingsForm();
    
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
  
  public function executeContact(sfWebRequest $request)
  {
    $this->form = new contactSettingsForm();
    
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