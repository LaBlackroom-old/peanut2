<?php

require_once dirname(__FILE__).'/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins(array(
        'sfDoctrinePlugin',
        'peanut5Plugin'
    ));
  }

  public function setupPlugins()
  {
    $this->pluginConfigurations['peanut5Plugin']->connectTests();
  }
}
