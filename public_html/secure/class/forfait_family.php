<?php

/**
 *  Class forfait_family
 *
 * @package 
 * @subpackage Class
 * @version 1.0
 * @author Dounia Nougaoui
 * @copyright 2021
 */

 class Forfait_family 
 {
     //error
     const forfait_family_not_exist      = "Forfait_family innexistant";

    /**
	   * get forfait_family
	   *
	   * @uses 
	   * @access public
       * @param integer $idfamily id d'un family 
	  */ 
    
    public static function get ($idforfait_family,$idfamily=null,$forfait_family=null,$idstatus=1)
    {
        $return=[];
        $erreur=[];
        GLOBAL $db;
        if($idfamily>0){
         if(self::exist($idforfait_family) <0){
           $erreur[]=self::forfait_family_not_exist;
         }
          $filter="idforfait_family=".intval($idforfait_family);
        }
        else {
            $filter = " idstatus = ". intval($idstatus);
        }
        if(!empty($idfamily)){
          $filter .=" and idfamily = $idfamily";
        }
        if(count($erreur)==0){
           $re="SELECT idforfait_family,forfait,idfamily FROM forfait_family where $filter";
               
           $db->Query($re);
           $result=$db->array;
          for($c=0;$c<count($result);$c++)
          {
             $return[] = [
              'idfamily'              =>intval($result[$c]['idfamily']),
              'forfait'               =>$result[$c]['forfait'],
              'idforfait_family'      =>$result[$c]['idforfait_family']
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
	   * @uses exist($idfamily);
	   * @access public
    * @param integer $idservcie id d'un family 
	  */
    public static function exist ($idfamily)
    {
        GLOBAL $db;
        
        $re="select count(*) as NB from family
             where idfamily=".$idfamily;
             
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
    
 