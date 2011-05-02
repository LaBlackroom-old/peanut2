<?php

/**
 * Generates a non-random-filename
 *
 *
 * @package    peanut
 * @subpackage validator
 * @return     string A non-random name to represent the current file
 * @author     Alexandre "pocky" Balmes <albalmes@gmail.com>
 * @author     http://www.robo47.net/blog/204-Stopping-symfony-from-screwing-up-uploaded-files-names
 */
 
class peanutValidatedFile extends sfValidatedFile
{

  /**
   * Generates a non-random-filename
   *
   * @return string A non-random name to represent the current file
   */
  public function generateFilename()
  {
    $filename = $this->getOriginalName();

    $ext =  filter_var($this->getExtension($this->getOriginalExtension()), FILTER_SANITIZE_URL);
    $name = substr($this->getOriginalName(), 0, - strlen($ext));
    
    $i = 1;
    
    while(file_exists($this->getPath() . '/' .  $filename)) {
      $filename = Doctrine_Inflector::urlize($name) . '-' . $i . $ext;
      $i++;
    }
    
    return $filename;
  }
}