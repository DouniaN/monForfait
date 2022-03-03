<?php

/**
 *  Class family
 *
 * @package 
 * @subpackage Class
 * @version 1.0
 * @author Dounia Nougaoui
 * @copyright 2021
 */

 class family 
 {
     //error
     const family_not_exist      = "family innexistant";
     const family_deja_exist     = "family deja exist";
     const family_obligatoire    = "family Obligatoire";  
     const Supplier_Obligatoire  = "supplier Obligatoire";
    /**
	   * get family
	   *
	   * @uses 
	   * @access public
       * @param integer $idfamily id d'un family 
	  */ 
    
    public static function get ($idfamily,$famil=null,$idsupplier=null,$idstatus=1)
    {
        $return=[];
        $erreur=[];
        GLOBAL $db;
        if($idfamily>0){
         if(self::exist($idfamily) <0){
           $erreur[]=self::family_not_exist;
         }
          $filter="idfamily=".intval($idfamily);
        }
        else {
            $filter = " idstatus = ". intval($idstatus);
        }
        if(count($erreur)==0){
           $re="SELECT family,idfamily,idsupplier FROM family where $filter";       
           $db->Query($re);
           $result=$db->array;
          for($c=0;$c<count($result);$c++)
          {
             $return[] = [
              'idfamily'    =>intval($result[$c]['idfamily']),
              'family'      =>$result[$c]['family'],
              'idsupplier'  =>intval($result[$c]['idsupplier']),
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
    
   // POST family
    public static function add($data)
    {
        // DB stuff
        GLOBAL $db;

        $error = [];

        if (empty($data['family'])) {
            $error[] =self::family_obligatoire;
        }
        if (empty($data['idsupplier'])) {
            $error[] =self::Supplier_Obligatoire;
        }
        if (count($error) == 0) {
            // Create query
            $sql = "INSERT INTO family (family, idsupplier) 
                    VALUES ('" . Common::datatosql($data['family']) . "', " . intval($data['idsupplier']) . ")";
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
     
    public static function delete($id_family)
    {
        // DB stuff
        GLOBAL $db;

        $error = [];

        // exist id_family
        if (self::exist($id_family)<1) {
            $error[] = self::family_not_exist;
        }

        // if no error let's go to query
        if (count($error) == 0) {
            $query = "UPDATE family 
                      SET idstatus = 2
                      WHERE idfamily = ".intval($id_family);
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
    public static function update($id_family, $data)
    {
        // DB stuff
        GLOBAL $db;
        $error  = [];
        $filter = '';
        // exist data and param , retention filter
        if (self::exist($id_family)<1) {
            $error[] = self::family_not_exist;
        }

        if (count($error) == 0) {
            // retention filter
            if (isset($data['family'])) {
                $filter = " name_family = '".Common::datatosql($data['family'])."'";
            }
            
            // Create query
            $sql = "UPDATE family 
                    SET " .$filter. " 
                    WHERE id_family = ".intval($id_family);

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
    
 