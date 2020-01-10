<?php
class DB
  {
    static protected $pdo;
    // new DB Protect
    private function __construct()
      {
      }
    // Clone Protect
    private function __clone()
      {
      }
    // Unserialize Protect
    private function __wakeup()
      {
      }
    // DB Connect
    private static function db_connect()
      {
        if (is_null(self::$pdo))
          {
            require $_SERVER['DOCUMENT_ROOT'] . '/app/core/inc.php';
            $dsn = "mysql:host=$hostbd;dbname=$namebd";
            $opt = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            );
            try
              {
                self::$pdo = new PDO($dsn, $nameuser, $userpass, $opt);
              }
            catch (PDOException $e)
              {
                die('MySql Error: ' . $e->getMessage());
              }
          }
        return self::$pdo;
      }
    public static function __callStatic($method, $args)
      {
        return call_user_func_array(array(
            self::db_connect(),
            $method
        ), $args);
      }
    public static function run($sql, $args = array())
      {
        $stmt = self::db_connect()->prepare($sql);
        $stmt->execute($args);
        return $stmt;
      }
    final protected function __destruct()
      {
        self::$pdo = null;
      }
  }
