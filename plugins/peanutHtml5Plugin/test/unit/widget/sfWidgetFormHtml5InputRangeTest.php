<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$t = new lime_test(1);
$w = new sfWidgetFormHtml5InputRange();

$t->is($w->render('range'), '<input type="range" name="range" id="range" />', 'render tag ok');