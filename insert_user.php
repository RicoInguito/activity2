<?php

    include 'db.php';

class Insert extends Database
{
    public function InsertUser()
    {
        $this->init();
        $insert = $this->conn->query("INSERT INTO users(firstname, lastname, email, password) 
        VALUES ('Rico', 'inguito', 'rico@gmail.com', 'ricoinguito')");
        
    }
}


?>