<?php
session_start();
$entityManager = null;
require_once "../bootstrap.php";
require_once RACINE.'controller/InstitutionController.php';
$loader = new \Twig\Loader\FilesystemLoader(RACINE . '/templates');
$template = new \Twig\Environment($loader, [
    'cache' => false
]);

$institutionController = new InstitutionController($entityManager);
$response = null;
if (isset($_SESSION["connectedUser"])) {
    if (! empty($_POST)) {
        // Ajout d'un nouvel Institution
        if (isset($_POST['submit'])) {
            $institutionController->getNewInstitution()->initializeData($_POST['code'], $_POST['libellecourt'], $_POST['libellelong'], $_POST['siglefr'], $_POST['sigleen'], $_POST['type']);
            $response = $institutionController->insert();
            if ($response->getStatus() == 1) {
                $InstitutionController = new InstitutionController($entityManager);
            }
        }

        // Modifier un Institution
        if (isset($_POST['submitEdit'])) {
            $code = $_POST["updatecode"];
            $response = $institutionController->edit($code, $_POST["updatelibellecourt"], $_POST["updatelibellelong"], $_POST["updatesiglefr"], $_POST["updatesigleen"], $_POST["updatetype"]);
        }

        // Supprimer un Institution
        if (isset($_POST['submitDelete'])) {
            $codeDelete = $_POST["codeDelete"];
            $response = $institutionController->deleteBy($codeDelete);
        }
    }
    // Liste des Institutions
    $users = $institutionController->findAll();
    echo $template->render('institution.html.twig', [
        'menu_dashboard' => 'inactive',
        'menu_institution' => 'active',
        'InstitutionController' => $institutionController,
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