<?php

/**
 *  Class service_type
 *
 * @package 
 * @subpackage Class
 * @version 1.0
 * @author Dounia Nougaoui
 * @copyright 2021
 */

 class Service_Type
 {
     //error
     const service_type_not_exist      = "Servcie_type innexistant";
     const service_type_deja_exist     = "service_type deja exist";
     const service_type_obligatoire    = "service_type Obligatoire";  
    /**
	   * get service_type
	   *
	   * @uses 
	   * @access public
       * @param integer $idservcie id d'un service_type 
	  */ 
    
    public static function get ($idservice_type,$service_type=null,$idstatus=1)
    {
        $return=[];
        $erreur=[];
        GLOBAL $db;
        if($idservice_type>0){
         if(self::exist($idservice_type) <0){
           $erreur[]=self::service_type_not_exist;
         }
          $filter="idservice_type=".intval($idservice_type);
        }
        else {
            $filter = " idstatus = ". intval($idstatus);
        }
        if(count($erreur)==0){
           $re="SELECT service_type,idservice_type,service_type,unity FROM service_type where $filter";       
           $db->Query($re);
           $result=$db->array;
          for($c=0;$c<count($result);$c++)
          {
             $return[] = [
              'idservice_type'   =>intval($result[$c]['idservice_type']),
              'service_type'     =>$result[$c]['service_type'],
              'unity'            =>$result[$c]['unity'],
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
    
   // POST service_type
    public static function add($data)
    {
        // DB stuff
        GLOBAL $db;

        $error = [];

        if (empty($data['service_type'])) {
            $error[] =self::service_type_obligatoire;
        }
        
        if (count($error) == 0) {
            // Create query
            $sql = "INSERT INTO service_type (service_type, unity) 
                    VALUES ('" . Common::datatosql($data['service_type']) . "', " .$data['unity'] . ")";
            $id = $db->Insert($sql);
            $response = [
                'response' => true,
                'status_code' => SC_POST,
                'id' => $id
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
     
    public static function delete($id_service_type)
    {
        // DB stuff
        GLOBAL $db;

        $error = [];

        // exist id_service_type
        if (self::exist($id_service_type)<1) {
            $error[] = self::service_type_not_exist;
        }

        // if no error let's go to query
        if (count($error) == 0) {
            $query = "UPDATE service_type 
                      SET idstatus = 2
                      WHERE idservice_type = ".intval($id_service_type);
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
    public static function update($id_service_type, $data)
    {
        // DB stuff
        GLOBAL $db;
        $error  = [];
        $filter = '';
        // exist data and param , retention filter
        if (self::exist($id_service_type)<1) {
            $error[] = self::service_type_not_exist;
        }

        if (count($error) == 0) {
            // retention filter
            if (isset($data['service_type'])) {
                $filter = "service_type = '".Common::datatosql($data['service_type'])."'";
            }
            
            // Create query
            $sql = "UPDATE service_type 
                    SET " .$filter. " 
                    WHERE id_service_type = ".intval($id_service_type);

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
	   * Verification l'existance d'un service_type
	   *
	   * @uses exist($idservice_type);
	   * @access public
    * @param integer $idservcie id d'un service_type 
	  */
    public static function exist ($idservice_type)
    {
        GLOBAL $db;
        
        $re="select count(*) as NB from service_type
             where idservice_type=".$idservice_type;
             
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
    
 