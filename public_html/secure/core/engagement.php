<?php
  
 /**
 * @package MonPetitForfait
 * @subpackage Controller
 * @version 1.0
 * @author Dounia Nougaoui
 */
/*$path_template = $_SERVER['DOCUMENT_ROOT'].'/MVC/secure/template/tpl/engagement.tpl';*/
require '../class/common/load.php';

$action                = (isset($_GET['action'])) ? $_GET['action']: null;
$engagement            = (isset($_POST['engagement'])) ? $_POST['engagement']: null;
$nombre_mois           = (isset($_POST['nbrMois'])) ? $_POST['nbrMois']: null;
$id_engagement_edit    = (isset($_POST['id'])) ? $_POST['id']:null;
$id_engagement_delete  =(isset($_GET['id']))?$_GET['id']:null;
switch($action){

  case 'add_ok':
    Engagement::add($engagement,$nombre_mois);
    break;

  case 'edit_ok':
    Engagement::update($engagement,$nombre_mois,$id_engagement_edit);
    break;

  case 'delete_ok':
   
     Engagement::delete($id_engagement_delete);
    break;

  default :
    $list_engagement       = Engagement::get(null);

    $smarty->assign([
        'listEngagement'    => $list_engagement,
        'message'			=>'Engagement créé avec succès'
    ]);  
     $smarty->display('../template/tpl/engagement.tpl');
  break;
}



?>