<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$t = new lime_test(1);
$w = new sfWidgetFormHtml5InputUrl();

$t->is($w->render('url'), '<input type="url" name="url" id="url" />', 'render tag ok');