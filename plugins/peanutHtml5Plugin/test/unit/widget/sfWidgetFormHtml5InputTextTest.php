<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$t = new lime_test(17);
$w = new sfWidgetFormHtml5InputText();

$t->is($w->render('test'), '<input type="text" name="test" id="test" />', 'render tag ok');

$t->comment('Simple render tests');

$w->setAttribute('pattern', '[0-9]*');
$t->is($w->render('test'), '<input pattern="[0-9]*" type="text" name="test" id="test" />', 'render pattern [0-9]*');

$w->setAttribute('disabled', 'disabled');
$t->like($w->render('test'), '/disabled="disabled"/', 'render disabled');

$w->setAttribute('form', 'testForm');
$t->like($w->render('test'), '/form="testForm"/', 'render form');

$w->setAttribute('maxlength', '12');
$t->like($w->render('test'), '/maxlength="12"/', 'render maxlength');

$w->setAttribute('readonly', 'readonly');
$t->like($w->render('test'), '/readonly="readonly"/', 'render readonly');

$w->setAttribute('size', '12');
$t->like($w->render('test'), '/size="12"/', 'render maxlength');

$w->setAttribute('autocomplete', 'on');
$t->like($w->render('test'), '/autocomplete="on"/', 'render autocomplete');

$w->setAttribute('autofocus', 'autofocus');
$t->like($w->render('test'), '/autofocus="autofocus"/', 'render autofocus');

$w->setAttribute('list', 'myList');
$t->like($w->render('test'), '/list="myList"/', 'render list');

$w->setAttribute('required', 'required');
$t->like($w->render('test'), '/required="required"/', 'render required');

$w->setAttribute('placeholder', 'salut');
$t->like($w->render('test'), '/placeholder="salut"/', 'render placeholder');


$t->comment('exception test');

$w->setAttribute('disabled', 'true');
try
{
  $w->render('test');
  $t->fail('disabled must be true or false (but not string "true")');
}
catch(Exception $e)
{
  $t->pass('exception required caught successfully');
}


$w->setAttribute('autocomplete', 'true');
try
{
  $w->render('test');
  $t->fail('autocomplete must be true or false (but not string "true")');
}
catch(Exception $e)
{
  $t->pass('exception autocomplete caught successfully');
}


$w->setAttribute('autofocus', 'true');
try
{
  $w->render('test');
  $t->fail('autofocus must be true or false (but not string "true")');
}
catch(Exception $e)
{
  $t->pass('exception autocofocus caught successfully');
}

$w->setAttribute('readonly', 'true');
try
{
  $w->render('test');
  $t->fail('readonly must be true or false (but not string "true")');
}
catch(Exception $e)
{
  $t->pass('exception readonly caught successfully');
}

$w->setAttribute('required', 'true');
try
{
  $w->render('test');
  $t->fail('required must be true or false (but not string "true")');
}
catch(Exception $e)
{
  $t->pass('exception required caught successfully');
}