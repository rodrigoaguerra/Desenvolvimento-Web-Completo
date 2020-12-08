<?php

namespace App;

class Connection
{
  public static function getDb() {
    try {
      $conn = new \PDO(
        "mysql:host=localhost;dbname=mvc;charset=utf8",
        "root",
        "digo123@"
      );

      return $conn;

    } catch (\PDOExeption $error) {

      \error_log('Error > '. $error);
      //throw $th;
    }
  }
}

?>
