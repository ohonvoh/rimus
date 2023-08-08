<?php
    use Doctrine\ORM\Tools\Setup;
    require_once "vendor/autoload.php";
    use Doctrine\ORM\EntityManager;

    $racine = $_SERVER['DOCUMENT_ROOT'].'/rimus/';
    $url = "http://localhost:8080/rimus/";
    define('RACINE', $racine);
    define('URL', $url);
    $isDevMode = true;
    $proxyDir = null;
    $cache = null;
    $useSimpleAnnotationReader = false;
    $paths = array(__DIR__."/src");

    // database
    $conn = array (
        'driver' => 'pdo_mysql',
        'host' => 'localhost',
        'user' => 'root',
        'password' => '',
        'dbname' => 'rimus'
    );

    $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);

    //Entity Manager
    $entityManager = EntityManager::create($conn,$config);
    $entityManager = $entityManager;
?>