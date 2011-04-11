<?php

/**
 * items actions.
 *
 * @package    blackroom
 * @subpackage items
 * @author     Alexandre pocky Balmes
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class itemsActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $items = Doctrine_Core::getTable('peanutPage')->getItemsByMenuAndStatus(1);
    $this->item = $items->fetchOne(array(), Doctrine_Core::HYDRATE_ARRAY);
  }

  public function executeShow(sfWebRequest $request)
  {
    $item = Doctrine_Core::getTable('peanutPage')->getItem($this->getRequestParameter('slug'));
    $this->item = $item->fetchOne(array(), Doctrine_Core::HYDRATE_ARRAY);
    
    $this->forward404Unless($this->item);
  }


}
