<?php

/**
 * dashboard components.
 *
 * @package    peanut
 * @subpackage dashboard
 * @author     Alexandre "pocky" Balmes <albalmes@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class dashboardComponents extends sfComponents
{
  
  public function executeCount(sfWebRequest $request)
  {
    $items = Doctrine_Core::getTable('peanutItem')->getItems();
    $this->items = $items->fetchArray();
    
    $users = Doctrine_Core::getTable('sfGuardUser')->getUsers();   
    $this->users = $users->fetchArray();
  }
  
  public function executeUsers(sfWebRequest $request)
  {
    $users = Doctrine_Core::getTable('sfGuardUser')->getUsers();    
    $users->limit('5');
    
    $this->users = $users->execute();
  }
  
  public function executeItems(sfWebRequest $request)
  {
    $items = Doctrine_Core::getTable('peanutItem')->getItem();
    $items->limit('5');
    
    $this->items = $items->execute();
  }
  
  public function executeAnalytics(sfWebRequest $request)
  {
    if(peanutConfig::get('google_tracking'))
    {
      $ga = new GoogleAnalyticsAPI(
            peanutConfig::get('google_mail'),
            peanutConfig::get('google_password'),
            peanutConfig::get('google_tracking'),
            date('Y-m-d', strtotime('-1 day'))
      );

      $this->visits = $ga->getMetric('visits');
      $this->visitors = $ga->getMetric('visitors');
      $this->pages = $ga->getMetric('pageviews');
      
    }
    else
    {
      return sfView::NONE; 
    }
    
  }
  
  public function executeFeed(sfWebRequest $request)
  {
    if(peanutConfig::get('news_feed'))
    {
      $items = simplexml_load_file(peanutConfig::get('news_feed'));
      $this->items = $items;
    }
    else
    {
      return sfView::NONE;
    }
    
  }
  
  
}