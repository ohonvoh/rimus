<?php
session_start();
$entityManager=null;
require_once "./bootstrap.php";
require_once RACINE.'controller/UtilisateurController.php';
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
$template = new \Twig\Environment($loader, [
    'cache' => false
]);

$utilisateurController = new UtilisateurController($entityManager);
$response = null;
// Si la personne est déjà connectée
if (isset($_SESSION["connectedUser"])) {
    echo $template->render('dashboard.html.twig', [
        'menu_dashboard' => 'active',
        'menu_user' => 'inactive',
        'utilisateurController' => $utilisateurController,
        'response' => $response,
        'connectedUserNom' => $_SESSION["nom"],
        'connectedUserPrenoms' => $_SESSION["prenoms"],
        'connectedUserType' => $_SESSION["level"],
        'RACINE'=> RACINE,
        'URL'=> URL
    ]);
} else {
    if (! empty($_POST)) { // Si la personne saisit les infos et clique sur "Connecter"
        if (isset($_POST['submit'])) {
            $result = $utilisateurController->findBy($_POST['email'], $_POST['password']); // Vérifier dans la BDD
            $response = $result["reponse"];
            $connectedUser = $result["connectedUser"];
            if ($response->getStatus() == 1) { // Lorsque les paramètres sont bons
                $_SESSION["connectedUser"] = $connectedUser;
                $_SESSION["nom"] = $connectedUser->getNom();
                $_SESSION["prenoms"] = $connectedUser->getPrenoms();
                $_SESSION["level"] = $connectedUser->getLevel();
                echo $template->render('dashboard.html.twig', [
                    'menu_dashboard' => 'active',
                    'menu_user' => 'inactive',
                    'utilisateurController' => $utilisateurController,
                    'response' => $response,
                    'connectedUserNom' => $connectedUser->getNom(),
                    'connectedUserPrenoms' => $connectedUser->getPrenoms(),
                    'connectedUserType' => $connectedUser->getLevel(),
                    'isConnected' => true,
                    'RACINE'=> RACINE,
                    'URL'=> URL
                ]);
            } else {
                echo $template->render('login.html.twig', [
                    'response' => $response,
                    'RACINE'=> RACINE,
                    'URL'=> URL
                ]);
            }
        }
    } else
        echo $template->render('login.html.twig',[
            'RACINE'=> RACINE,
            'URL'=> URL
        ]);
}

?>