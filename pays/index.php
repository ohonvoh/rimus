<?php
session_start();
$entityManager = null;
require_once "../bootstrap.php";
require_once RACINE.'controller/PaysController.php';
$loader = new \Twig\Loader\FilesystemLoader(RACINE . '/templates');
$template = new \Twig\Environment($loader, [
    'cache' => false
]);

$paysController = new PaysController($entityManager);
$response = null;
if (isset($_SESSION["connectedUser"])) {
    if (! empty($_POST)) {
        // Ajout d'un nouvel Pays
        if (isset($_POST['submit'])) {
            $paysController->getNewPays()->initializeData($_POST['code'], $_POST['alpha3'], $_POST['nomfr'], $_POST['nomen']);
            $response = $paysController->insert();
            if ($response->getStatus() == 1) {
                $paysController = new PaysController($entityManager);
            }
        }

        // Modifier un Pays
        if (isset($_POST['submitEdit'])) {
            $code = $_POST["update-code"];
            $response = $paysController->edit($code, $_POST["update-alpha3"], $_POST["update-nomfr"], $_POST["update-nomen"]);
        }

        // Supprimer un Pays
        if (isset($_POST['submitDelete'])) {
            $codeDelete = $_POST["codeDelete"];
            $response = $paysController->deleteBy($codeDelete);
        }
    }
    // Liste des Payss
    $users = $paysController->findAll();
    echo $template->render('pays.html.twig', [
        'menu_dashboard' => 'inactive',
        'menu_pays' => 'active',
        'PaysController' => $paysController,
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