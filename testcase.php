<?php 
require_once  'vendor/autoload.php';
use Xform\impls\Textinput;
use Xform\impls\FormGen;
use Xform\impls\SmartyRender;

$xform = new FormGen(new SmartyRender());

$textinput = new Textinput("textinput.tpl", "hello", "hello");

$xform->addInputElement($textinput);

var_dump($xform->genForm());