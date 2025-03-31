<?php
require_once __DIR__ . '/../../config/database.php';

class NoticiasModel
{
    private PDO $db;

    public function __construct()
    {
        $this->db = (new ConnectionMysql())->getConnection();
    }


    public function getLatestNoticia()
    {
        $stmt = $this->db->query("SELECT * FROM noticias ORDER BY fecha DESC LIMIT 5");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
