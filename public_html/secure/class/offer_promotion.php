<?php
 
  class Offer_promotion{
    
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
    public static function get($idoffer=null,$idstatus=1){
        GLOBAL $db;
        $return=[];
        setlocale(LC_TIME, "fr_FR", "French");
        if($idoffer>0){
            $filter="where offP.idoffer=$idoffer";
        }
        else {
            $filter = "where offP.idstatus = ". intval($idstatus);
        }
        $query="SELECT offP.idoffer,sp.image,offP.descriptions,offP.price,offP.Date_Debut,offP.Date_Fin,sp.supplier 
                FROM offer_promotion offP 
                INNER JOIN offer off
                ON off.idoffer=offP.idoffer
                INNER JOIN supplier sp
                on sp.idsupplier=off.idsupplier
                WHERE offP.promo =1
                GROUP BY offP.idoffer 
                ORDER by Date_Debut DESC";

        $db->Query($query);
        $result=$db->array;  
        for($c=0;$c<count($result);$c++){
            $date_fin_promotion = $result[$c]['Date_Fin'];
            $return[]=[
            'idoffer'               =>$result[$c]['idoffer'],
            'description'           =>$result[$c]['descriptions'],
            'price'                 =>$result[$c]['price'],
            'supplier'              =>$result[$c]['supplier'],
            'image'                 =>$result[$c]['image'],
            'Date_Debut'            =>$result[$c]['Date_Debut'],
            'Date_Fin'              =>$date_fin_promotion,
            'Day_fin'               =>date('d',strtotime($date_fin_promotion)),
            'monthAlphabirique'     =>utf8_encode(strftime("%B", strtotime($date_fin_promotion)))
            ];
        }
        $response = [
            'response' => true,
            'status_code' => SC_GET,
            'data' => $return  
        ];
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

  } 