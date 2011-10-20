<?php

/**
 * sfGuardUserTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class sfGuardUserTable extends PluginsfGuardUserTable
{
  /**
   * Returns an instance of this class.
   *
   * @return object sfGuardUserTable
   */
  public static function getInstance()
  {
    return Doctrine_Core::getTable('sfGuardUser');
  }
  
  /*
   * 
   */
  public function getUser()
  {
    $p = $this->createQuery('p')
            ->leftJoin('p.Groups g')
            ->leftJoin('p.Permissions s')
            ->orderBy('p.id DESC');
    
    return $p;
  }
  
  /*
   * 
   */
  public function getUsers($active = true)
  {
    $p = $this->getUser()
            ->andWhere('p.is_active = ?', $active);
    
    return $p;
  }
  
  /*
   * 
   */
  public function getLastUsers($limit = 5, $active = true)
  {
    $p = $this->getUsers($active)
            ->limit($limit);
    
    return $p;
  }
  
  public function getUsersWhereGroupIs($group, $active = true)
  {
    $p = $this->getUsers($active)
            ->where('g.name = ? OR g.id = ?', array($group, $group));
    
    return $p;
  }
  
  public function getUsersWherePermissionIs($permission, $active = true)
  {
    $p = $this->getUsers($active)
              ->where('s.id = ? OR s.id = ?', $permission);
    
    return $p;
  }
  
}