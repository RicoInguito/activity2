<?php

    class Database
    {
        public $conn;

        public function init()
        {
            $this->conn = new mysqli('localhost', 'root', '');
            $data = $this->conn->query('CREATE DATABASE IF NOT EXISTS api_db');
            $use = $this->conn->query(" USE api_db");
        }
    }


?>