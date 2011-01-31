<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$t = new lime_test();

$w = new sfWidgetFormHtml5InputDate();
$t->like($w->render('date'), '/type="date" name="date" id="date"/', 'render widget');


$t->comment('->render() with a min option');
$t->info('Using a string');
$w->setAttribute('min', '2010-10-10');
$t->like($w->render('date'), '/min="2010-10-10"/', 'render Y-m-d with string');
$w->setAttribute('min', 'salut');
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
$w->setAttribute('min', strtotime('10 october 2010'));
$t->like($w->render('date'), '/min="2010-10-10"/', 'render Y-m-d with integer');

$w->setAttribute('min', strtotime('42 october 2010'));
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
$w->setAttribute('min', new DateTime('2010-10-10'));
$t->like($w->render('date'), '/min="2010-10-10"/', 'render Y-m-d with DateTime Object');




$t->comment('->render() with a max option');
$w = new sfWidgetFormHtml5InputDate();

$t->info('Using a string');
$w->setAttribute('max', '2010-10-10');
$t->like($w->render('date'), '/max="2010-10-10"/', 'render Y-m-d with string');
$w->setAttribute('max', 'salut');
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
$w->setAttribute('max', strtotime('10 october 2010'));
$t->like($w->render('date'), '/max="2010-10-10"/', 'render Y-m-d with integer');

$w->setAttribute('max', strtotime('42 october 2010'));
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
$w->setAttribute('max', new DateTime('2010-10-10'));
$t->like($w->render('date'), '/max="2010-10-10"/', 'render Y-m-d with DateTime Object');



$t->comment('->render() with a step option');
$w = new sfWidgetFormHtml5InputDate();
$w->setAttribute('step', '2');
$t->like($w->render('number'), '/step="2"/', 'render step 2');
