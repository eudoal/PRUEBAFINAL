<?php
//require_once "config/config.php";
namespace Daw\models;
use Daw\config\config;
use mysqli;

$config=[];
$config["host"]="localhost";
$config["user"]="root";
$config["pass"]="";
$config["db"]="juegos";

/**
 *
 */
class Db
{
  //Propiedades de conexion
  private $server="";
  private $user="";
  private $pass="";
  private $db="";
  //Propiedad conector
  private $conector;

/*
  function __construct()
  {
    global $config;
    $this->server=$config["host"];
    $this->user=$config["user"];
    $this->pass=$config["pass"];
    $this->db=$config["db"];
  }
*/
  function __construct()
  {
    $this->server="localhost";
    $this->user=config::user;
    $this->pass=config::pass;
    $this->db=config::db;
  }


  function conectar(){
    $conectorTmp = new mysqli ($this->server,$this->user,
                                  $this->pass,$this->db) ;
    if ($conectorTmp->connect_errno) {
      $this->conector=false;
    }else{
      $this->conector=$conectorTmp;
    }
  }
  function getConector(){
    return $this->conector;
  }
    /**
     * Get the value of Server
     *
     * @return mixed
     */
    public function getServer()
    {
        return $this->server;
    }
    /**
     * Set the value of Server
     *
     * @param mixed server
     *
     * @return self
     */
    public function setServer($server)
    {
        $this->server = $server;
        return $this;
    }
    /**
     * Get the value of User
     *
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Set the value of User
     *
     * @param mixed user
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }
    /**
     * Get the value of Pass
     *
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }
    /**
     * Set the value of Pass
     *
     * @param mixed pass
     *
     * @return self
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
        return $this;
    }
    /**
     * Get the value of Db
     *
     * @return mixed
     */
    public function getDb()
    {
        return $this->db;
    }
    /**
     * Set the value of Db
     *
     * @param mixed db
     *
     * @return self
     */
    public function setDb($db)
    {
        $this->db = $db;
        return $this;
    }
}
 ?>
