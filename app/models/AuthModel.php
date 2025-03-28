<?php
class AuthModel
{
    private PDO $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function register($username, $password)
    {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $this->db->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        return $stmt->execute([$username, $hashedPassword]);
    }

    public function login($username, $password)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        return false;
    }

    public function isLoggedIn()
    {
        return isset($_SESSION['user_id']);
    }

    public function logout()
    {
        session_destroy();
    }

    public function getUserById($userId)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$userId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllUsers()
    {
        $stmt = $this->db->query("SELECT * FROM users");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteUser($userId)
    {
        $stmt = $this->db->prepare("DELETE FROM users WHERE id = ?");
        return $stmt->execute([$userId]);
    }

    public function updateUser($userId, $username, $password)
    {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $this->db->prepare("UPDATE users SET username = ?, password = ? WHERE id = ?");
        return $stmt->execute([$username, $hashedPassword, $userId]);
    }
    public function getUserByUsername($username)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function updateUserPassword($userId, $newPassword)
    {
        $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);
        $stmt = $this->db->prepare("UPDATE users SET password = ? WHERE id = ?");
        return $stmt->execute([$hashedPassword, $userId]);
    }
    public function updateUserRole($userId, $role)
    {
        $stmt = $this->db->prepare("UPDATE users SET role = ? WHERE id = ?");
        return $stmt->execute([$role, $userId]);
    }
}