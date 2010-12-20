<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$t = new lime_test(5);
$v = new sfValidatorHtml5Email();

// Test avec un email tout simple
try
{
  $v->clean('test@peanut.fr');
  $t->pass('Pass on valid data');
}
catch (sfValidatorError $e)
{
  $t->fail('Pass on valid data');
}


$t->diag('multipe is now true');
$v->setOption('multiple', true);

// Deux emails
try
{
  $v->clean('test@peanut.fr,hello@peanut.fr');
  $t->pass('pass on valid data');
}
catch (sfValidatorError $e)
{
  $t->fail('Pass on valid data');
}

// Deux emails dont un faux

try
{
  $v->clean('test@peanut.fr,salut');
  $t->fail('Fail on invalid data');
}
catch (sfValidatorError $e)
{
  $t->pass('Fail on invalid data');
}

// Deux emails avec un array
try
{
  $t->is_deeply($v->clean('test@peanut.fr,hello@peanut.fr'), array('test@peanut.fr', 'hello@peanut.fr'));
  $t->pass('Pass on valid multiple data');
}
catch (sfValidatorError $e)
{
  $t->fail('Pass on valid multiple data');
}
