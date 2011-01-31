<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$t = new lime_test(1);
$w = new sfWidgetFormHtml5InputDateTime();

$t->like($w->render('datetime'), '/type="datetime" name="datetime" id="datetime"/', 'render widget');