<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$t = new lime_test(1);
$w = new sfWidgetFormInputColor();

$t->is($w->render('foobar'), '<input type="color" name="foobar" id="foobar" />', 'render tag ok');