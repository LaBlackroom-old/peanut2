<?php


abstract class PluginpeanutSeoTable extends Doctrine_Table
{ 
  public static function getInstance()
  {
    return Doctrine_Core::getTable('peanutSeo');
  }
  
  
  public function getSitemap($model, $status = 'publish')
  {
    $p = Doctrine_Query::create()
      ->from($model . ' p')
      ->where('p.status = ?', $status)
      ->orderBy('updated_at');
      
      if(Doctrine_Core::getTable($model)->hasRelation('peanutSeo'))
      {
        $p->leftJoin('p.peanutSeo z');
      }
    
    return $p;
  }
  
}