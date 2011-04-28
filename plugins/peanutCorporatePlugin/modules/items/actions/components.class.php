<?php

/**
 * items actions.
 *
 * @package    peanutCorporatePlugin
 * @subpackage items
 * @author     Alexandre "pocky" Balmes <albalmes@gmail.com>
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
    $items = Doctrine_Core::getTable('peanutLink')->getItemsByMenu(2);
    $this->items = $items->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
  }
}
