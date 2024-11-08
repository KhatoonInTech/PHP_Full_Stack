<?php
    session_start(); // Start the session
    // Destroy the session.
    session_destroy();
    // Redirect to registration page
    header("Location: dashbord.php");
    exit();
?>