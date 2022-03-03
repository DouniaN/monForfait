<?php
  
 /**
 * @package MonPetitForfait
 * @subpackage Controller
 * @version 1.0
 * @author Dounia Nougaoui
 */
/*$path_template = $_SERVER['DOCUMENT_ROOT'].'/MVC/secure/template/tpl/Supplier.tpl';*/

require '../class/common/load.php';
$action                = (isset($_GET['action'])) ? $_GET['action']: null;
$supplier              = (isset($_POST['supplier'])) ? $_POST['supplier']: null;
$logo                  = (isset($_POST['logo'])) ? $_POST['logo']: null;
$id_supplier_edit      = (isset($_POST['id'])) ? $_POST['id']:null;
$id_supplier_delete    = (isset($_GET['id']))?$_GET['id']:null;

switch($action){

     case 'add_ok':
       Supplier::add($supplier,$logo); 
     break;
     
     case 'edit_ok': 
         Supplier::update($supplier,$logo,$id_supplier_edit); 
     break;

     case 'delete_ok':
          Supplier::delete($id_supplier_delete);
     break;     

}   

$liste_supplier = Supplier::get(null);
$smarty->assign([
     'liste_supplier' => $liste_supplier,
     'message' =>'Fournisseur ajoutée avec succés'
]);
$smarty->display('../template/tpl/Supplier.tpl');

?> 