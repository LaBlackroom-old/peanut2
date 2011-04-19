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
      
      if(Doctrine_Core::getTable($model)->getRelations())
      {
        $i = 1;
        $relations = Doctrine_Core::getTable($model)->getRelations();
        
        foreach($relations as $relation)
        {
          $p->leftJoin('p.' . $relation['alias'] . ' ' . $i++);
        }
      }
    
    return $p->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
  }
  
}