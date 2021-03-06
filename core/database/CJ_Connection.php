<?php

class CJ_Connection {
    function __construct() {
        require_once(__DIR__ . '/../../config/database.php');
        $this->db_params = $db_params;
    }

    function getConnection() {
        $connection = new mysqli(
            $this->db_params['servername'],
            $this->db_params['username'],
            $this->db_params['password'],
            $this->db_params['dbname']
        );
        if($connection->connect_error) {
            die('Connection failed: ' . $connection->connect_error);
        }
        return $connection;
    }
}

?>