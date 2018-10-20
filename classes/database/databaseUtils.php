<?php

class DatabaseUtils {
  public static function startConnection() {
    return new Db(DB_HOST, DB_NAME, DB_USER, DB_PASS);
  }

  public static function finishConnection($pdoInstance)  {
    $pdoInstance->CloseConnection();
  }
}
