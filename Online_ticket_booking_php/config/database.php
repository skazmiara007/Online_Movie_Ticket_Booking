<?php 
namespace Database;

use PDO;

class Database {

    public $config = [
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => '482l'
    ];

    public $connection;

    public function __construct(){
    }

    public function connect(){
        $this->connection = new PDO("mysql:host={$this->config['host']};dbname={$this->config['database']}", $this->config['username'], $this->config['password']);
        return $this->connection;
    }

    /*public function disconnect(){
        $this->connection = null;
    }*/

}
?>