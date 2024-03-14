<?php
    include 'database.php';

class User_migration extends Database
{
    public function CreateTable()
    {
        $this->init();
        $create = $this->conn->query('CREATE TABLE IF NOT EXISTS users(
            id int auto_increment primary key,
            firstname varchar(100) not null,
            lastname varchar(100) not null,
            email varchar(100) not null,
            password varchar(100) not null
        )');
    }
}


?>