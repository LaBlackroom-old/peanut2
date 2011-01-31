<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$t = new lime_test(1);
$w = new sfWidgetFormHtml5InputColor();

$t->like($w->render('color'), '/type="color" name="color" id="color"/', 'render widget');