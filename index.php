<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('/home/ananya/Documents/codes/EMS/lib/smtemplate.php');
$tpl = new SMTemplate();
$tpl->render('register', $data=array());

?>
