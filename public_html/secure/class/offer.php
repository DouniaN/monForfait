<?php

/**
 *  Class offer
 *
 * @package 
 * @subpackage Class
 * @version 1.0
 * @author Dounia Nougaoui
 * @copyright 2021
 */

 class Offer 
 {

    //error
    const offer_not_exist        = "offer innexistant";
    const offer_deja_exist       = "offer deja exist";
    const offer_obligatoire      = "offer Obligatoire";  
    const engagement_Obligatoire = "engagement Obligatoire";

    /**
     * get offer 
     *
     * @uses 
     * @access public
     * @param integer $idoffer 
	*/ 

    public static function get ($idoffer,$idforfait_family=null,$offer="",$idsupplier=null,$price=null,$idengagement=null,$idfamily=null,$idservice=null,$idstatus=1)
    {
        setlocale(LC_TIME, "fr_FR", "French");

        $return=[];
        $erreur=[];

        GLOBAL $db;
        if($idoffer>0){
         if(self::exist($idoffer) <0){
           $erreur[]=self::offer_not_exist;
         }
          $filter="where off.idoffer=".intval($idoffer);
        }
        else {
            $filter = "where off.idstatus = ". intval($idstatus);
        }
        if($idengagement>0){
          $filter.=" and off.idengagement=".intval($idengagement);
        }
        if($idforfait_family>0){
            $filter.=" and off.idforfait_family=".intval($idforfait_family);
        }
        if($idfamily>0){
          $filter.=" and off.idfamily=".intval($idfamily);
        }
        if($idservice>0){
          $filter.=" and se.service=".intval($idservice);
        }
        if($idsupplier>0){
            $filter.=" and off.idsupplier=".intval($idsupplier);
        }
        if(strlen($price)>0){
            $filter.=" and off.price $price";
        }
        if(strlen($offer)>0){
          $filter.=" and off.offer LIKE \"%" . common::datatosql($offer) . "%\"";
        }
        if(count($erreur)==0){
            $re="SELECT tech.forfait,off.date_end ,spp.image,off.idoffer,off.promotion,
                 off.offer,off.description,off.price,spp.logo,off.link,spp.supplier,spp.eligibilite,spp.cmd,
                 eng.engagement,GROUP_CONCAT(offs.idservice)AS services 
                    FROM offer AS off
                    INNER JOIN supplier AS spp
                    ON spp.idsupplier=off.idsupplier
                    INNER JOIN engagement eng
                    on eng.idengagement=off.idengagement
                    INNER JOIN offer_service offs
                    ON offs.idoffer=off.idoffer
                    INNER JOIN forfait_family tech
                    ON tech.idforfait_family=off.idforfait_family
                    ".$filter."                
                    GROUP BY off.idoffer";
            
           $db->Query($re);
           $result=$db->array;
           
          for($c=0;$c<count($result);$c++)
          {
             $return[] = [
              'idoffer'       =>intval($result[$c]['idoffer']),
              'price'         =>$result[$c]['price'],
              'offer'         =>$result[$c]['offer'],
              'supplier'      =>$result[$c]['supplier'],
              'engagement'    =>$result[$c]['engagement'],
              'logo'          =>$result[$c]['logo'],
              'eligibilite'   =>$result[$c]['eligibilite'],
              'cmd'           =>$result[$c]['cmd'],
              'description'   =>$result[$c]['description'],
              'link'          =>$result[$c]['link'],
              'promotion'     =>$result[$c]['promotion'],
              'servcie'       =>self::getService($result[$c]['services']),
              'pricepromo'    =>self::getPrice($result[$c]['idoffer']),
              'technologie'   =>$result[$c]['forfait'],
              'Date_Fin'      =>$result[$c]['date_end'],
              'image'         =>$result[$c]['image'], 
              'Day'           =>date('d',strtotime($result[$c]['date_end'])),
              'monthAlph'     =>utf8_encode(strftime("%B", strtotime($result[$c]['date_end'])))

             ];
          }
          $response = [
            'response' => true,
            'status_code' =>SC_GET,
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
    
    /**get service By idservice */
     public static function getService($idservice){
        $services;
        $test=[];
        GLOBAL $db;
       $query="SELECT st.service_type , s.service , st.icon FROM service as s 
       INNER JOIN service_type st
       ON st.idservice_type=s.idservice_type
       WHERE idservice in($idservice)";
        $db->Query($query);
        $services = $db->array;
        for($c=0;$c<count($services);$c++)
        {
           $test[]=[
               'type'    =>$services[$c]['service_type'], 
               'service' =>$services[$c]['service'],
               'icon'    =>$services[$c]['icon']
           ];
        }
        return $test;
     }
   // POST Service
    public static function add($data)
    {
        // DB stuff
        GLOBAL $db;

        $error = [];
        
        
        if (count($error) == 0){
            // Create query
            $sql = "INSERT INTO offer(`idsupplier`,`idengagement`,`idfamily`,`idforfait_family`,`offer`,`price`,`description`,`link`,`date_save`,`date_begin`,`date_end`) 
                    VALUES ($data[supplier],$data[engagement],$data[family],$data[forfait_family],' ',$data[prix],'".Common::datatosql($data['description'])."','".Common::datatosql($data['link'])."', now(),'".Common::datatosql($data['date_begin'])."','".Common::datatosql($data['date_end'])."')";
            $db->Insert($sql);
            $sql2 ="SELECT MAX(idoffer)as idoffer FROM offer"; 
            $db->QueryRow($sql2);
            $row = $db->array;
            $id  = $row['idoffer'];
            
            $response = [
                'response' => true,
                'status_code' => SC_POST,
                'idoffer' => $id 
            ];
        } 
        else {
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
                      SET id_statut = 2
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
    * Verification l'existance d'un offer
    * @uses exist($idoffer);
    * @access public
    * @param integer $idoffer id d'un offer
	*/
    public static function exist ($idoffer)
    {
        GLOBAL $db;
        
        $re="select count(*) as NB from offer
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


    /**
    * getPrice();
    * @access public
    * @param integer $idoffer id d'un offer
	*/
    public static function getPrice($idoffer)
    {
        GLOBAL $db;
        $re="SELECT price FROM offer_promotion WHERE idoffer=$idoffer
             order by Date_Debut DESC
             Limit 2";
             
        $db->Query($re);
        $row       = $db->array;
      
        $nbr = count($row);
        if($nbr>1){
            $promotion = $row[1]['price'];
        }
        else{
            $promotion =0;
        }
        return $promotion;
    }

 }
    
 