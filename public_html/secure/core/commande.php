<?php
 /**
 *
 * @package Gestion_Stock 
 * @subpackage Controller
 * @version 1.0
 * @author Dounia Nougaoui
 * @2021-06
 */
 require '../class/common/load.php';

 $id =(isset($_GET['id']))?$_GET['id'] : null;

 $list_Forfait_family       = Forfait_family::get(null);
 $list_operateur            = Supplier::get(null);
 $list_offer                = Offer::get($id);
 $list_promotion            = Offer_promotion::get(null);

  $smarty->assign([
    'list_Forfait_family'    => $list_Forfait_family['data'],
    'list_supplier'          => $list_operateur['data'],
    'list_offer'             => $list_offer['data'],
    'list_promotion'         => $list_promotion['data']
  ]); 
  
 $smarty->display('../template/tpl/commande.tpl');
 
  
 


//echo json_encode($result);