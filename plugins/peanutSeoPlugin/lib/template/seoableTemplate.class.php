<?php

class Doctrine_Template_Seoable extends Doctrine_Template
{
  public function setTableDefinition()
  {
    $this->hasColumn('seo_id', 'integer', null, array(
      'type'    => 'integer',
      'length'  => '4',
    ));
    
    $this->setAttribute(Doctrine_Core::ATTR_EXPORT, Doctrine_Core::EXPORT_ALL ^ Doctrine_Core::EXPORT_CONSTRAINTS);
  }
  
  public function setUp()
  {
    $this->hasOne('peanutSeo', array(
      'local'    => 'seo_id',
      'foreign'  => 'id'
    ));
  }
  
}