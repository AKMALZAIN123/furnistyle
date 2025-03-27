<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    try {
        // Cari user berdasarkan username atau email
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
        $stmt->execute([$username, $username]);
        $user = $stmt->fetch();
        
        if ($user && password_verify($password, $user['password'])) {
            // Mulai session
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            
            echo json_encode(['status' => 'success', 'message' => 'Login successful!']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid username or password']);
        }
    } catch (PDOException $e) {
        echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $e->getMessage()]);
    }
}
?>