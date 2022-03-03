<?php

/**
 * @package MonPetitForfait
 * @subpackage Classe
 * @version 1.0
 * @author Dounia Nougaoui
 */

class Login{
      //error
      const login_not_exist           = "Login not exist";
      const password_not_exist        = "Password not exist ";
      const password_incorect         = "Identifiant ou mot de passe incorrect";  
      /**
       * get user
       *
       * @uses 
       * @access public
       * @param varchar $userName ,$password
      **/ 
   

    /**
        * Verification l'existance d'un user
        *
        * @uses exist($idengagement);
        * @access public
        * @param integer $user id d'un engagement
    */
        
        public static function exist ($user,$pass)
        {
            GLOBAL $db;  
            $passw=md5($pass);

            $re="select count(*) as NB from user
                where login='$user' and password='$passw'";   
                
            $db->QueryRow($re);
            $row = $db->array;
            if(intval($row['NB'])>0){
                return 1;
            }
            else {
                return -1;
            }
        }

}

?>