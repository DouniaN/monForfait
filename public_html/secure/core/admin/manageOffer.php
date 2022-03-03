<?php
  
 /**
 * @package MonPetitForfait
 * @subpackage Controller
 * @version 1.0
 * @author Dounia Nougaoui
 */
/*$path_template = $_SERVER['DOCUMENT_ROOT'].'/MVC/secure/template/tpl/engagement.tpl';*/
require '../../class/common/load.php';

$list_offer            = Offer::get(null);

$list_supplier         = Supplier::get(null);
$list_engagement       = Engagement::get(null);
$list_Forfait_family   = Forfait_family::get(null);
$Service_Type          = Service_Type::get(null);
$action                = (isset($_POST['action']))?$_POST['action']:null; 
$idservice_type        = (isset($_GET['idServicetype']))?$_GET['idServicetype']:null; 
$idservice             = (isset($_POST['service']))?$_POST['service']:null; 
$idoffer               = (isset($_POST['idoffer']))?$_POST['idoffer']:null;


if (isset($_POST)){
    $data = $_POST;
    
}
$message=null;

switch($action){

    case 'add':
        $Addoffre = Offer::add($data);
        $id=$Addoffre['idoffer'];
      
        if($Addoffre['response']==true){
            $message='add_OK';
            $smarty->assign('id',$id);
        }
        //vider le formulaire apres post
        $_POST = null;
    break;

    case 'getTypeService':
        $Service_Type = service::get(null,$idservice_type,1);
    break;  

    case 'addServiceOffer':
         $offer_service = Offer_service::add($data);
         $message       = 'addOffreOK';
    break;
}

$smarty->assign([
   'list_supplier'=>$list_supplier['data'],
   'list_engagement'=>$list_engagement,
   'list_Forfait_family'=>$list_Forfait_family['data'],
   'Service_Type'=>$Service_Type['data'],
   'list_offer'=>$list_offer['data'],
   'message' =>$message
   
]);

$smarty->display('../../template/tpl/manage.tpl');


?>