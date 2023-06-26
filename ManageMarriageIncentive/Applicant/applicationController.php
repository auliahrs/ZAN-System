<?php
// applicationController.php

session_start(); // Start the session

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['mohon'])) {
        if (isset($_POST['selectednoIC'])) {
            $selectednoIC = $_POST['selectednoIC'];
            
            $_SESSION['applicationID'] = $selectednoIC;



            
            header("Location: /ZAN-System/marriageIncentiveApplicationStatusView");
            exit();
        } else {
            echo "No noIC selected.";
        }
    }
}
