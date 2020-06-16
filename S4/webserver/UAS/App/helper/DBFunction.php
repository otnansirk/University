<?php
include "Connection.php";

class DBFunction extends Connection
{
    
    public function findAll(string $table, string $fields = "*")
    {    
        return $this->db->query("SELECT $fields FROM $table");
    }

    public function find(string $table, string $condition, string $fields = "*")
    {    
        return $this->db->query("SELECT $fields FROM $table WHERE $condition");
    }

    public function create(string $table, string $fields, string $values)
    {    
        return $this->db->query("INSERT INTO $table($fields) VALUES ($values) ");
    }

    public function update(string $table, string $modifier, string $condition)
    {    
        $result = $this->db->query("UPDATE $table SET $modifier WHERE $condition ");
        return $result;
    }

    public function delete(string $table, string $condition)
    {    
        $result = $this->db->query("DELETE FROM $table WHERE $condition");
        return $result;
    }
    
}

