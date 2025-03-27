<?php
header('Content-Type: application/json');
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Log semua request untuk debugging
file_put_contents('register_debug.log', "[" . date('Y-m-d H:i:s') . "] Request received\n", FILE_APPEND);

try {
    require_once 'db.php';
    
    // Debug koneksi database
    file_put_contents('register_debug.log', "[" . date('Y-m-d H:i:s') . "] Database connection checked\n", FILE_APPEND);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Log data POST
        file_put_contents('register_debug.log', "[" . date('Y-m-d H:i:s') . "] POST data: " . print_r($_POST, true) . "\n", FILE_APPEND);

        // Validasi input
        if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['confirm_password'])) {
            throw new Exception('All fields are required');
        }

        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        // Validasi format email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Invalid email format');
        }

        // Validasi password
        if ($password !== $confirm_password) {
            throw new Exception('Passwords do not match');
        }
        
        if (strlen($password) < 6) {
            throw new Exception('Password must be at least 6 characters');
        }

        // Hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        // Cek apakah username atau email sudah ada
        $stmt = $pdo->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
        $stmt->execute([$username, $email]);
        
        if ($stmt->rowCount() > 0) {
            throw new Exception('Username or email already exists');
        }
        
        // Insert user baru
        $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $insertResult = $stmt->execute([$username, $email, $hashed_password]);
        
        if (!$insertResult) {
            throw new Exception('Failed to create user account');
        }

        // Log keberhasilan
        file_put_contents('register_debug.log', "[" . date('Y-m-d H:i:s') . "] User registered successfully: $username\n", FILE_APPEND);
        
        echo json_encode([
            'status' => 'success', 
            'message' => 'Registration successful! Please login.'
        ]);
    } else {
        throw new Exception('Invalid request method');
    }
} catch (PDOException $e) {
    file_put_contents('register_debug.log', "[" . date('Y-m-d H:i:s') . "] Database Error: " . $e->getMessage() . "\n", FILE_APPEND);
    echo json_encode([
        'status' => 'error',
        'message' => 'Database error: ' . $e->getMessage()
    ]);
} catch (Exception $e) {
    file_put_contents('register_debug.log', "[" . date('Y-m-d H:i:s') . "] Error: " . $e->getMessage() . "\n", FILE_APPEND);
    echo json_encode([
        'status' => 'error',
        'message' => $e->getMessage()
    ]);
}
?>  