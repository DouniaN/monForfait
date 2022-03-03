<?php

/**
 *  Class Client
 *
 * @package 
 * @subpackage Class
 * @version 1.0
 * @author Dounia Nougaoui
 * @copyright 2021
 */
   class Client{
      
        //error
        const client_not_exist      = "client innexistant";
        const client_deja_exist     = "client deja exist";
        const client_obligatoire    = "client Obligatoire";  
        /**
         * get client
         *
         * @uses 
         * @access public
         * @param integer $idclient 
	    **/ 

        public static function get($idclient, $client=null , $idstatus=1){
            GLOBAL $db;
            $error 	= array();
		    $return = array();
            if($idclient > 0){
                if(self::exist($idclient) <0){
                    $error[]=self::client_not_exist;
                }
               $filter="idclient=".intval($idclient);
            }
            else {
                 $filter = "idstatus = ". intval($idstatus);
            }

            if(strlen($client) >0){
                $filter .= " AND client LIKE \"%".common::datatosql($client)."%\"";
            }

            if(count($error)==0){
                $re="SELECT idclient,client,nb_month FROM client where $filter";       
                $db->Query($re);
                $result=$db->array;
                foreach($result as $row){
                    $return[]	= array (
                        'client'=>$row['client'],
                        'nb_month'  =>$row['nb_month'],
                        'id'        =>$row['idclient']
                    );
                }
            }
            return $return;
        }
        

         /**
         * post client
         *
         * @uses 
         * @access public
         * @param integer $idclient 
	    **/ 

        public static function add($email,$passwoprd,$nom,$prenom,$contact,$adress,$sexe){
            GLOBAL $db;
            $error=array();
            $return=array();
            if(count($error)==0){
                $re="insert into client(nom,prenom,sexe,adresse,numContact,email,password) 
                     values('".Common::datatosql($nom)."','".Common::datatosql($prenom)."','".Common::datatosql($sexe)."','".Common::datatosql($adress)."','".Common::datatosql($contact)."','".Common::datatosql($email)."','".Common::datatosql($passwoprd)."')";
            }
             
            $db->Insert($re);
            
        }

        /**
         * update client
         *
         * @uses 
         * @access public
         * @param integer $idclient 
	    **/ 
         
        public function update($client,$nombre_mois,$id_client){
           GLOBAL $db;

           $error  =array();
           $return =array();
           if(empty($client)){
               $error[]=self::client_obligatoire;
           }
           
           if(count($error)==0){
             $re="update client set client='".Common::datatosql($client)."',nb_month=$nombre_mois where idclient=$id_client";
             
             $db->Update($re);
           } 
        }

        /**
         * delete client
         *
         * @uses 
         * @access public
         * @param integer $idclient 
	    **/ 

        public function delete($id_client){
            GLOBAL $db;
            $error=array();
            if(empty($id_client)){
              $error[]=self::client_obligatoire;
            }
            if(count($error)==0){
                $query="delete from client where idclient=$id_client";
                $db->Delete($query);
            }

            
        }
        /**
            * Verification l'existance d'un client
            *
            * @uses exist($idclient);
            * @access public
            * @param integer $idclient id d'un client
        */
        
        public static function exist ($idclient)
        {
            GLOBAL $db;
            
            $re="select count(*) as NB from client
                where idclient=".$idclient;
                
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