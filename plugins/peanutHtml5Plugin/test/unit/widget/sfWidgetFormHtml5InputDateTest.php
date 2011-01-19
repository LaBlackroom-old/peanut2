<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$t = new lime_test();

$w = new sfWidgetFormHtml5InputDate();
$t->is($w->render('date'), '<input type="date" name="date" id="date" />', 'render tag ok');


$t->comment('->render() with a min option');
$t->info('Using a string');
$w->setOption('min', '2010-10-10');
$t->like($w->render('date'), '/min="2010-10-10"/', 'render Y-m-d with string');
$w->setOption('min', 'salut');
try
{
  $w->render('date');
  $t->fail('Invalid value should throw and exception');
}
catch(Exception $e)
{
  $t->pass('Invalid value throws an exception');
}



$t->info('Using an integer');
$w->setOption('min', strtotime('10 october 2010'));
$t->like($w->render('date'), '/min="2010-10-10"/', 'render Y-m-d with integer');

$w->setOption('min', strtotime('42 october 2010'));
try
{
  $w->render('date');
  $t->fail('Invalid value should throw and exception');
}
catch(Exception $e)
{
  $t->pass('Invalid value throws an exception');
}


$t->info('Using a DateTime object');
$w->setOption('min', new DateTime('2010-10-10'));
$t->like($w->render('date'), '/min="2010-10-10"/', 'render Y-m-d with DateTime Object');




$t->comment('->render() with a max option');
$w = new sfWidgetFormHtml5InputDate();

$t->info('Using a string');
$w->setOption('max', '2010-10-10');
$t->like($w->render('date'), '/max="2010-10-10"/', 'render Y-m-d with string');
$w->setOption('max', 'salut');
try
{
  $w->render('date');
  $t->fail('Invalid value should throw and exception');
}
catch(Exception $e)
{
  $t->pass('Invalid value throws an exception');
}



$t->info('Using an integer');
$w->setOption('max', strtotime('10 october 2010'));
$t->like($w->render('date'), '/max="2010-10-10"/', 'render Y-m-d with integer');

$w->setOption('max', strtotime('42 october 2010'));
try
{
  $w->render('date');
  $t->fail('Invalid value should throw an exception');
}
catch(Exception $e)
{
  $t->pass('Invalid value throws an exception');
}


$t->info('Using a DateTime object');
$w->setOption('max', new DateTime('2010-10-10'));
$t->like($w->render('date'), '/max="2010-10-10"/', 'render Y-m-d with DateTime Object');



$t->comment('->render() with a step option');
$w = new sfWidgetFormHtml5InputDate();
$w->setOption('step', '2');
$t->like($w->render('number'), '/step="2"/', 'render step 2');
