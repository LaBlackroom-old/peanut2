<?php

include(dirname(__FILE__).'/../../../../bootstrap/unit.php');

$configuration = ProjectConfiguration::getApplicationConfiguration( 'www', 'test', true);
$databaseManager = new sfDatabaseManager($configuration);
$table = Doctrine_Core::getTable('peanutLink');


if(null != Doctrine_Core::getTable('peanutPage')->showItem(52)->fetchOne())
{
  Doctrine_Core::getTable('peanutPage')->createQuery()
    ->delete()
    ->where('id = ?', '52')
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

$item = new peanutPage();
$item->setId('52');
$item->setTitle('test page');
$item->setContent('my test page');
$item->setMenu('50');
$item->setAuthor('50');
$item->save();

$t = new lime_test(10);


/*
 * 
 */

$t->comment('Get an instance');
$item = Doctrine_Core::getTable('peanutPage')->getInstance();
$t->ok($item, 'Current instance is peanutPage');

/*
 * 
 */
$t->comment('Get an item');
$item = Doctrine_Core::getTable('peanutPage')->getItem();
$t->ok($item, 'I got an object!');

/*
 * 
 */
$t->comment('Show an item');
$item = Doctrine_Core::getTable('peanutPage')->showItem(52)->fetchOne();
$t->is($item['title'], 'test page', 'The title is test page');

$item = Doctrine_Core::getTable('peanutPage')->showItem('test-page')->fetchOne();
$t->is($item['id'], '52', 'The id is 52');

$item = Doctrine_Core::getTable('peanutPage')->showItem('52')->fetchOne();
$t->is($item['type'], 'page', 'The status of 52 is page');


/*
 * 
 */
$t->comment('Get all items');
$item->setStatus('draft');
$item->save();

$item = Doctrine_Core::getTable('peanutPage')->getItems('draft')->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
$t->is(count($item), '1', 'There are 1 draft item');


/*
 * 
 */
$t->comment('Get all items for a menu');

$item = Doctrine_Core::getTable('peanutPage')->getItemsByMenu(50)->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
$t->is(count($item), '1', 'There are 1 item in this menu (50)');

/*
 * 
 */
$t->comment('Get all items for a menu');

$item = Doctrine_Core::getTable('peanutPage')->getItemsByMenuAndStatus(50, 'draft')->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
$t->is(count($item), '1', 'There are 1 item in this menu (50)');


/*
 * 
 */
$t->comment('Get all items for an author');
$item = Doctrine_Core::getTable('peanutPage')->getItemsByAuthor(50)->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
$t->is(count($item), '1', 'There are 1 item for this author (50)');

/*
 * 
 */
$t->comment('Get all items for an author');
$item = Doctrine_Core::getTable('peanutPage')->getItemsByAuthorAndStatus(50, 'draft')->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
$t->is(count($item), '1', 'There are 1 item for this author (50)');



if(null != Doctrine_Core::getTable('peanutPage')->showItem(52)->fetchOne())
{
  Doctrine_Core::getTable('peanutPage')->createQuery()
    ->delete()
    ->where('id = ?', '52')
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
