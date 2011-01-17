<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$t = new lime_test(5);
$w = new sfWidgetFormHtml5InputDate();

$t->is($w->render('date'), '<input type="date" name="date" id="date" />', 'render tag ok');


$t->comment('test the formatDate() method');

$w->setOption('min', '2010-10-10');
$t->like($w->render('date'), '/min="2010-10-10"/', 'render Y-m-d with string');

$timestamp = strtotime("10 october 2010");
$w->setOption('min', $timestamp);
$t->like($w->render('date'), '/min="2010-10-10"/', 'render Y-m-d with integer');

$datetime = new DateTime('2010-10-10');
$w->setOption('min', $datetime);
$t->like($w->render('date'), '/min="2010-10-10"/', 'render Y-m-d with DateTime Object');

$datetime = "salut";
$w->setOption('min', $datetime);

try
{
  $w->render('date');
  $t->fail();
}
catch(Exception $e)
{
  $t->pass('exception value caught successfully');
}