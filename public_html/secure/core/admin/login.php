<?php
  
 /**
 * @package MonPetitForfait
 * @subpackage Controller
 * @version 1.0
 * @author Dounia Nougaoui
 */
/*$path_template = $_SERVER['DOCUMENT_ROOT'].'/MVC/secure/template/tpl/engagement.tpl';*/
require '../../class/common/load.php';

 $login   =(isset($_POST['uname']))?$_POST['uname']:null;
 $password=(isset($_POST['psw']))?$_POST['psw']:null;

 $user =Login::exist($login,$password);
if($user>0){
    header('Location:manageOffer.php');      
}
else if($user<0){
    header('Location:../index.php'); 

}


?>