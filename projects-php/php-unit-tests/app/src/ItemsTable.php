<?php

namespace TDD;

use \PDO;

class ItemsTable
{
    protected $table = 'items';

    protected $PDO;

    public function __construct($pdo)
    {
        $this->PDO = $pdo;
    }

    public function __destruct()
    {
        unset($this->PDO);
    }

    public function findForId($id)
    {
        $query = "SELECT * FROM {$this->table} WHERE {$this->table}.id = ?";
        $statement = $this->PDO->prepare($query);
        $statement->execute([$id]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
}
