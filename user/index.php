<?php
session_start();
$entityManager = null;
require_once "../bootstrap.php";
require_once RACINE.'controller/UtilisateurController.php';
$loader = new \Twig\Loader\FilesystemLoader(RACINE . '/templates');
$template = new \Twig\Environment($loader, [
    'cache' => false
]);

$utilisateurController = new UtilisateurController($entityManager);
$response = null;
if (isset($_SESSION["connectedUser"])) {
    if (! empty($_POST)) {
        // Ajout d'un nouvel utilisateur
        if (isset($_POST['submit'])) {
            $utilisateurController->getNewUtilisateur()->initializeData($_POST['email'], $_POST['nom'], $_POST['prenoms'], $_POST['password'], $_POST['passwordConfirm'], $_POST['level']);
            $response = $utilisateurController->insert();
            if ($response->getStatus() == 1) {
                $utilisateurController = new UtilisateurController($entityManager);
            }
            if ($response->getStatus() == - 1) {
                $utilisateurController->getNewUtilisateur()->setPassword("");
                $utilisateurController->getNewUtilisateur()->setPasswordConfirm("");
            }
        }

        // Modifier un utilisateur
        if (isset($_POST['submitEdit'])) {
            $emailEdit = $_POST["updateUser-email"];
            $response = $utilisateurController->edit($emailEdit, $_POST["updateUser-nom"], $_POST["updateUser-prenoms"], $_POST["updateUser-type"]);
        }

        // Verrouiller un utilisateur
        if (isset($_POST['submitLock'])) {
            $email = $_POST["emailLock"];
            $response = $utilisateurController->lock($email);
        }

        // Dévrouiller un utilisateur
        if (isset($_POST['submitUnLock'])) {
            $email = $_POST["emailUnLock"];
            $response = $utilisateurController->unlock($email);
        }

        // Initialiser le mot de passe
        if (isset($_POST['submitInitPassword'])) {
            $email = $_POST["initPasswordEmail"];
            $password = $_POST["initPasswordPassword"];
            $response = $utilisateurController->initPassword($email, $password);
        }

        // Supprimer un utilisateur
        if (isset($_POST['submitDelete'])) {
            $emailDelete = $_POST["emailDelete"];
            $response = $utilisateurController->deleteBy($emailDelete);
        }
    }
    // Liste des utilisateurs
    $users = $utilisateurController->findAll();
    echo $template->render('user.html.twig', [
        'menu_dashboard' => 'inactive',
        'menu_user' => 'active',
        'utilisateurController' => $utilisateurController,
        'response' => $response,
        'connectedUserNom' => $_SESSION["nom"],
        'connectedUserPrenoms' => $_SESSION["prenoms"],
        'connectedUserType' => $_SESSION["level"],
        'users' => $users,
        'RACINE'=> RACINE,
        'URL'=> URL
    ]);
} else {
    header("Location: /rimus");
}

?>