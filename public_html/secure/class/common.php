<?php
/**
 * Class Common
 *
 * @package 
 * @subpackage Class
 * @version 1.0
 * @author Dounia Nougaoui
 * @copyright 
 */

class Common
{

    const error_action    = "Action interdite";
    const error_no_update = "Aucune donnée à modifier";

    protected static $data = [];

    public static function get($key)
    {
        return isset(self::$data[$key]) ? self::$data[$key] : null;
    }

    public static function set($key, $value)
    {
        self::$data[$key] = $value;
    }

    /**
     * check data by id if exist
     *
     * @uses exist($id);
     * @access public
     *
     * @param integer $id
     */
    //exist fucntion for Request type
    public static function exist($id, $table, $idstatus = 1)
    {
        //DB stuff
        GLOBAL $db;
        $query = "SELECT count(*) as NB 
                FROM " . $table . "
                WHERE idstatus = " . $idstatus . " 
                AND id" . $table . " = " . intval($id);
                
        $db->Query($query);
        $row = $db->array[0];

        if (intval($row['NB']) > 0) {
            return true;
        } else {
            return false;
        }
    }
    
   /**
     * encode array method utf8
     *
     * @uses encode_items($array);
     * @access public
     *
     * @param array $data
     *            
     */
    public static function encode_items($array)
    {
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $array[$key] = encode_items($value);
            } else {
                $array[$key] = $value; // utf8_encode($value);
            }
        }

        return $array;
    }
    
     /**
     * Convert data from web to sql
     *
     * @uses datatosql($data);
     * @access public
     *
     * @param string $data
     *data to save
     */
    public static function datatosql($data)
    {
        GLOBAL $db;
        $data = trim($data);

      // Protection contre les injections de script
        $data = str_replace('<script', '', $data);
        $data = str_replace('script>', '', $data);

        return strtr($data, [
          "\x00" => '\x00',
          "\n"   => '\n',
          "\r" => '\r',
          '\\' => '\\\\',
          "'" => "\'",
          '"' => '\"',
          "\x1a" => '\x1a',
        ]);
    }
    
    /**
     * Delete all accent of data
     *
     * @uses replace_accents($string);
     * @access public
     *
     * @param string $string
     *  data to delete accent
     */
    public static function replace_accents($string)
    {
        $str = mb_strtolower($string, 'UTF-8');
        mb_regex_encoding('UTF-8');

        $str = htmlentities($str, ENT_NOQUOTES, 'utf-8');
        $str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#',
          '\1', $str);
        $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1',
          $str); // pour les ligatures e.g. '&oelig;'
        $str = preg_replace('#&[^;]+;#', '',
          $str); // supprime les autres caractÃ¨res

        $str = mb_ereg_replace("[^A-Za-z0-9\.\-]", " ", $str);
        // $str = mb_ereg_replace('[^0-9\p{L}\-]+', ' ', $str);
        $str = trim(preg_replace('/ +/', ' ', $str));

        $str = mb_strtoupper($str, 'utf-8');

        return $str;
    }

    /**
     * Convert number tel format international to national
     *
     * @uses phone_it_to_fr($phone_number);
     * @access public
     *
     * @param string $phone_number
     *            phone number to convert
     */
    public static function phone_int_to_fr($sda)
    {
        $sda = trim($sda);
        $sda = str_replace(' ', '', $sda);
        $length = strlen(COM_COUNTRY_DIALING_CODE);

        if (substr($sda, 0, 2) == '00') {
            $sda = substr($sda, 2);
        }

        if (substr($sda, 0, $length) == COM_COUNTRY_DIALING_CODE) {
            return ('0' . substr($sda, $length));
        } else {
            if (substr($sda, 0,
                ($length + 1)) == '+' . COM_COUNTRY_DIALING_CODE) {
                return ('0' . substr($sda, ($length + 1)));
            } else {
                if (substr($sda, 0, 1) == '+') {
                    return substr($sda, 1);
                } else {
                    return $sda;
                }
            }
        }
    }

    public static function phone_fr_to_int($sda)
    {
        $sda = trim($sda);
        $sda = str_replace(' ', '', $sda);
        $length = strlen(COM_COUNTRY_DIALING_CODE);

        if (substr($sda, 0, 1) == '0' && substr($sda, 0, 2) != '00') {
            return (COM_COUNTRY_DIALING_CODE . substr($sda, 1));
        } elseif (substr($sda, 0, 2) == '00') {
            return (substr($sda, 2));
        } elseif (substr($sda, 0, 1) == '+') {
            return (substr($sda, 1));
        } else {
            return $sda;
        }
    }

    public static function datatolang($lang = null)
    {
        if (strlen($lang) == 2) {
            return $lang;
        } else {
            return 'fr';
        }
    }

    public static function datatoxml($data)
    {
        return '<![CDATA[' . $data . ']]>';
    }
    /**
     * Redirection to url
     *
     * @uses redirection($url);
     * @access public
     *
     * @param string $url
     *            url to do redirection
     */
    public static function redirection($url)
    {
        header("Location: " . $url);
        exit();
    }
   /**
     * Convert data to money
     *
     * @uses datatosql($data);
     * @access public
     *
     * @param float $data
     */
    public static function money($data, $nb_float = 2)
    {
        if ($nb_float > 6) {
            $nb_float = 6;
        }

        $data = str_replace(',', '.', $data);
        $data = (float)$data;
        $data = round($data, $nb_float);
        $data = sprintf("%01." . $nb_float . "f", $data);

        $tmp = explode('.', $data);
        if ($tmp[1] == 0) {
            $data = $tmp[0];
        }

        return ($data);
    }

    public static function money_csv($data, $nb_float = 2)
    {
        if ($nb_float > 6) {
            $nb_float = 6;
        }

        $data = (float)$data;
        $data = round($data, $nb_float);
        $data = sprintf("%01." . $nb_float . "f", $data);
        $data = str_replace('.', ',', $data);
        return ($data);
    }

    public static function datatomoney($data)
    {
        $data = str_replace(',', '.', $data);
        $data = floatval($data);
        return $data;
    }
    
    public static function check_directory($origin, $sub_directory)
    {
        if (!is_dir($origin)) {
            // echo "mkdir ".$origin."\n";
            mkdir($origin);
        }

        if (is_dir($origin)) {
            $tmp = explode('/', $sub_directory);

            $nb = count($tmp);
            $i = 0;
            $directory = $origin;
            while ($i <= $nb) {
                if (!empty($tmp[$i])) {
                    $directory .= '/' . $tmp[$i];
                    if (!is_dir($directory)) {
                        // echo "mkdir ".$origin."\n";
                        mkdir($directory);
                    }
                }
                $i++;
            }
        }
    }

   
    public static function initialize_access($iduser_type)
    {
        GLOBAL $db, $_SESSION, $check_access_config;

        $file = PATH_SECURE_DATA . 'cache/check_access_' . intval($iduser_type) . '.xmin';
        @unlink($file);

        if (!file_exists($file)) {
            self::check_directory(PATH_SECURE_DATA, 'cache/');

            unset($json);

            $sql = "SELECT a.*, b.parameter_code FROM user_module a
					INNER JOIN parameter_module b ON b.idparameter_module = a.idparameter_module
					WHERE a.iduser_type = '" . intval($iduser_type) . "'";
         
            $GLOBALS['db']->Query($sql);
            $result = $GLOBALS['db']->array;
            foreach ($result as $row) {
          
                $json['module'][$row['parameter_code']] = [
                  'read' => $row['read_access'],
                  'add' => $row['add_access'],
                  'write' => $row['write_access'],
                  'delete' => $row['delete_access'],
                ];
            }

            $sql = "SELECT a.*, b.parameter_function_code, c.parameter_code FROM user_module_function a
					INNER JOIN parameter_module_function b ON a.idparameter_module_function = b.idparameter_module_function
					INNER JOIN parameter_module c ON b.idparameter_module = c.idparameter_module
					WHERE a.iduser_type = '" . intval($iduser_type) . "'";
            $GLOBALS['db']->Query($sql);
            $result = $GLOBALS['db']->array;
            foreach ($result as $row) {
                // $data_file .=
                // '$'."check_access_config['sub_module']['".$row['parameter_code']."']['".$row['parameter_function_code']."']
                // = array('read'=> ".$row['read_access'].", 'add'=>
                // ".$row['add_access'].", 'write' => ".$row['write_access'].",
                // 'delete' => ".$row['delete_access']." ); \n";

                $json['sub_module'][$row['parameter_code']][$row['parameter_function_code']] = [
                  'read' => $row['read_access'],
                  'add' => $row['add_access'],
                  'write' => $row['write_access'],
                  'delete' => $row['delete_access'],
                ];
            }

            $fp = fopen($file, 'w');
            if ($fp) {
                while (!flock($fp, LOCK_EX)) {
                    ;
                }
                fwrite($fp, serialize($json));
                // fwrite($fp, $data_file);
                flock($fp, LOCK_UN);
                fclose($fp);
            }
        }

        $check_access_config = @unserialize(@file_get_contents($file));

        return $check_access_config;
    }

     public static function check_email($email_origin)
    {
        $result = explode(';', $email_origin);
        foreach ($result as $email) {
            $exp = "^[a-z0-9]+([._-][a-z0-9]+)*@([a-z0-9]+([._-][a-z0-9]+))+$";
            if (strlen($email) == 0) {
                return false;
            } 
            elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $return = true;
                /*
                 * // old eregi($exp,$email) $domain =
                 * array_pop(explode("@",$email)); if(checkdnsrr($domain)){
                 * $return = true; } else{ return false; }
                 */
            } else {
                return false;
            }
        }

        return $return;
    }

 /**
     * Calculate time duration by minute
     *
     * @uses calcul_minute($duration);
     * @access public
     *
     * @param integer $duration
     *            in second
     */
    public static function calcul_minute($duration)
    {
        $duration = abs($duration);

        $minute = intval($duration / 60);
        $second = $duration % 60;

        $time = $minute . 'mn ' . sprintf("%02s", $second) . 's';
        return $time;
    }

 /**
     * Calculate time duration by minute
     *
     * @uses calcul_minute_full($duration);
     * @access public
     *
     * @param integer $duration
     */
    public static function calcul_minute_full($duration)
    {
        $duration = abs($duration);

        $minute = intval($duration / 60);
        $second = $duration % 60;

        $time = $minute;
        return $time;
    }

    function return_duration_engagement($date_begin, $date_end)
    {
        if (strlen($date_begin) >= 10) {
            $date_begin = Common::datetosql($date_begin);
        }

        if (substr($date_begin, 0, 10) == '0000-00-00') {
            return 0;
        } else {
            if (strlen($date_end) == 10) {
                $date_end = Common::datetosql($date_end);
            }
            if ($date_end == '0000-00-00') {
                $date_end = date('Y-m-d');
            }

            if (strtotime($date_begin) > strtotime($date_end)) {
                return 0;
            } else {
                $datetime1 = new DateTime($date_end);
                $datetime2 = new DateTime($date_begin);
                $interval = $datetime1->diff($datetime2);

                return intval($interval->m);
                /*
                 * $nb = ($interval->y * 12) + ($interval->m);
                 * if($interval->d>0){
                 * $nb++;
                 * }
                 * return intval($nb);
                 */
              }
            }
    }

    public static function isDigits($element)
    {
        return !preg_match("/[^0-9]/", $element);
    }

    /**
     * Convert data from web to UTF8
     *
     * @uses datatoutf8($data);
     * @access public
     *
     * @param string $data
     *            data to save
     */
    public static function datatoutf8($data)
    {
        // Activate it if no connexion utf8 to database
        // return htmlentities($data);
        return $data;
    }

    public static function return_taux($amount_ht, $amount_ttc)
    {
        if ($amount_ht == 0) {
            return false;
        }

        $taux = ($amount_ttc / $amount_ht * 100) - 100;
        return self::money($taux);
    }

    function return_duration_transaction_day($date_save)
    {
        if (substr($date_save, 0, 10) == '0000-00-00 00:00:00') {
            return 0;
        } else {
            $datetime = date("Y-m-d H:i:s");

            if (strtotime($date_save) <= strtotime($datetime)) {
                return 0;
            } else {
                $datetime1 = new DateTime($datetime);
                $datetime2 = new DateTime($date_save);
                $interval = $datetime2->diff($datetime1);

                return intval($interval->d);

            }
        }
    }
}



 
