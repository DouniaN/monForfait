<?php

/**
 *  Class Statistique
 *
 * @package 
 * @subpackage Class
 * @version 1.0
 * @author Dounia Nougaoui
 * @copyright 2021
 */
   class Charts{
      
        //error
     
        /**
         * Comparer les operateurs dans les trois derniers mois (Maroc TELECOM , INWI ,Orange)!
         *
         * @ligne Commande 
         * @access public
         * @param integer 
	    **/ 

        public static function get($idSupplier,$month,$year){
            GLOBAL $db;
            $error 	= array();
		    $return = array();
      
            if(count($error)==0){
                $re="SELECT
                        COUNT(*) as nbrCMD
                        FROM
                            ligne_commande cd
                        INNER JOIN offer of ON
                            of.idoffer = cd.idoffer
                        INNER JOIN commande cmd ON
                            cmd.idcommande = cd.idcommade
                        WHERE
                        of.idsupplier = $idSupplier AND 
                        MONTH(cmd.date_cmd) = $month && YEAR(cmd.date_cmd) = $year";       
                $db->Query($re);
                $result = $db->array;
                foreach($result as $row){
                    $return[]	= array (
                         'Count_cmd'         =>$row['nbrCMD']
                         
                    );
                }
            }
            return $return;
        }
        
   
}  
   
?>