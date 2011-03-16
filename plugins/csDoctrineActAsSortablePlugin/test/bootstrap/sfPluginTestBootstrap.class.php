<?php

class sfPluginTestBootstrap
{
  protected
    $symfonyDir     = null,
    $configuration  = null,
    $context        = null;

  public function __construct($symfonyDir = null)
  {
    if ($symfonyDir) 
    {
      $this->setSymfonyDir($symfonyDir);
    }
    
    $this->setSymfonyPluginsDir(dirname(__FILE__).'/../../..');
  }
  
  public function teardown()
  {
    sfToolkit::clearDirectory(dirname(__FILE__).'/../fixtures/project/cache');
    sfToolkit::clearDirectory(dirname(__FILE__).'/../fixtures/project/log');
  }
  
  public function setup()
  {
    // Copy over test SQLite database
    copy(dirname(__FILE__).'/../fixtures/project/data/fresh_test_db.sqlite', dirname(__FILE__).'/../fixtures/project/data/test.sqlite');
  }
  
  // Find all tests and run them
  public function run()
  {
    $h = new lime_harness(new lime_output_color());
    $h->register(sfFinder::type('file')->name('*Test.php')->in(dirname(__FILE__).'/..'));

    exit($h->run() ? 0 : 1);
  }
  
  public function autoload($class)
  {
    $autoload = sfSimpleAutoload::getInstance();
    $autoload->reload();
    return $autoload->autoload($class);
  }
  
  public function getConfiguration()
  {
    return $this->configuration;
  }
  
  public function getContext()
  {
    return $this->context;
  }
  
  public function setSymfonyDir($symfonyDir)
  {
    if ($symfonyDir) 
    {
      $this->symfonyDir   = $symfonyDir;
      $_SERVER['SYMFONY'] = $symfonyDir;
      file_put_contents('/tmp/symfony_dir', $this->symfonyDir);
    }
  }
  
  public function setSymfonyPluginsDir($pluginsDir)
  {
    $this->pluginsDir               = $pluginsDir;
    $_SERVER['SYMFONY_PLUGINS_DIR'] = $pluginsDir;
  }
  
  public function getSymfonyDir()
  {
    if (!$this->symfonyDir) 
    {
      // Get path to symfony
      if (isset($_SERVER['SYMFONY'])) 
      {
        $this->symfonyDir = $_SERVER['SYMFONY'];
      }
      elseif(file_exists('/tmp/symfony_dir'))
      {
        // Hack to allow the passing in of symfony_dir at runtime
        $this->symfonyDir = file_get_contents('/tmp/symfony_dir');
        $_SERVER['SYMFONY'] = $this->symfonyDir;
      }
      else
      {
        throw new Exception(sprintf("Symfony directory%s not found.  Please set \$_SERVER['SYMFONY'] or provide a --symfony_dir argument", isset($_SERVER['SYMFONY']) ? " '$_SERVER[SYMFONY]'" : ''));
      }
    }
    
    return $this->symfonyDir;
  }
  
  public function bootstrap($app = 'frontend', $debug = true)
  {
    // so that all notices will appear
    error_reporting(E_ALL);

    // Load symfony core and lime testing framework
    require_once $this->getSymfonyDir().'/autoload/sfCoreAutoload.class.php';
    sfCoreAutoload::register();

    // Create configuration and context
    require_once dirname(__FILE__).'/../fixtures/project/config/ProjectConfiguration.class.php';
    $this->configuration = ProjectConfiguration::getApplicationConfiguration($app, 'test', $debug);
    
    require_once $this->configuration->getSymfonyLibDir().'/vendor/lime/lime.php';
    $this->context = sfContext::createInstance($this->configuration);
    
    new sfDatabaseManager($this->configuration);

    // Register teardown / autoload functions
    spl_autoload_register(array($this, 'autoload'));
    register_shutdown_function(array($this, 'teardown'));
    
    // Cleanup and copy over SQLite DB
    $this->teardown();
    $this->setup();
  }
}