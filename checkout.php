<?php

    require('config.inc.php');


    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (isset($_GET['session'])) {
            $uid = $_GET['session'];
            // Use the existing user ID:
            session_id($uid);
            // Start the session:
            session_start();
        } else { // Redirect the user.
            $location = 'http://' . BASE_URL . 'cart.php';
            header("Location: $location");
            exit();
        }
    } else { // POST request.
        session_start();
        $uid = session_id();
    }

    require (MYSQL);

?>