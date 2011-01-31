<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$t = new lime_test(1);
$w = new sfWidgetFormHtml5InputWeek();

$t->like($w->render('week'), '/type="week" name="week" id="week"/', 'render widget');
