<?php
/**
 * Database Connection
 */ 

 require_once('../../config/db_connect.php');

class DataConnect {
  public $host = DB_HOST;
  public $user = DB_USER;
  public $pass = DB_PASS;
  public $db_name = DB_NAME;

  public $link;
  public $error;


  public function __construct(){
      $this->dbConnect();
  }

  /**
   * Database Connection
   *
   */
  public function dbConnect() {
    $this->link = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
    if(!$this->link) {
      $this->error = "Connection Failed" . mysqli_connect_error();

      return false;
    }
  }

  /**
   * Data Select
   */
  public function select($query) {
    $result = $this->link->query($query) or die($this->link->error.__LINE__);

    if ($result->num_rows >  0) {
      return $result;
    } else {
      return false;
    }
  }

  /**
   * Data insert into database
   */
  public function insert($query) {
    $insert_rows = $this->link->query($query) or die($this->link->error.__LINE__);

    if ($insert_rows) {
      return $insert_rows;
    } else {
      return false;
    }
  }
}