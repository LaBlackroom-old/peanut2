<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$t = new lime_test(3);
$w = new sfWidgetFormHtml5InputTel();

$t->is($w->render('tel'), '<input type="tel" name="tel" id="tel" />', 'render tag ok');

$t->comment('Simple test with options');
$w->setOption('pattern', '[0-9]*');
$t->is($w->render('tel'), '<input type="tel" name="tel" pattern="[0-9]*" id="tel" />', 'render pattern [0-9]*');

$w->setOption('size', '10');
$t->like($w->render('tel'), '/size="10"/', 'render size 10');