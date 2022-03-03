<?php

/**
 *  Class Supplier
 *
 * @package 
 * @subpackage Class
 * @version 1.0
 * @author Dounia Nougaoui
 * @copyright Juin 2021 
 */
   class Supplier{
      
        //error
        const Supplier_not_exist      = "Supplier innexistant";
        const Supplier_deja_exist     = "Supplier deja exist";
        const Supplier_obligatoire    = "Supplier Obligatoire";  
        /**
         * get Supplier
         *
         * @uses 
         * @access public
         * @param integer $idSupplier ,idfamily(Opérateurs de téléphonie mobile OU Internet)
	    **/ 

        public static function get($idSupplier, $Supplier=null ,$idfamily=null, $idstatus=1){
            GLOBAL $db;
            $error 	= array();
		    $return = array();
            if($idSupplier > 0){
                if(self::exist($idSupplier) <0){
                    $error[]=self::Supplier_not_exist;
                }
               $filter="idSupplier=".intval($idSupplier);
            }
            else {
                 $filter = "idstatus = ". intval($idstatus);
            }

            if($idfamily >0){
                $filter .= " AND idfamily = ".intval($idfamily);
            }

            if(strlen($Supplier) >0){
                $filter .= " AND supplier LIKE \"%".common::datatosql($Supplier)."%\"";
            }

            if(count($error)==0){
                $re="SELECT idsupplier,supplier,idfamily,logo FROM supplier where $filter";       
                $db->Query($re);
                $result=$db->array;
                foreach($result as $row){
                    $return[]	= array (
                        'supplier'  =>$row['supplier'],
                        'logo'      =>$row['logo'],
                        'family'    =>$row['idfamily'],
                        'id'        =>$row['idsupplier']
                    );
                }

                $response = [
                    'response' => true,
                    'status_code' => SC_GET,
                    'data' => $return
                    
                  ];
            }
            else{
                $response = [
                    'response' => true,
                    'status_code' => SC_GET,
                    'data' => $erreur
                  ];
            }
            return $response;
        }
        

         /**
         * post Supplier
         *
         * @uses 
         * @access public
         * @param integer $idSupplier 
	    **/ 

        public static function add($supplier,$logo){
            GLOBAL $db;
            $error=array();
            $return=array();

            if(empty($supplier)){
                 $error[]=self::Supplier_obligatoire;
            }
    
            if(count($error)==0){
                $re="insert into supplier(supplier,logo)  
                     values('".Common::datatosql($supplier)."','".Common::datatosql($logo)."')";
            }
            
            $db->Insert($re);
            
        }

        /**
         * update Supplier
         *
         * @uses 
         * @access public
         * @param integer $idSupplier 
	    **/ 
         
        public function update($supplier,$logo,$id_supplier){
           GLOBAL $db;

           $error  =array();
           $return =array();
           if(empty($supplier)){
               $error[]=self::Supplier_obligatoire;
           }
           
           if(count($error)==0){
             $re="update supplier set supplier='".Common::datatosql($supplier)."',logo='".Common::datatosql($logo)."' where idsupplier=$id_supplier";
             
             $db->Update($re);
           } 
        }

        /**
         * delete Supplier
         *
         * @uses 
         * @access public
         * @param integer $idSupplier 
	    **/ 

        public function delete($id_supplier){
            GLOBAL $db;
            $error=array();
            if(empty($id_supplier)){
              $error[]=self::Supplier_obligatoire;
            }
            if(count($error)==0){
                $query="delete from supplier where idsupplier=$id_supplier";
                $db->Delete($query);
            }

            
        }
        /**
            * Verification l'existance d'un Supplier
            *
            * @uses exist($idSupplier);
            * @access public
            * @param integer $idSupplier id d'un Supplier
        */
        
        public static function exist ($idSupplier)
        {
            GLOBAL $db;
            
            $re="select count(*) as NB from Supplier
                where idSupplier=".$idSupplier;
                
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