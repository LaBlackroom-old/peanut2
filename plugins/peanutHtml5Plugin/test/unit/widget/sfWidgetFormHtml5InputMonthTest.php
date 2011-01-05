<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$t = new lime_test(1);
$w = new sfWidgetFormHtml5InputMonth();

$t->is($w->render('month'), '<input type="month" name="month" id="month" />', 'render tag ok');
