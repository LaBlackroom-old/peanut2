<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$t = new lime_test(1);
$w = new sfWidgetFormHtml5InputDate();

$t->is($w->render('date'), '<input type="date" name="date" id="date" />', 'render tag ok');
