<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$t = new lime_test(17);
$w = new sfWidgetFormHtml5Input();

$t->is($w->render('test'), '<input type="text" name="test" id="test" />', 'render tag ok');

$t->comment('Simple render tests');

$w->setOption('pattern', '[0-9]*');
$t->is($w->render('test'), '<input type="text" name="test" pattern="[0-9]*" id="test" />', 'render pattern [0-9]*');

$w->setOption('disabled', true);
$t->like($w->render('test'), '/disabled="disabled"/', 'render disabled');

$w->setOption('form', 'testForm');
$t->like($w->render('test'), '/form="testForm"/', 'render form');

$w->setOption('maxlength', '12');
$t->like($w->render('test'), '/maxlength="12"/', 'render maxlength');

$w->setOption('readonly', true);
$t->like($w->render('test'), '/readonly="readonly"/', 'render readonly');

$w->setOption('size', '12');
$t->like($w->render('test'), '/size="12"/', 'render maxlength');

$w->setOption('autocomplete', true);
$t->like($w->render('test'), '/autocomplete="on"/', 'render autocomplete');

$w->setOption('autofocus', true);
$t->like($w->render('test'), '/autofocus="autofocus"/', 'render autofocus');

$w->setOption('list', 'myList');
$t->like($w->render('test'), '/list="myList"/', 'render list');

$w->setOption('required', true);
$t->like($w->render('test'), '/required="required"/', 'render required');

$w->setOption('placeholder', 'salut');
$t->like($w->render('test'), '/placeholder="salut"/', 'render placeholder');


$t->comment('exception test');

$w->setOption('disabled', 'true');
try
{
  $w->render('test');
  $t->fail('disabled must be true or false (but not string "true")');
}
catch(Exception $e)
{
  $t->pass('exception required caught successfully');
}


$w->setOption('autocomplete', 'true');
try
{
  $w->render('test');
  $t->fail('autocomplete must be true or false (but not string "true")');
}
catch(Exception $e)
{
  $t->pass('exception autocomplete caught successfully');
}


$w->setOption('autofocus', 'true');
try
{
  $w->render('test');
  $t->fail('autofocus must be true or false (but not string "true")');
}
catch(Exception $e)
{
  $t->pass('exception autocofocus caught successfully');
}

$w->setOption('readonly', 'true');
try
{
  $w->render('test');
  $t->fail('readonly must be true or false (but not string "true")');
}
catch(Exception $e)
{
  $t->pass('exception readonly caught successfully');
}

$w->setOption('required', 'true');
try
{
  $w->render('test');
  $t->fail('required must be true or false (but not string "true")');
}
catch(Exception $e)
{
  $t->pass('exception required caught successfully');
}