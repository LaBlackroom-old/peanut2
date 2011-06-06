<?php

 /**
  * 
  * peanutConfiguration
  * 
  * @package peanut
  * @author Alexandre 'pocky' Balmes <albalmes@gmail.com>
  * 
  */

class peanutConfig
{
  
  protected static
    $config,
    $loaded = false;
  
  
  /**
   * Get a property by her name
   * 
   * @param $name    string    The property name
   * 
   * @return array()
   * 
   */
  public static function get($name)
  {
    if(!self::$loaded)
    {
      self::load();
    }
    
    $property = self::$config[$name];
    
    if(null === $property)
    {
      throw new sfException(sprintf('%s is not a valid property. peanutConfig luv u.', $name));
    }
    
    return $property ;
  }
  
  /**
   * CHeck if property exists
   * 
   * @param $name    string    The property name
   * 
   * @return boolean
   * 
   */
  public static function has($name)
  {
    if(!self::$loaded)
    {
      self::load();
    }
    
    return array_key_exists($name, self::$config);
  }
  
  /**
   * Set a property
   * 
   * @param $name    string    The property name
   * @param $value   string    The property value
   * 
   */
  public static function set($name, $value)
  {
    if(!self::has($name))
    {
      throw new sfException(sprintf('There is no setting called %s', $name));
    }
    
    $settings = Doctrine_Core::getTable('peanutSettings')->createQuery('s')->where('s.name = ?', $name)->fetchOne();
    $settings->set('value', $value);
    $settings->save();
    
    self::$config[$name] = $value;
  }
  
  /**
   * Get all properties
   * 
   * @return array()
   * 
   */
  public static function getAll()
  { 
    if(!self::$loaded)
    {
      self::load();
    }
    
    return self::$config;
  }
  
  
  /**
   * Load properties
   * 
   */
  protected static function load()
  {
    
    $settings = Doctrine_Core::getTable('peanutSettings')->createQuery('s')->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
    
    foreach($settings as $setting)
    {      
      self::$config[$setting['name']] = $setting['value'];
    }
    
    self::$loaded = true;
  }
  
  
}