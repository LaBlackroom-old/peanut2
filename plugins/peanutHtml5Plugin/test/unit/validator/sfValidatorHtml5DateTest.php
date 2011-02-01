<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$t = new lime_test(3);
$v = new sfValidatorHtml5Date();

// Test avec une date
try
{
  $v->clean('2010-10-10');
  $t->pass('Pass on valid data');
}
catch (sfValidatorError $e)
{
  $t->fail('Pass on valid data');
}

// Test avec une valeur 'texte'
try
{
  $v->clean('texte');
  $t->fail('Fail on invalid data');
}
catch (sfValidatorError $e)
{
  $t->pass('Fail on invalid data');
}

// Test avec une valeur 'Y-d-m'
try
{
  $v->clean('2011-31-12');
  $t->fail('Fail on invalid data');
}
catch (sfValidatorError $e)
{
  $t->pass('Fail on invalid data');
}