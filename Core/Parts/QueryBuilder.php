<?php

namespace Core\Parts;

use Core\Parts;
use PDO;

class QueryBuilder extends Parts\Model
{


  public  function getOne($user)
  {
        $db = static::getDb();
        $stmt = $db->prepare("SELECT * FROM users WHERE username ='$user'");
        $stmt->execute();
      return $stmt->fetchAll();
  }

}
