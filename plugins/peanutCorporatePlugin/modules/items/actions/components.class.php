<?php

/**
 * items actions.
 *
 * @package    blackroom
 * @subpackage items
 * @author     Alexandre pocky Balmes
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class itemsComponents extends sfComponents
{
  public function executeMainMenu(sfWebRequest $request)
  {
    $items = Doctrine_Core::getTable('peanutItem')->getItemsByMenu(1);
    $this->items = $items->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
  }

  public function executeFooterMenu(sfWebRequest $request)
  {
    $items = Doctrine_Core::getTable('peanutItem')->getItemsByMenu(2);
    $this->items = $items->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
  }
}
