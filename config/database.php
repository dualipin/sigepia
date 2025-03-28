<?php

// class ConnectionMysql
// {
//     private $host = 'localhost';
//     private $username = 'root';
//     private $password;
//     private $database;

//     private $pdo;

//     public function __construct()
//     {
//         try {
//             $this->pdo = new PDO(
//                 $this->getDsn(),
//                 $this->username,
//                 $this->password,
//                 [
//                     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//                     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//                 ]
//             );
//         } catch (PDOException $e) {
//             die('Database connection failed: ' . $e->getMessage());
//         }
//     }

//     public function getConnection()
//     {
//         return $this->pdo;
//     }

//     private function getDsn()
//     {

//         $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->database;

//         if ($_SERVER['HTTP_HOST'] !== 'localhost') {
//             $this->host = getenv('DB_HOST');
//             $this->database = getenv('DB_DATABASE');
//             $this->username = getenv('DB_USERNAME');
//             $this->password = getenv('DB_PASSWORD');
//             $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->database;

//             return $dsn;
//         }

//         return $dsn;
//     }
// }
