<?php
  
 /**
 * @package MonPetitForfait
 * @subpackage Controller
 * @version 1.0
 * @author Dounia Nougaoui
 */
/*$path_template = $_SERVER['DOCUMENT_ROOT'].'/MVC/secure/template/tpl/engagement.tpl';*/
require '../../class/common/load.php';


$action                = (isset($_GET['action']))?$_GET['action']:null; 
$idservice_type        = (isset($_GET['idServicetype']))?$_GET['idServicetype']:null;
$idoffer               = (isset($_GET['idoffer']))?$_GET['idoffer']:null; 
switch($action){

    case 'getTypeService':
        $Service_Type = service::get(null,$idservice_type,1);
        echo json_encode($Service_Type['data']);
    break; 
    
    case 'getServicesOffre':
        $liste_services  = Offer_service::get($idoffer_service=null,$idservice=null,$idoffer);
        echo json_encode($liste_services['data']);
    break;    
}





?>