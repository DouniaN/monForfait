<?php
  
 /**
 * @package MonPetitForfait
 * @subpackage Controller
 * @version 1.0
 * @author Dounia Nougaoui
 */
/*$path_template = $_SERVER['DOCUMENT_ROOT'].'/MVC/secure/template/tpl/Client.tpl';*/
require '../class/common/load.php';

$action                = (isset($_POST['action'])) ? $_POST['action']: null;
$email                 = (isset($_POST['email'])) ? $_POST['email']: null;
$passwoprd             = (isset($_POST['password'])) ? $_POST['password']: null;
$nom                   = (isset($_POST['nom'])) ? $_POST['nom']: null;
$prenom                = (isset($_POST['prenom'])) ? $_POST['prenom']: null;
$contact               = (isset($_POST['contact'])) ? $_POST['contact']: null;
$adress                = (isset($_POST['adress'])) ? $_POST['adress']: null;
$sexe                  = (isset($_POST['sexe'])) ? $_POST['sexe']: null;



    $test=Client::add($email,$passwoprd,$nom,$prenom,$contact,$adress,$sexe);
    echo $test;




?>