<?php

/**
 * sfGuardGroup actions.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage sfGuardGroup
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: actions.class.php 31002 2010-09-27 12:04:07Z Kris.Wallsmith $
 */
class SfGuardGroupActions extends autoSfGuardGroupActions
{
  public function executeIndex(sfWebRequest $request)
  {
    //Récupérer les permissions des groupes
    $groupsPermissions = Doctrine::getTable('sfGuardGroupPermission')->getGroupsPermissions();
    $perm = $groupsPermissions->addSelect('permission_id')->addSelect('group_id')->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
    
    foreach ($perm as $value){   
      $groupPerm[$value['group_id']][] = $value['permission_id'];
    }
   
    $this->groupPermissions = $groupPerm;

    // sorting
    if ($request->getParameter('sort') && $this->isValidSortColumn($request->getParameter('sort')))
    {
      $this->setSort(array($request->getParameter('sort'), $request->getParameter('sort_type')));
    }

    // pager
    if ($request->getParameter('page'))
    {
      $this->setPage($request->getParameter('page'));
    }

    $this->pager = $this->getPager();
    $this->sort = $this->getSort();
  }
  
  public function executeEdit(sfWebRequest $request)
  {
    //Récupérer les permissions des groupes
    $groupsPermissions = Doctrine::getTable('sfGuardGroupPermission')->getGroupsPermissions();
    $perm = $groupsPermissions->addSelect('permission_id')->addSelect('group_id')->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
    
    foreach ($perm as $value){   
      $groupPerm[$value['group_id']][] = $value['permission_id'];
    }
   
    $this->groupPermissions = $groupPerm;
    
    $this->sf_guard_group = $this->getRoute()->getObject();
    $this->form = $this->configuration->getForm($this->sf_guard_group);
  }
  
  public function executeNew(sfWebRequest $request)
  {
    //Récupérer les permissions des groupes
    $groupsPermissions = Doctrine::getTable('sfGuardGroupPermission')->getGroupsPermissions();
    $perm = $groupsPermissions->addSelect('permission_id')->addSelect('group_id')->execute(array(), Doctrine_Core::HYDRATE_ARRAY); 
    
    foreach ($perm as $value){   
      $groupPerm[$value['group_id']][] = $value['permission_id'];
    }
   
    $this->groupPermissions = $groupPerm;
    
    $this->form = $this->configuration->getForm();
    $this->sf_guard_group = $this->form->getObject();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm();
    $this->sf_guard_group = $this->form->getObject();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }
  
}
