<?php
Class dbObj{
  /* Database connection start */
        var $servername, $username, $password, $dbname, $port, $conn;
  __construct()
  echo "Success2"
  {
    $this->servername = "dpg-cecefjpgp3jl5ttj7a4g-a.oregon-postgres.render.com";
    $this->username = "root";
    $this->password = "IfRTo0JO9P3vxzT6kxYQnTcNPzOffWyv";
    $this->dbname = "users";
    $this->port = "5432";
  }
  function getConnstring() {
    $con = pg_connect("host=".$this->servername." port=".$this->port." dbname=".$this->dbname." user=".$this->username." password=".$this->password."") or die("Connection failed: ".pg_last_error());
    /* check connection */
    if (pg_last_error()) {
      printf("Connect failed: %s\n", pg_last_error());
      exit();
    } else {
      $this->conn = $con;
    }
    return $this->conn;
  }
}
?>
