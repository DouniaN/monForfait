<?php

/**
 *  Class offer_extra
 *
 * @package 
 * @subpackage Class
 * @version 1.0
 * @author Dounia Nougaoui
 * @copyright 2021
 */

 class Offer_extra 
 {
     //error
     const offer_extra_not_exist      = "offer_extra innexistant";

    /**
	   * get offer_extra
	   *
	   * @uses 
	   * @access public
       * @param integer $idoffer id d'un family 
	  */ 
    
    public static function get ($idoffer_extra,$idoffer=null,$idstatus=1)
    {
        $return=[];
        $erreur=[];
        GLOBAL $db;
        if($idoffer_extra>0){
         if(self::exist($idoffer_extra) <0){
           $erreur[]=self::offer_extra_not_exist;
         }
          $filter="idoffer_extra=".intval($idoffer_extra);
        }
        else {
            $filter = " idstatus = ". intval($idstatus);
        }
        if(!empty($idoffer)){
          $filter .=" and idoffer = $idoffer";
        }
        if(count($erreur)==0){
           $re="SELECT ofex.idoffer_extra,ext.extra,ext.logo,ofex.idextra,ofex.idoffer 
                FROM offer_extra ofex 
                left JOIN extra ext 
                on ext.idextra=ofex.idextra
                where $filter";
               
           $db->Query($re);
           $result=$db->array;
          for($c=0;$c<count($result);$c++)
          {
             $return[] = [
              'idoffer'            =>intval($result[$c]['idoffer']),
              'extra'              =>$result[$c]['extra'],
              'idextra'            =>$result[$c]['idextra']
             ];
          }
          $response = [
            'response' => true,
            'status_code' => SC_GET,
            'data' => $return,
          ];
        }
        else{
           $response = [
            'response' => false,
            'status_code' => SC_GET_ERROR,
            'data' => $erreur,
          ];
        }
       return $response;
    }
    
  
       
    /**
	   * Verification l'existance d'un family
	   *
	   * @uses exist($idoffer);
	   * @access public
    * @param integer $idservcie id d'un family 
	  */
    public static function exist ($idoffer)
    {
        GLOBAL $db;
        
        $re="select count(*) as NB from family
             where idoffer=".$idoffer;
             
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
    
 