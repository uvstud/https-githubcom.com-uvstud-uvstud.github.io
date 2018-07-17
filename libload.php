<?php
//ieslēdz php kļuudu attelosanos
error_reporting(E_ALL);
ini_set('display_errors', '1');

//pievieno klases
require_once ("./Class/template_class.php");
//require_once ("./Class/error_class.php");
require_once ("./Class/db_class.php");

Template_class::getLibs();  // pievieno visas bilbiotekas kuras nepieciešams pieslēgt
//error_class::getErrLib();   // pievieno error atteelosanas biblioteku
$db = new db_class();

?>