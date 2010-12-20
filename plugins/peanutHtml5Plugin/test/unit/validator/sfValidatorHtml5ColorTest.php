<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$t = new lime_test(3);
$v = new sfValidatorHtml5Color();

// Test avec une valeur #rrggbb
try
{
  $v->clean('#ff017d');
  $t->pass('Pass on valid data');
}
catch (sfValidatorError $e)
{
  $t->fail('Pass on valid data');
}

// Test avec une valeur 'texte'
try
{
  $v->clean('text');
  $t->fail('Fail on invalid data');
}
catch (sfValidatorError $e)
{
  $t->pass('Fail on invalid data');
}

// Test avec une valeur #rrggbb raccourci
try
{
  $v->clean('#fff');
  $t->fail('Fail on short syntax');
}
catch (sfValidatorError $e)
{
  $t->pass('Valid data');
}