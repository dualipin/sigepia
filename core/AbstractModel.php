<?php
namespace Core;

use Core\ConnectionMysql;

abstract class AbstractModel
{
    protected $dbConnection;

    public function __construct()
    {
        $connection = new ConnectionMysql();
        $this->dbConnection = $connection->getConnection();
    }

    abstract public function getAll();
    abstract public function save($data);
    abstract public function delete($id);
    abstract public function find($id);
}
