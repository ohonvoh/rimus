<?php
    session_start();
    $_SESSION["connectedUser"] = null;
    session_destroy();
    header("Location: /rimus");
?>