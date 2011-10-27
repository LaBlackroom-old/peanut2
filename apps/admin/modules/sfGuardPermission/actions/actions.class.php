<?php
/**
 * sfGuardPermission actions.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage sfGuardPermission
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: actions.class.php 31002 2010-09-27 12:04:07Z Kris.Wallsmith $
 */
class SfGuardPermissionActions extends autoSfGuardPermissionActions
{
  public function executeIndex(sfWebRequest $request)
  {
    
    
    
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
    $this->sf_guard_permission = $this->getRoute()->getObject();
    $this->form = $this->configuration->getForm($this->sf_guard_permission);
  }
}
