<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$t = new lime_test(1);
$w = new sfWidgetFormHtml5InputPassword();

$t->is($w->render('password'), '<input type="password" name="password" id="password" />', 'render tag ok');