<?php

require_once dirname(__FILE__).'/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins(array(
        'sfDoctrinePlugin',
        'sfTaskExtraPlugin',
        'peanutHtml5Plugin',
        'sfLESSPlugin',
        'sfDoctrineGuardPlugin'
    ));
  }

  public function setupPlugins()
  {
    $this->pluginConfigurations['peanutHtml5Plugin']->connectTests();
  }
}
