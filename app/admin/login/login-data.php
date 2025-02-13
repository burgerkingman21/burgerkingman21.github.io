<?php
session_start();

require __DIR__ . "/../../controller/db-connect.php";

$GLOBALS['pdo'] = $pdo;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $password = $_POST['password'];

        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $_SESSION['user_id'] = intval($user['id']);
            $_SESSION['username'] = htmlspecialchars($user['username']);
            /**
             * to set access_id
             */
            $newStmt = $pdo->prepare("UPDATE users SET totaloperators = totaloperators + 1 WHERE id = :id");
            $newStmt->bindParam(':id', $user['id']);
            $newStmt->execute();

            /**~~~to set access_id */
            echo json_encode(array("status" => "success", "message" => "Login successful"));

        } else {
            echo json_encode(array("status" => "error", "message" => "Invalid username or password"));
        }
    }
}