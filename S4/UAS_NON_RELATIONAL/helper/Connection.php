<?php
/**
 * project_name : UAS
 * author : krisnanto
 * licence : K15
 */

 class Connection
 {
     
    public $db;
    public $dbname;
    public $bulk;

    public function __construct()
    {
        
        $hostname = env("DB_HOST");
        $username = env("DB_USERNAME");
        $password = env("DB_PASSWORD");
        $dbname   = env("DB_NAME");
        
        try {
            $this->db = new MongoDB\Driver\Manager("mongodb://${username}:${password}@${hostname}/${dbname}");
            $this->dbname = $dbname;
            $this->bulk = new MongoDB\Driver\BulkWrite;
        } catch (\Throwable $th) {
            echo "Failed to connect to DB: ";
            exit();
        }
    }
 }
?>