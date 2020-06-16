<?php
/**
 * project_name : UAS
 * author : krisnanto
 * licence : K15
 */

 class Connection
 {
     
    public $db;

    public function __construct()
    {
        
        $hostname = env("DB_HOST");
        $username = env("DB_USERNAME");
        $password = env("DB_PASSWORD");
        $dbname   = env("DB_NAME");
        
        $this->db = new mysqli($hostname, $username, $password, $dbname);
        if ($this->db->connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli->connect_error;
            exit();
        }
    }

    public function query(string $query)
    {
        return $this->db->query($query);
    }

    public function __destruct()
    {
        $this->db->close();
    }
 }
?>