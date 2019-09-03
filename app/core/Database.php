<?php

class Database
{

  private $host = dbhost;
  private $name = dbname;
  private $user = dbuser;
  private $pass = dbpass;

  private $dbh;
  private $stmt;

  public function __construct(){
    // data source name
    $dsn = "mysql:host=" . $this->host . ";dbname=". $this->name;
    $options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES, false,
      PDO::ATTR_PERSISTENT => true
    ];

    try
    {
      $this->dbh = new PDO($dsn, $this->user, $this->pass,$options );
    }

    catch(PDOException $pe)
    {
    	die('Maaf, gangguan koneksi: ' .$pe->getMessage());
    }



  }

  public function cekQuery($query){
    return ($query);
  }

  public function query($query)
  {
    $this->stmt = $this->dbh->prepare($query);
  }

  public function bind( $param,$value,$type = null ){
    if( is_null($type) ){
      switch( true ) {
        case is_int($value)   : $type = PDO::PARAM_INT;   break;
        case is_bool($value)  : $type = PDO::PARAM_BOOL;  break;
        case is_null($value)  : $type = PDO::PARAM_NULL;  break;
        default               : $type = PDO::PARAM_STR;
      }
      $this->stmt->bindValue($param,$value,$type);
    }
  }

  public function execute(){
    $this->stmt->execute();
  }

  public function resultSet(){
    //var_dump($this->stmt);
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function resultOne(){
    $this->stmt->execute();
    return $this->stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function rowCount(){
    return $this->stmt->rowCount();
  }

}
