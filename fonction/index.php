<?php
session_start();
$entityManager = null;
require_once "../bootstrap.php";
require_once RACINE.'controller/FonctionController.php';
$loader = new \Twig\Loader\FilesystemLoader(RACINE . '/templates');
$template = new \Twig\Environment($loader, [
    'cache' => false
]);

$FonctionController = new FonctionController($entityManager);
$response = null;
if (isset($_SESSION["connectedUser"])) {
    if (! empty($_POST)) {
        // Ajout d'un nouvel Fonction
        if (isset($_POST['submit'])) {
            $FonctionController->getNewFonction()->initializeData($_POST['code'], $_POST['libelle']);
            $response = $FonctionController->insert();
            if ($response->getStatus() == 1) {
                $FonctionController = new FonctionController($entityManager);
            }
        }

        // Modifier un Fonction
        if (isset($_POST['submitEdit'])) {
            $code = $_POST["updatecode"];
            $response = $FonctionController->edit($code, $_POST["updatelibelle"]);
        }

        // Supprimer un Fonction
        if (isset($_POST['submitDelete'])) {
            $codeDelete = $_POST["codeDelete"];
            $response = $FonctionController->deleteBy($codeDelete);
        }
    }
    // Liste des Fonctions
    $users = $FonctionController->findAll();
    echo $template->render('fonction.html.twig', [
        'menu_dashboard' => 'inactive',
        'menu_fonction' => 'active',
        'FonctionController' => $FonctionController,
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