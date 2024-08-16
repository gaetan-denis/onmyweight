<?php


namespace classes;

use http\Exception\RuntimeException;
use PDO;
use PDOException;

class Database
{
    private $host;
    private $user;
    private $pass;
    private $dbname;
    public $connection;

    public function __construct()
    {
        $this->host = $_ENV['DB_HOST'];
        $this->dbname = $_ENV['DB_NAME'];
        $this->user = $_ENV['DB_USER'];
        $this->pass = $_ENV['DB_PASS'];
        $this->connection=null;

    }

    public function connect()
    {
        if ($this->connection === null) {
            try {
                $dsn = "mysql:host={$this->host};dbname={$this->dbname}";
                $this->connection = new PDO($dsn, $this->user, $this->pass);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $this->connection;
            } catch (PDOException $e) {
                throw new RuntimeException('Échec de la tentative de connexion'.  $e->getMessage());
            }
        }
    }
}