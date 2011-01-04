<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$t = new lime_test(1);
$w = new sfWidgetFormHtml5InputNumber();

$t->is($w->render('number'), '<input type="number" name="number" id="number" />', 'render tag ok');