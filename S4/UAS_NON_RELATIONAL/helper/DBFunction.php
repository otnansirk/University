<?php
include "Connection.php";

class DBFunction extends Connection
{
    
    public function findAll(string $coll, array $options = [])
    {    
        $query = new MongoDB\Driver\Query([], $options);
        return $this->db->executeQuery($this->dbname.'.'.$coll, $query);
    }

    public function findOne(string $coll, array $filter, array $options = ['limit' => 1])
    {    
        $query = new MongoDB\Driver\Query($filter, $options);
        return $this->db->executeQuery($this->dbname.'.'.$coll, $query);
    }

    public function find(string $coll, array $filter, array $options = [])
    {    
        $query = new MongoDB\Driver\Query($filter, $options);
        return $this->db->executeQuery($this->dbname.'.'.$coll, $query);
    }

    public function create(string $coll, array $data)
    {    
        $this->bulk->insert($data);
        return $this->db->executeBulkWrite($this->dbname.'.'.$coll, $this->bulk);
    }

    public function update(string $coll, array $modifier, array $filter = [])
    {    
        $update = array(
            '$set' => $modifier);
        $options= array(
                'multi' => false, 
                'upsert' => false);
        $this->bulk->update($filter, $update, $options);
        return $this->db->executeBulkWrite($this->dbname.'.'.$coll, $this->bulk);
    }

    public function delete(string $coll, array $filter, array $options)
    {    
        $this->bulk->delete($filter);
        return $this->db->executeBulkWrite($this->dbname.'.'.$coll, $this->bulk);
    }

    public function command(array $query)
    {
        $command = new \MongoDB\Driver\Command($query);
        return $this->db->executeCommand($this->dbname, $command);
    }
    
}

