<?php

include(dirname(__FILE__).'/../../../../bootstrap/unit.php');

$configuration = ProjectConfiguration::getApplicationConfiguration( 'www', 'test', true);
$databaseManager = new sfDatabaseManager($configuration);
$table = Doctrine_Core::getTable('peanutItem');


if(null != Doctrine_Core::getTable('peanutItem')->showItem(50)->fetchOne())
{
  Doctrine_Core::getTable('peanutItem')->createQuery()
    ->delete()
    ->where('id = ?', '50')
    ->execute();
  
  Doctrine_Core::getTable('peanutMenu')->createQuery()
    ->delete()
    ->where('id = ?', '50')
    ->execute();
  
  Doctrine_Core::getTable('sfGuardUser')->createQuery()
    ->delete()
    ->where('id = ?', '50')
    ->execute();
}

$menu = new peanutMenu();
$menu->setId(50);
$menu->save();

$user = new sfGuardUser();
$user->setId(50);
$user->setUsername('test');
$user->setPassword('test');
$user->setEmailAddress('test@test.com');
$user->save();

$item = new peanutItem();
$item->setId('50');
$item->setTitle('test item');
$item->setContent('my test item');
$item->setMenu('50');
$item->setAuthor('50');
$item->setType('page');
$item->save();

$t = new lime_test(8);


/*
 * 
 */

$t->comment('Get an instance');
$item = Doctrine_Core::getTable('peanutItem')->getInstance();
$t->ok($item, 'Current instance is peanutItem');

/*
 * 
 */
$t->comment('Get an item');
$item = Doctrine_Core::getTable('peanutItem')->getItem();
$t->ok($item, 'I got an object!');

/*
 * 
 */
$t->comment('Show an item');
$item = Doctrine_Core::getTable('peanutItem')->showItem(50)->fetchOne();
$t->is($item['title'], 'test item', 'The title is test item');

$item = Doctrine_Core::getTable('peanutItem')->showItem('test-item')->fetchOne();
$t->is($item['id'], '50', 'The id is 50');

$item = Doctrine_Core::getTable('peanutItem')->showItem('50', 'page')->fetchOne();
$t->is($item['type'], 'page', 'The status of 50 is page');

/*
 * 
 */
$t->comment('Get all items');
$item->setStatus('draft');
$item->save();

$item = Doctrine_Core::getTable('peanutItem')->getItems('draft')->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
$t->is(count($item), '1', 'There are 1 draft item');

/*
 * 
 */
$t->comment('Get all items for a menu');

$item = Doctrine_Core::getTable('peanutItem')->getItemsByMenu(50, 'draft')->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
$t->is(count($item), '1', 'There are 1 item in this menu (50)');

/*
 * 
 */
$t->comment('Get all items for an author');
$item = Doctrine_Core::getTable('peanutItem')->getItemsByAuthor(50, 'draft')->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
$t->is(count($item), '1', 'There are 1 item for this author (50)');



if(null != Doctrine_Core::getTable('peanutItem')->showItem(50)->fetchOne())
{
  Doctrine_Core::getTable('peanutItem')->createQuery()
    ->delete()
    ->where('id = ?', '50')
    ->execute();
  
  Doctrine_Core::getTable('peanutMenu')->createQuery()
    ->delete()
    ->where('id = ?', '50')
    ->execute();
  
  Doctrine_Core::getTable('sfGuardUser')->createQuery()
    ->delete()
    ->where('id = ?', '50')
    ->execute();
}
