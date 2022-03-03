<?php

/**
 *  Class service
 *
 * @package 
 * @subpackage Class
 * @version 1.0
 * @author Dounia Nougaoui
 * @copyright 2021
 */

 class service 
 {
     //error
     const service_not_exist      = "Servcie innexistant";
     const service_deja_exist     = "Service deja exist";
     const service_obligatoire    = "Service Obligatoire";  
     const Division_Obligatoire   = "Division Obligatoire";
    /**
	   * get service
	   *
	   * @uses 
	   * @access public
       * @param integer $idservcie id d'un service 
	  */ 
    
    public static function get ($idservice,$idservice_type=null,$idstatus=1)
    {
        $return=[];
        $erreur=[];
        GLOBAL $db;
        if($idservice>0){
         if(self::exist($idservice) <0){
           $erreur[]=self::service_not_exist;
         }
          $filter="idservice=".intval($idservice);
        }
        else {
            $filter = " idstatus = ". intval($idstatus);
        }
        if($idservice_type>0){
            $filter .= " and idservice_type = ".intval($idservice_type);
        }
        if(count($erreur)==0){
           $re="SELECT service,idservice,idservice_type FROM service where $filter"; 
                 
           $db->Query($re);
           $result=$db->array;
          for($c=0;$c<count($result);$c++)
          {
             $return[] = [
              'idservice'   =>intval($result[$c]['idservice']),
              'service'     =>$result[$c]['service'],
              'idservice_type'    =>intval($result[$c]['idservice_type']),
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
    
   // POST Service
    public static function add($data)
    {
        // DB stuff
        GLOBAL $db;

        $error = [];

        if (empty($data['service'])) {
            $error[] =self::service_obligatoire;
        }
        if (empty($data['division'])) {
            $error[] =self::Division_Obligatoire;
        }
        if (count($error) == 0) {
            // Create query
            $sql = "INSERT INTO service (name_service, id_division) 
                    VALUES ('" . Common::datatosql($data['service']) . "', " . intval($data['division']) . ")";
            $id = $db->Insert($sql);
            $response = [
                'response' => true,
                'status_code' => SC_POST,
                'idcurrency' => $id
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
     
     /**** delete ****/
     
    public static function delete($id_service)
    {
        // DB stuff
        GLOBAL $db;

        $error = [];

        // exist id_Service
        if (self::exist($id_service)<1) {
            $error[] = self::service_not_exist;
        }

        // if no error let's go to query
        if (count($error) == 0) {
            $query = "UPDATE service 
                      SET idstatus = 2
                      WHERE id_service = ".intval($id_service);
            $db->Update($query);
            $response = [
                'response'    => true,
                'status_code' => SC_DELETE
            ];
        } else {
            $response = [
                'response' => false,
                'status_code' => SC_DELETE_ERROR,
                'error' => $error
            ];
        }
        return $response;
    }
    
    /**** update ****/
    public static function update($id_service, $data)
    {
        // DB stuff
        GLOBAL $db;
        $error  = [];
        $filter = '';
        // exist data and param , retention filter
        if (self::exist($id_service)<1) {
            $error[] = self::service_not_exist;
        }

        if (count($error) == 0) {
            // retention filter
            if (isset($data['service'])) {
                $filter = " name_service = '".Common::datatosql($data['service'])."'";
            }
            
            // Create query
            $sql = "UPDATE service 
                    SET " .$filter. " 
                    WHERE id_service = ".intval($id_service);

            $db->Update($sql);
            $response = [
                'response' => true,
                'status_code' => SC_PUT
            ];
        } else {
            $response = [
                'response' => false,
                'status_code' => SC_PUT_ERROR,
                'error' => $error
            ];
        }
        return $response;
    }
       
    /**
	   * Verification l'existance d'un service
	   *
	   * @uses exist($idservice);
	   * @access public
    * @param integer $idservcie id d'un service 
	  */
    public static function exist ($idservice)
    {
        GLOBAL $db;
        
        $re="select count(*) as NB from service
             where id_service=".$idservice;
             
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
    
 