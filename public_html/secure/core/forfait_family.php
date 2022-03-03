<?php
  
 /**
 * @package MonPetitForfait
 * @subpackage Controller
 * @version 1.0
 * @author Dounia Nougaoui
 */
/*$path_template = $_SERVER['DOCUMENT_ROOT'].'/MVC/secure/template/tpl/engagement.tpl';*/
require '../class/common/load.php';



$list_Forfait_family       = Forfait_family::get(null);

 print_r($list_Forfait_family['data']) ;






?>