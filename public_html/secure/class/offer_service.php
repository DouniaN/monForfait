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

 class Offer_service
 {
     //error
     const offer_service_not_exist      = "offer_serviceinnexistant";

    /**
	   * get offer_extra
	   *
	   * @uses 
	   * @access public
       * @param integer $idoffer identifiant offre 
	  */ 
    
    public static function get ($idoffer_service,$idservice=null,$idoffer=null,$idstatus=1)
    {
        $return=[];
        $erreur=[];
        GLOBAL $db;
        if($idoffer_service>0){
         if(self::exist($idoffer_service) <0){
           $erreur[]=self::offer_service_not_exist;
         }
          $filter="ofes.idoffer_service=".intval($idoffer_service);
        }
        else {
            $filter ="ofes.idstatus = ". intval($idstatus);
        }
        if(!empty($idoffer)){
          $filter .=" and ofes.idoffer = $idoffer";
        }
        if(count($erreur)==0){
           $re="SELECT ofes.idoffer , se.service ,st.service_type ,st.icon
           FROM offer_service ofes
           INNER JOIN service se
           on se.idservice=ofes.idservice
           INNER JOIN service_type st 
           on st.idservice_type=se.idservice_type
           WHERE $filter";
              
           $db->Query($re);
           $result=$db->array;
          for($c=0;$c<count($result);$c++)
          {
             $return[] = [
              'type'    =>$result[$c]['service_type'], 
              'service' =>$result[$c]['service'],
              'icon'    =>$result[$c]['icon']
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
    
    // POST offer Service
    public static function add($data)
    {
        // DB stuff
        GLOBAL $db;
        $error = [];
       
        $countRow=count($_POST['service']);
        
        if (count($error) == 0) {
            // Create query
            for($i=0;$i<$countRow;$i++){
              $sql = "INSERT INTO offer_service(idoffer , idservice)
              VALUES (".intval($data['idoffer']).",".intval($data['service'][$i]).")";
              
                $db->Insert($sql);
               
            }
              
            $response = [
                'response' => true,
                'status_code' => SC_POST
                
            ];
        } else {
            $response = [
                'response' => false,
                'status_code' => SC_POST_ERROR,
                'error' => $error
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
    
 