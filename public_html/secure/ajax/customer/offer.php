<?php
 /**
 *
 * @package Gestion_Stock 
 * @subpackage Controller
 * @version 1.0
 * @author Dounia Nougaoui
 * @2021-06
 */
 require '../../class/common/load.php';

 $engagement = (isset($_GET['engagement']))?$_GET['engagement'] : null;
 $supplier   = (isset($_GET['supplier']))?$_GET['supplier'] : null;
 $price      = (isset($_GET['price']))?$_GET['price'] : 0;
 $offer      = (isset($_GET['offer']))?$_GET['offer'] : null;

 $list_Forfait_family       = Forfait_family::get(null);
 
 $liste_offre               = Offer::get(null,$offer,null,$supplier,$price,$engagement,null,null,1);    
 
 $tt=$liste_offre['data'];
 
echo json_encode($tt);