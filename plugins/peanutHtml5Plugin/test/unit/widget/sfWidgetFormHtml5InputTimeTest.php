<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$t = new lime_test(1);
$w = new sfWidgetFormHtml5InputTime();

$t->like($w->render('time'), '/type="time" name="time" id="time"/', 'render widget');
