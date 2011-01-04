<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$t = new lime_test(1);
$w = new sfWidgetFormHtml5InputTel();

$t->is($w->render('tel'), '<input type="tel" name="tel" id="tel" />', 'render tag ok');