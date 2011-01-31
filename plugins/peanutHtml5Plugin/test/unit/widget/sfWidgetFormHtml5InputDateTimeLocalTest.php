<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$t = new lime_test();
$w = new sfWidgetFormHtml5InputDateTimeLocal();

$t->info('->render()');
$t->like($w->render('datetimelocal'), '/type="datetime-local" name="datetimelocal" id="datetimelocal"/', 'render widget');


$t->info('Using a string');
$w->setAttribute('min', '2010-10-10');
$t->like($w->render('date'), '/min="2010-10-10T00:00:00"/', 'render Y-m-d with string');
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
$t->like($w->render('date'), '/min="2010-10-10T00:00:00"/', 'render Y-m-d with integer');

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
$t->like($w->render('date'), '/min="2010-10-10T00:00:00"/', 'render Y-m-d with DateTime Object');