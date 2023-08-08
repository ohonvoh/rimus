<?php
    // cli-config.php
    $entityManager = null;
    require_once "bootstrap.php";
    return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
?>