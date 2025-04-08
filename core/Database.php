<?php

namespace Core;

use PDO;

/**
 * Clase conexión de ejemplo, debe crear un archivo de configuración
 * con el nombre Database.php y la clase ConnectionMysql
 * copie el siguiente código y peguelo en el archivo Database.php
 * y cambie los valores de la base de datos, usuario y contraseña
 * con los datos de su base de datos
 */
class ConnectionMysql
{
    private PDO $pdo; // Instancia de PDO
    private string $host = getenv('DATABASE_HOST', 'localhost');
    private string $username = getenv('DATABASE_USER', 'root');
    private string $password = getenv('DATABASE_PASSWORD', 'dualipin');
    private string $database = getenv('DATABASE_NAME', 'sigepia');
    private string $charset = 'utf8mb4';


    public function __construct()
    {
        $this->pdo = new PDO("mysql:host={$this->host};dbname={$this->database};charset={$this->charset}", $this->username, $this->password);
    }

    /**
     * * Método para obtener la conexión a la base de datos
     * @return PDO
     */
    public function getConnection(): PDO
    {
        return $this->pdo;
    }
}
