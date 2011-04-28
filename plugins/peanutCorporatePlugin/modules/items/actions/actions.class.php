<?php

/**
 * items actions.
 *
 * @package    peanutCorporatePlugin
 * @subpackage items
 * @author     Alexandre "pocky" Balmes <albalmes@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class itemsActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $items = Doctrine_Core::getTable('peanutPage')->getItemsByMenuAndStatus(1);
    $this->item = $items->fetchOne();

    $this->forward404Unless($this->item);
  }

  public function executeShow(sfWebRequest $request)
  {
    $item = Doctrine_Core::getTable('peanutItem')->showItem($this->getRequestParameter('slug'));
    $this->item = $item->fetchOne();
    
    $this->forward404Unless($this->item);
  }

  public function executeList(sfWebRequest $request)
  {
    $items = Doctrine_Core::getTable('peanutItem')->getItems();
    $this->items = $items->execute(array(), Doctrine_Core::HYDRATE_ARRAY);

    $this->forward404Unless($this->items);
  }

  public function executeListByAuthor(sfWebRequest $request)
  {
    $items = Doctrine_Core::getTable('peanutPage')->getItemsByAuthorAndStatus($this->getRequestParameter('author'));
    $this->items = $items->execute(array(), Doctrine_Core::HYDRATE_ARRAY);

    $this->forward404Unless($this->items);
  }

  public function executeListByMenu(sfWebRequest $request)
  {
    $items = Doctrine_Core::getTable('peanutItem')->getItemsByMenu($this->getRequestParameter('menu'));
    $this->items = $items->execute(array(), Doctrine_Core::HYDRATE_ARRAY);

    $this->forward404Unless($this->items);
  }

  public function executeListLinkByRelation(sfWebRequest $request)
  {
    $links = Doctrine_core::getTable('peanutLink')->getItemsByRelation($this->getRequestParameter('relation'));
    $this->items = $links->execute(array(), Doctrine_Core::HYDRATE_ARRAY);

    $this->forward404Unless($this->items);
  }

}
