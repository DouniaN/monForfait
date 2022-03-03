<?php

/**
 *  loading
 *
 * @package 
 * @subpackage config
 * @version 1.0
 * @author Nougaoui Dounia
 * @copyright 
 */

define('ROOT', __DIR__); //returns an instance of the Directory class
require ROOT . '/../../config/config.php';
require ROOT . '/../engagement.php';
require ROOT . '/../supplier.php';
require ROOT . '/../service.php';
require ROOT . '/../service_type.php';
require ROOT . '/../forfait_family.php';
require ROOT . '/../offer.php';
require ROOT . '/../offer_promotion.php';
require ROOT . '/../extra.php';
require ROOT . '/../client.php';
require ROOT . '/../login.php';
require ROOT . '/../offer_extra.php';
require ROOT . '/../chart.php';
require ROOT . '/../offer_service.php';
require ROOT . '/../../template/smarty/libs/Smarty.class.php';
require ROOT . '/../mysql.php';

require ROOT .'/../common.php';

 

/**
 * create new mysql
 */

if (empty($db)) {
  $db = new MySQL;
}
$smarty = new Smarty();

/**
 * Status code for API response
 */
define('SC_GET', 200);
define('SC_GET_ERROR', 400);
define('SC_POST', 201);
define('SC_POST_ERROR', 400);
define('SC_PUT', 200);
define('SC_PUT_ERROR', 400);
define('SC_DELETE', 200);
define('SC_DELETE_ERROR', 400);

 