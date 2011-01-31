<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$t = new lime_test(1);
$w = new sfWidgetFormHtml5InputMonth();

$t->like($w->render('month'), '/type="month" name="month" id="month"/', 'render widget');
