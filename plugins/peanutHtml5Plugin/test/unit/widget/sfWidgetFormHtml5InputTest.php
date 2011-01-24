<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$t = new lime_test();

$t->comment('render default input');
$w = new sfWidgetFormHtml5Input();
$t->is($w->render('test'), '<input type="text" name="test" id="test" />', 'render tag ok');




$t->comment('simple test with html5 attributes');

$w->setAttribute('accesskey', array('a', 'b', 'c'));
$t->like($w->render('test'), '/accesskey="a b c"/', 'render accesskey');

$w->setAttribute('class', 'myClass');
$t->like($w->render('test'), '/class="myClass"/', 'render class');

$w->setAttribute('contenteditable', 'true');
$t->like($w->render('test'), '/contenteditable="true"/', 'render contenteditable');

$w->setAttribute('contextmenu', 'myContext');
$t->like($w->render('test'), '/contextmenu="myContext"/', 'render contextmenu');

$w->setAttribute('dir', 'ltr');
$t->like($w->render('test'), '/dir="ltr"/', 'render dir');

$w->setAttribute('draggable', 'true');
$t->like($w->render('test'), '/draggable="true"/', 'render draggable');

$w->setAttribute('dropzone', 'copy');
$t->like($w->render('test'), '/dropzone="copy"/', 'render dropzone');

$w->setAttribute('hidden', 'hidden');
$t->like($w->render('test'), '/hidden="hidden"/', 'render hidden');

$w->setAttribute('lang', 'fr_FR');
$t->like($w->render('test'), '/lang="fr_FR"/', 'render lang');

$w->setAttribute('spellcheck', 'true');
$t->like($w->render('test'), '/spellcheck="true"/', 'render spellcheck');

$w->setAttribute('style', 'myStyle');
$t->like($w->render('test'), '/style="myStyle"/', 'render style');

$w->setAttribute('tabindex', 1);
$t->like($w->render('test'), '/tabindex="1"/', 'render tabindex');

$w->setAttribute('title', 'myTitle');
$t->like($w->render('test'), '/title="myTitle"/', 'render title');