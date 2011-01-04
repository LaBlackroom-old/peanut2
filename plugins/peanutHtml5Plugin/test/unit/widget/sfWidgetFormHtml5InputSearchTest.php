<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$t = new lime_test(1);
$w = new sfWidgetFormHtml5InputSearch();

$t->is($w->render('search'), '<input type="search" name="search" id="search" />', 'render tag ok');