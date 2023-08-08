<?php
session_start();
$entityManager = null;
require_once "../bootstrap.php";
require_once RACINE.'controller/ElectionController.php';
$loader = new \Twig\Loader\FilesystemLoader(RACINE . '/templates');
$template = new \Twig\Environment($loader, [
    'cache' => false
]);

$electionController = new ElectionController($entityManager);
$response = null;
if (isset($_SESSION["connectedUser"])) {
    if (! empty($_POST)) {
        // Ajout d'un nouvel Election
        if (isset($_POST['submit'])) {
            $electionController->getNewElection()->initializeData($_POST['code'], $_POST['libelle']);
            $response = $electionController->insert();
            if ($response->getStatus() == 1) {
                $electionController = new ElectionController($entityManager);
            }
        }

        // Modifier un Election
        if (isset($_POST['submitEdit'])) {
            $code = $_POST["updatecode"];
            $response = $electionController->edit($code, $_POST["updatelibelle"]);
        }

        // Supprimer un Election
        if (isset($_POST['submitDelete'])) {
            $codeDelete = $_POST["codeDelete"];
            $response = $electionController->deleteBy($codeDelete);
        }
    }
    // Liste des Elections
    //$users = $electionController->findAll();
    echo $template->render('election.html.twig', [
        'menu_election' => 'active',
        'menu_open' => 'menu-open',
        'ElectionController' => $electionController,
        'response' => $response,
        'connectedUserNom' => $_SESSION["nom"],
        'connectedUserPrenoms' => $_SESSION["prenoms"],
        'connectedUserType' => $_SESSION["level"],
        //'users' => $users,
        'RACINE'=> RACINE,
        'URL'=> URL
    ]);
} else {
    header("Location: /rimus");
}

?>