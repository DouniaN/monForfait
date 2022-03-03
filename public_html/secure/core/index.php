<?php
  
 /**
 * @package MonPetitForfait
 * @subpackage Controller
 * @version 1.0
 * @author Dounia Nougaoui
 */


require '../class/common/load.php';
setlocale(LC_TIME, "fr_FR","French");
$date1 = date('Y-m-d');
$date  = strftime("%d %B %Y", strtotime($date1));
$smarty->assign('dateFr',$date);
$smarty->display('../template/tpl/page1.tpl');


?>