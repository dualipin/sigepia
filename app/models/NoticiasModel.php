<?php

class NoticiasModel
{
    private PDO $db;


    public function __construct($db)
    {
        $this->db = $db;
    }

    public function crearNoticia($titulo, $descripcion): bool
    {
        $stmt = $this->db->prepare("INSERT INTO noticias (titulo, descripcion) VALUES (?, ?)");
        return $stmt->execute([$titulo, $descripcion]);
    }

    public function getAllNoticias()
    {
        $stmt = $this->db->query("SELECT * FROM noticias");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getLatestNoticia()
    {
        $stmt = $this->db->query("SELECT * FROM noticias ORDER BY id DESC LIMIT 20");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
