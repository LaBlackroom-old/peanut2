<?php

include(dirname(__FILE__).'/../../../../bootstrap/unit.php');

$configuration = ProjectConfiguration::getApplicationConfiguration( 'www', 'test', true);
$databaseManager = new sfDatabaseManager($configuration);
$table = Doctrine_Core::getTable('peanutLink');


if(null != Doctrine_Core::getTable('peanutLink')->showItem(51)->fetchOne())
{
  Doctrine_Core::getTable('peanutLink')->createQuery()
    ->delete()
    ->where('id = ?', '51')
    ->execute();
  
  Doctrine_Core::getTable('peanutMenu')->createQuery()
    ->delete()
    ->where('id = ?', '50')
    ->execute();
  
  Doctrine_Core::getTable('sfGuardUser')->createQuery()
    ->delete()
    ->where('id = ?', '50')
    ->execute();
  
  Doctrine_Core::getTable('peanutXfn')->createQuery()
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

$relation = new peanutXfn();
$relation->setId(50);
$relation->setProfessional('a:1:{i:0;s:9:"co-worker";}');
$relation->save();

$item = new peanutLink();
$item->setId('51');
$item->setTitle('test link');
$item->setContent('my test link');
$item->setUrl('http://www.test.com');
$item->setMenu('50');
$item->setAuthor('50');
$item->setRelation('50');
$item->save();

$t = new lime_test(9);


/*
 * 
 */

$t->comment('Get an instance');
$item = Doctrine_Core::getTable('peanutLink')->getInstance();
$t->ok($item, 'Current instance is peanutLink');

/*
 * 
 */
$t->comment('Get an item');
$item = Doctrine_Core::getTable('peanutLink')->getItem();
$t->ok($item, 'I got an object!');

/*
 * 
 */
$t->comment('Show an item');
$item = Doctrine_Core::getTable('peanutLink')->showItem(51)->fetchOne();
$t->is($item['title'], 'test link', 'The title is test item');

$item = Doctrine_Core::getTable('peanutItem')->showItem('test-link')->fetchOne();
$t->is($item['id'], '51', 'The id is 51');

$item = Doctrine_Core::getTable('peanutItem')->showItem('51', 'link')->fetchOne();
$t->is($item['type'], 'link', 'The status of 51 is link');


/*
 * 
 */
$t->comment('Get all items');
$item->setStatus('draft');
$item->save();

$item = Doctrine_Core::getTable('peanutLink')->getItems('draft')->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
$t->is(count($item), '1', 'There are 1 draft item');

/*
 * 
 */
$t->comment('Get all items for a menu');

$item = Doctrine_Core::getTable('peanutLink')->getItemsByMenu(50, 'draft')->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
$t->is(count($item), '1', 'There are 1 item in this menu (50)');

/*
 * 
 */
$t->comment('Get all items for an author');
$item = Doctrine_Core::getTable('peanutLink')->getItemsByAuthor(50, 'draft')->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
$t->is(count($item), '1', 'There are 1 item for this author (50)');

/*
 * 
 */

$t->comment('Get all items where relation is co-worker');
$item = Doctrine_Core::getTable('peanutLink')->getItemsByRelation('co-worker', 'draft')->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
$t->is(count($item), '1', 'There are 1 item for this relation (co-worker)');


if(null != Doctrine_Core::getTable('peanutLink')->showItem(51)->fetchOne())
{
  Doctrine_Core::getTable('peanutLink')->createQuery()
    ->delete()
    ->where('id = ?', '51')
    ->execute();
  
  Doctrine_Core::getTable('peanutMenu')->createQuery()
    ->delete()
    ->where('id = ?', '50')
    ->execute();
  
  Doctrine_Core::getTable('sfGuardUser')->createQuery()
    ->delete()
    ->where('id = ?', '50')
    ->execute();
  
  Doctrine_Core::getTable('peanutXfn')->createQuery()
    ->delete()
    ->where('id = ?', '50')
    ->execute();
}
