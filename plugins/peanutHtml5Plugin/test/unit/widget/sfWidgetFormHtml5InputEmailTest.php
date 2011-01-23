<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$t = new lime_test(3);
$w = new sfWidgetFormHtml5InputEmail();

$t->is($w->render('email'), '<input type="email" name="email" id="email" />', 'render tag ok');

$w->setAttribute('multiple', true);
$t->like($w->render('email'), '/multiple="multiple"/', 'render multiple');

$t->like($w->render('email', array('test@peanut.fr', 'salut@peanut.fr')), '/value="test@peanut.fr,salut@peanut.fr"/', 'render multiple');