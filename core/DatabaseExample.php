<?php

/**
 * Clase conexión de ejemplo, debe crear un archivo de configuración
 * con el nombre Database.php y la clase ConnectionMysql
 * copie el siguiente código y peguelo en el archivo Database.php
 * y cambie los valores de la base de datos, usuario y contraseña
 * con los datos de su base de datos
 * 
 * renombre este archivo a Database.php y ajuste los valores de conexión
 * a su base de datos MySQL.
 */
class ConnectionMysql
{
    private PDO $pdo; // Instancia de PDO
    private string $host = 'localhost';
    private string $username = 'root';
    private string $password = 'dualipin';
    private string $database = 'sigepia';
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
