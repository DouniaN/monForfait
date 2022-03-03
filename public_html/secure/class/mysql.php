<?php 
   
/**
 * Class MySQL
 * @package 
 * @subpackage Class
 * @version 1.0
 * @author Dounia Nougaoui
 * @copyright 
 */
class MySQL
{
    public $id;

    public $result;

    public $rows;

    public $data;

    public $a_rows;

    public function Connexion(
      $host = MYSQL_HOST,
      $user = MYSQL_USER,
      $pass = MYSQL_PASS,
      $database = MYSQL_DATABASE
    ) 
    {
        try{
            $this->id = new PDO('mysql:host='.$host.';dbname='.$database, $user, $pass);
            $this->id->exec('SET NAMES utf8');
        }

        catch(exception $e) {
          die('Erreur '.$e->getMessage());
        }
           
    }
    
     
    public function ConnexionCache()
    {
        $this->memcache = new Memcache();
        $this->memcache->pconnect('localhost',
          11211) or die("Could not connect");
    }

    public function FlushCache()
    {
        if (empty($this->memcache)) {
            $this->ConnexionCache();
        }
        memcache_flush($this->memcache);
    }
    
    // Use this function is the query will return multiple rows.
     public function Query
     (
      $query,
      $cache = 0,
      $cache_limit = 0,
      $count = 0,
      $forced = 0                  
     )                    
        
    {
        if (isset($this->data)) {
            unset($this->data);
        }
        if (isset($this->array)) {
            unset($this->array);
        }
        $result = null;
        if ($cache == 1 && COM_SQL_NO_CACHE != 'ON') {
            if (empty($this->memcache)) {
                $this->ConnexionCache();
            }
            $key = md5('Q' . $cache . MYSQL_DATABASE . ':' . $query);
            if ($forced == 0) {
                $result = $this->memcache->get($key);
            } else {
                memcache_flush($this->memcache);
            }
        }
        if ($result != null) {
            $this->array = $result;
            $this->rows = sizeOf($result);
        }
        else {

            if (empty($this->id)) {
                $this->Connexion();
            }
            
            $this->result=$this->id->prepare($query);
            $this->result->execute();
            $this->array = [];
            $this->array =$this->result->fetchAll(PDO::FETCH_ASSOC);
            if (empty($this->array[0]) && $count == 1) {
                $this->array[0] = 0;
            }

            if ($cache == 1 && COM_SQL_NO_CACHE != 'ON') {
                $this->memcache->set($key, $this->array, false, $cache_limit);
            }
          
        }
        
   }
    
    
    // This function is useful if the query will only return a single row.
    public function QueryRow(
      $query,
      $cache = 0,
      $cache_limit = 0,
      $count = 0,
      $forced = 0                  
     )                    
        
    {
        if (isset($this->data)) {
            unset($this->data);
        }
        if (isset($this->array)) {
            unset($this->array);
        }
        $result = null;
        if ($cache == 1 && COM_SQL_NO_CACHE != 'ON') {
            if (empty($this->memcache)) {
                $this->ConnexionCache();
            }
            $key = md5('Q' . $cache . MYSQL_DATABASE . ':' . $query);
            if ($forced == 0) {
                $result = $this->memcache->get($key);
            } else {
                memcache_flush($this->memcache);
            }
        }
        if ($result != null) {
            $this->array = $result;
            $this->rows = sizeOf($result);
        }
        else {
            if (empty($this->id)) {
                $this->Connexion();
            }
       
          $this->result=$this->id->prepare($query);
          $this->result->execute();
          $this->array=$this->result->fetch();
           if ($cache == 1 && COM_SQL_NO_CACHE != 'ON') {
                $this->memcache->set($key, $this->array, false, $cache_limit);
            }
          
        }
        return ($this->array);
   }
   
   
    public function FetchResult($res)
    {
        return $this->result->fetchAll();
    }
    
   public function Insert($query)
   {
        if (empty($this->id)) {
            $this->Connexion();
        }
        $this->result = $this->id->prepare($query);
        $this->result->execute();
        if ($this->result == false) {
            MySQL_ErrorMsg($query, $this->id->error);
        }

        $this->rows = 0;
        //$this->a_rows = $this->id->affected_rows;
        unset($this->data);

        //return $this->id->insert_id;
    }
   
    public function Delete($query)
    {
        if (empty($this->id)) {
            $this->Connexion();
        }

        $this->result = $this->id->prepare($query);
        $this->result->execute();
        if ($this->result == false) {
            MySQL_ErrorMsg($query, $this->id->error);
        }

        $this->rows = 0;
      
        unset($this->data);
    }
     public function Update($query)
    {
        if (empty($this->id)) {
            $this->Connexion();
        }

        $this->result = $this->id->prepare($query);
        $this->result->execute();
        if ($this->result == false) {
            MySQL_ErrorMsg($query, $this->id->error);
        }

        $this->rows = 0;
       
        unset($this->data);
    }
}   
