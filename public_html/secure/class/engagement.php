<?php

/**
 *  Class Engagement
 *
 * @package 
 * @subpackage Class
 * @version 1.0
 * @author Dounia Nougaoui
 * @copyright 2021
 */
   class Engagement{
      
        //error
        const engagement_not_exist      = "Engagement innexistant";
        const engagement_deja_exist     = "Engagement deja exist";
        const engagement_obligatoire    = "Engagement Obligatoire";  
        /**
         * get engagement
         *
         * @uses 
         * @access public
         * @param integer $idengagement 
	    **/ 

        public static function get($idengagement, $engagement=null , $idstatus=1){
            GLOBAL $db;
            $error 	= array();
		    $return = array();
            if($idengagement > 0){
                if(self::exist($idengagement) <0){
                    $error[]=self::engagement_not_exist;
                }
               $filter="idengagement=".intval($idengagement);
            }
            else {
                 $filter = "idstatus = ". intval($idstatus);
            }

            if(strlen($engagement) >0){
                $filter .= " AND engagement LIKE \"%".common::datatosql($engagement)."%\"";
            }

            if(count($error)==0){
                $re="SELECT idengagement,engagement,nb_month FROM engagement where $filter";       
                $db->Query($re);
                $result=$db->array;
                foreach($result as $row){
                    $return[]	= array (
                        'engagement'=>$row['engagement'],
                        'nb_month'  =>$row['nb_month'],
                        'id'        =>$row['idengagement']
                    );
                }
            }
            return $return;
        }
        

         /**
         * post engagement
         *
         * @uses 
         * @access public
         * @param integer $idengagement 
	    **/ 

        public static function add($engagement,$nombre_mois){
            GLOBAL $db;
            $error=array();
            $return=array();

            if(empty($engagement)){
                 $error[]=self::engagement_obligatoire;
            }
    
            if(count($error)==0){
                $re="insert into engagement(engagement,nb_month) 
                     values('".Common::datatosql($engagement)."',$nombre_mois)";
            }
            
            $db->Insert($re);
            
        }

        /**
         * update engagement
         *
         * @uses 
         * @access public
         * @param integer $idengagement 
	    **/ 
         
        public function update($engagement,$nombre_mois,$id_engagement){
           GLOBAL $db;

           $error  =array();
           $return =array();
           if(empty($engagement)){
               $error[]=self::engagement_obligatoire;
           }
           
           if(count($error)==0){
             $re="update engagement set engagement='".Common::datatosql($engagement)."',nb_month=$nombre_mois where idengagement=$id_engagement";
             
             $db->Update($re);
           } 
        }

        /**
         * delete engagement
         *
         * @uses 
         * @access public
         * @param integer $idengagement 
	    **/ 

        public function delete($id_engagement){
            GLOBAL $db;
            $error=array();
            if(empty($id_engagement)){
              $error[]=self::engagement_obligatoire;
            }
            if(count($error)==0){
                $query="delete from engagement where idengagement=$id_engagement";
                $db->Delete($query);
            }

            
        }
        /**
            * Verification l'existance d'un engagement
            *
            * @uses exist($idengagement);
            * @access public
            * @param integer $idengagement id d'un engagement
        */
        
        public static function exist ($idengagement)
        {
            GLOBAL $db;
            
            $re="select count(*) as NB from engagement
                where idengagement=".$idengagement;
                
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