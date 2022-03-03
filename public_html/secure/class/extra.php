<?php

/**
 *  Class extra
 *
 * @package 
 * @subpackage Class
 * @version 1.0
 * @author Dounia Nougaoui
 * @copyright 2021
 */

 class extra 
 {
     //error
     const extra_not_exist       = "extra innexistant";
     const extra_deja_exist      = "extra deja exist";
     const extra_obligatoire     = "extra Obligatoire";  
     const Supplier_Obligatoire  = "supplier Obligatoire";
    /**
	   * get extra
	   *
	   * @uses 
	   * @access public
       * @param integer $idextra id d'un extra 
	  */ 
    
    public static function get ($idextra,$extra=null,$idstatus=1)
    {
        $return=[];
        $erreur=[];
        GLOBAL $db;
        if($idextra>0){
         if(self::exist($idextra) <0){
           $erreur[]=self::extra_not_exist;
         }
          $filter="idextra=".intval($idextra);
        }
        else {
            $filter = " idstatus = ". intval($idstatus);
        }
        if(count($erreur)==0){
           $re="SELECT extra,idextra,logo FROM extra where $filter";       
           $db->Query($re);
           $result=$db->array;
          for($c=0;$c<count($result);$c++)
          {
             $return[] = [
              'idextra'    =>intval($result[$c]['idextra']),
              'extra'      =>$result[$c]['extra'],
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
    
   // POST extra
    public static function add($data)
    {
        // DB stuff
        GLOBAL $db;

        $error = [];

        if (empty($data['extra'])) {
            $error[] =self::extra_obligatoire;
        }
        if (empty($data['idsupplier'])) {
            $error[] =self::Supplier_Obligatoire;
        }
        if (count($error) == 0) {
            // Create query
            $sql = "INSERT INTO extra (extra, idsupplier) 
                    VALUES ('" . Common::datatosql($data['extra']) . "', " . intval($data['idsupplier']) . ")";
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
     
    public static function delete($id_extra)
    {
        // DB stuff
        GLOBAL $db;

        $error = [];

        // exist id_extra
        if (self::exist($id_extra)<1) {
            $error[] = self::extra_not_exist;
        }

        // if no error let's go to query
        if (count($error) == 0) {
            $query = "UPDATE extra 
                      SET idstatus = 2
                      WHERE idextra = ".intval($id_extra);
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
    public static function update($id_extra, $data)
    {
        // DB stuff
        GLOBAL $db;
        $error  = [];
        $filter = '';
        // exist data and param , retention filter
        if (self::exist($id_extra)<1) {
            $error[] = self::extra_not_exist;
        }

        if (count($error) == 0) {
            // retention filter
            if (isset($data['extra'])) {
                $filter = " name_extra = '".Common::datatosql($data['extra'])."'";
            }
            
            // Create query
            $sql = "UPDATE extra 
                    SET " .$filter. " 
                    WHERE id_extra = ".intval($id_extra);

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
	   * Verification l'existance d'un extra
	   *
	   * @uses exist($idextra);
	   * @access public
    * @param integer $idservcie id d'un extra 
	  */
    public static function exist ($idextra)
    {
        GLOBAL $db;
        
        $re="select count(*) as NB from extra
             where idextra=".$idextra;
             
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
    
 