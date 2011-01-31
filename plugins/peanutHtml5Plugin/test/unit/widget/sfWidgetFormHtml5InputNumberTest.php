<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$t = new lime_test();
$w = new sfWidgetFormHtml5InputNumber();

$t->like($w->render('number'), '/type="number" name="number" id="number"/', 'render widget');

$t->comment('Simple test with options');

$w->setAttribute('min', '1');
$t->like($w->render('number'), '/min="1"/', 'render min 1');

$w->setAttribute('max', '100');
$t->like($w->render('number'), '/max="100"/', 'render max 100');

$w->setAttribute('step', '2');
$t->like($w->render('number'), '/step="2"/', 'render step 2');


$t->comment('Test min and max options');
$w->setAttribute('min', '1');
$w->setAttribute('max', '-1');

try
{
  $w->render('number');
  $t->fail('min option must be inferior of max option');
}
catch(Exception $e)
{
  $t->pass('exception min caught successfully');
}

$w->setAttribute('min', '-1');
$w->setAttribute('max', '-2');

try
{
  $w->render('number');
  $t->fail('min option must be inferior of max option');
}
catch(Exception $e)
{
  $t->pass('exception max caught successfully');
}

$w->setAttribute('min', '1');
$w->setAttribute('max', '10');
$w->setAttribute('step', '11');

try
{
  $w->render('number');
  $t->fail('step option must be inferior of max option');
}
catch(Exception $e)
{
  $t->pass('exception step caught successfully');
}

$w->setAttribute('step', '10');
$w->render('number');
$t->pass( '10 and max option are equal');


$w->setAttribute('step', 'any');
$w->render('number');
$t->pass('any is a valid value for step');

$w->setAttribute('step', 'salut');
try
{
  $w->render('number');
  $t->fail('step option must be a numeric value or "any"');
}
catch(Exception $e)
{
  $t->pass('exception text caught successfully');
}


$t->comment('Replace float , for .');
$w->setAttribute('min', '1');
$w->setAttribute('max', '10');
$w->setAttribute('step', '0,1');

$t->like($w->render('number'), '/step="0.1"/', 'render step 0.1');
