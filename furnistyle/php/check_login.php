<?php
session_start();
require_once 'db.php';

$response = ['loggedIn' => false];

if (isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];
    
    try {
        $stmt = $pdo->prepare("SELECT username FROM users WHERE id = ?");
        $stmt->execute([$userId]);
        $user = $stmt->fetch();
        
        if ($user) {
            $response['loggedIn'] = true;
            $response['username'] = $user['username'];
        }
    } catch (PDOException $e) {
        // Error handling
    }
}

header('Content-Type: application/json');
echo json_encode($response);
?>