<?php
 /**
 *
 * @package Gestion_Stock 
 * @subpackage Controller
 * @version 1.0
 * @author Dounia Nougaoui
 * @2021-06
 */
 require '../class/common/load.php';
  /***********************Date Now*****************************/
  $dateNow                  = date('Y-m-d');
  $monthYearNow             = date('m/Y');
  $monthNow                 = date('m');
  $YearNow                  = date('Y');
  $ForfaitOrange1           = Charts::get(1, $monthNow,$YearNow);
  $ForfaitInwi1             = Charts::get(2,$monthNow,$YearNow);
  $ForfaitMarocTelecom1     = Charts::get(3,$monthNow,$YearNow);
  /***********************Date précidente********************/
  $monthYearPrevieus        = date("m-Y",strtotime("-1 month"));

  $monthprevieus            = date('m',strtotime('-1 month'));
  $yearhprevieus            = date('Y',strtotime('-1 month'));
  $ForfaitOrange2           = Charts::get(1,$monthprevieus,$yearhprevieus);
  $ForfaitInwi2             = Charts::get(2,$monthprevieus,$yearhprevieus);
  $ForfaitMarocTelecom2     = Charts::get(3,$monthprevieus,$yearhprevieus);
  /**************************Date avant précédente********************/

  $monthYearPrevieus2       = date("m-Y",strtotime("-2 month"));
  $monthprevieus2           = date('m',strtotime('-2 month'));
  $yearhprevieus2           = date('Y',strtotime('-2 month'));
  $ForfaitOrange3           = Charts::get(1,$monthprevieus2,$yearhprevieus2);
  $ForfaitInwi3             = Charts::get(2,$monthprevieus2,$yearhprevieus2);
  $ForfaitMarocTelecom3     = Charts::get(3,$monthprevieus2,$yearhprevieus2);


$dataPoints = array( 
	array("y" => $ForfaitMarocTelecom1[0]['Count_cmd'], "label" => "MAROC TELECOM" ),
	array("y" => $ForfaitOrange1[0]['Count_cmd'], "label" => "ORANGE" ),
	array("y" => $ForfaitInwi1[0]['Count_cmd'], "label" => "INWI" ),

);

 $smarty->assign([
    'dataPoints'    => json_encode($dataPoints,JSON_NUMERIC_CHECK),
    'monthYearNow'  =>$monthYearNow
  
  ]); 
  
 $smarty->display('../template/tpl/chart.tpl');
 
  
 


