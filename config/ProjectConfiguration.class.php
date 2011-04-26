<?php

require_once dirname(__FILE__).'/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function configureDoctrine(Doctrine_Manager $manager)
  {
    $manager->setCollate('utf8_unicode_ci');
    $manager->setCharset('utf8');

    Doctrine_Migration_Base::setDefaultTableOptions(array(
      'type' => 'INNODB',
      'charset' => 'utf8',
      'collate' => 'utf8_unicode_ci'
    ));
  }

  public function setup()
  {
    $this->enablePlugins(array(
        'sfDoctrinePlugin',
        'sfTaskExtraPlugin',
        'peanutHtml5Plugin',
        'sfDoctrineGuardPlugin',
        'csDoctrineActAsSortablePlugin',
        'sfCKEditorPlugin',
        'peanutCorporatePlugin',
        'peanutFormPlugin',
        'peanutSeoPlugin'
    ));
    
    $this->dispatcher->connect('context.load_factories', array($this, 'listenToLoadFactoriesEvent'));
  }

  public function setupPlugins()
  {
    $this->pluginConfigurations['peanutHtml5Plugin']->connectTests();
    $this->pluginConfigurations['sfDoctrineGuardPlugin']->connectTests();
    $this->pluginConfigurations['peanutCorporatePlugin']->connectTests();
    $this->pluginConfigurations['peanutSeoPlugin']->connectTests();
  }
  
  public function listenToLoadFactoriesEvent(sfEvent $event)
  {
    BaseForm::setUser($event->getSubject()->getUser());
  }
}
