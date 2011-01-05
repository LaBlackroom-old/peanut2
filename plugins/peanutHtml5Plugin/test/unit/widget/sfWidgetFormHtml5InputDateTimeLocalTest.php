<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$t = new lime_test(1);
$w = new sfWidgetFormHtml5InputDateTimeLocal();

$t->is($w->render('datetimelocal'), '<input type="datetime-local" name="datetimelocal" id="datetimelocal" />', 'render tag ok');
