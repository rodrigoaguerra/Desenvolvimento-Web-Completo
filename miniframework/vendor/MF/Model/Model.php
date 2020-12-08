<?php

namespace MF\Model;

abstract class Model {

  protected \PDO $db;

  public function __construct(\PDO $db) {
    $this->db = $db;
  }

}


?>
