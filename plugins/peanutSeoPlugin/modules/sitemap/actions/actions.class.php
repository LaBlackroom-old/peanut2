<?php

  /**
   *
   * sitemap actions
   *
   * @package Peanut
   * @subpackage seo
   * @author Alexandre pocky Balmes
   *
   */
  
  class sitemapActions extends sfActions
  {
    public function executeIndex(sfWebRequest $request)
    {
      $pageSitemap = Doctrine::getTable('peanutSeo')->getSitemap('peanutPage');
      $this->pageSitemap = $pageSitemap->execute(array(), Doctrine_Core::HYDRATE_ARRAY);

      $linkSitemap = Doctrine::getTable('peanutSeo')->getSitemap('peanutLink');
      $this->linkSitemap = $linkSitemap->execute(array(), Doctrine_Core::HYDRATE_ARRAY);

      $this->forward404Unless($this->linkSitemap);
    }
  }
  
   