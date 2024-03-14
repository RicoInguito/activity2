<?php
    
    include 'database/database.php';

class User extends Database
{
    public function getAll()
    {
        $this->init();

        $get = $this->conn->query('SELECT * FROM users');
        $all = $get->fetch_all(MYSQLI_ASSOC);

        return $all;
    }

        public function Search(arr $params)
        {
            if(empty($params['email']))
            {
                return ['message' => 'Your Email is required!'];
            }
        

        $email = $params['email'] ?? '';
        $Isearch = $this->conn->query("SELECT * FROM users WHERE email LIKE '%$email'");
            if($Isearch->num_rows > 0)
            {
                $result = $Isearch->fetch_all(MYSQLI_ASSOC);
                return $result;
                
            }
        }

}
?>