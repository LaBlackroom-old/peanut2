<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$t = new lime_test(3);
$v = new sfValidatorColor();

try
{
  $v->clean('#ff017d');
  $t->pass('Pass on valid data');
}
catch (sfValidatorError $e)
{
  $t->fail('Pass on valid data');
}

try
{
  $v->clean('text');
  $t->fail('Fail on invalid data');
}
catch (sfValidatorError $e)
{
  $t->pass('Fail on invalid data');
}

try
{
  $v->clean('#fff');
  $t->fail('Fail on short syntax');
}
catch (sfValidatorError $e)
{
  $t->pass('Valid data');
}