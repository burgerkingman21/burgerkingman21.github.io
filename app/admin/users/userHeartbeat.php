<?php
session_start();

if (!isset($_SESSION['user_id']) && !isset($_SESSION['username'])) {
    exit;
}

function userHeartbeat()
{
    require __DIR__ . "/../../controller/db-connect.php";
    $GLOBALS['pdo'] = $pdo;
    $stmt = $pdo->prepare("SELECT * FROM clients");
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $user_id = $_SESSION['user_id'];
    try {
        $newStmt = $pdo->prepare("SELECT panel, totaloperators, activeoperators FROM users WHERE id = :user_id");
        $newStmt->bindParam(":user_id", $user_id);
        $newStmt->execute();

        $user = $newStmt->fetch(PDO::FETCH_ASSOC); // Correct variable usage
        if ($user) {
            $siteStatus = $user['panel'];
            $totalOperators = $user['totaloperators'];
            $totalActiveOperators = $user['activeoperators'];
            echo json_encode(array("clients" => $results, "siteStatus" => $siteStatus, "totalOperators" => $totalOperators, "totalActiveOperators" => $totalActiveOperators));
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

}


userHeartbeat();
