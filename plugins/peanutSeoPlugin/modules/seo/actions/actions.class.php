<?php

  /**
   *
   * seo actions
   *
   * @package Peanut
   * @subpackage seo
   * @author Alexandre pocky Balmes
   *
   */
  
  class seoActions extends sfActions
  {
    public function executeShow(sfWebRequest $request)
    {
      $this->pagesSitemap = Doctrine::getTable('peanutSeo')->getSitemap('peanutPage');
      $this->forward404Unless($this->pagesSitemap);
    }
  }
  
   