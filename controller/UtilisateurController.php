<?php
require_once RACINE.'src/Utilisateur.php';
require_once "Response.php";

class UtilisateurController
{

    private Utilisateur $newUtilisateur;
    private Utilisateur $selectedUtilisateur;
    private $entityManager;

    public function __construct($v_entityManager)
    {
        $this->newUtilisateur = new Utilisateur();
        $this->entityManager = $v_entityManager;
    }

    // Insérer un utilisateur dans la BDD
    public function insert()
    {
        // Si les 2 mots de passe saisis sont conformes
        if ($this->newUtilisateur->isEqualPassword()) {
            $this->newUtilisateur->crypterPassword(); // Crypter le mot de passe
            $this->newUtilisateur->prePersist(); // Date de creation et de update
            try {
                $this->entityManager->persist($this->newUtilisateur);
                $this->entityManager->flush();
                return new Response(1, "Utilisateur ajouté avec succès !");
            }  catch (Exception $e) {
                if ($e->getCode() == 1062)
                    return new Response(- 1, "Cet utilisateur existe déjà !");
                else
                    return new Response(- 1, "L'enregistrement n'a pu être effectué !");
            }
        } else {
            return new Response(- 1, "Les mots de passe ne sont pas identiques !");
        }
    }

    // Rechercher un user dans la BDD par son email et mot de passe
    public function findBy($v_email, $v_password)
    {
        $query = $this->entityManager->createQuery('SELECT u FROM Utilisateur u WHERE u.email = :p_email AND u.password = :p_password');
        $query->setParameter('p_email', $v_email);
        $query->setParameter('p_password', sha1($v_password));
        $users = $query->getResult(); // array of ForumUser objects
        if (sizeof($users) == 0) { // Aucun enregistrement dans la BDD
            $response = new Response(- 1, "Login et mot de passe incorrects !");
            ;
            return array(
                "reponse" => $response,
                "connectedUser" => null
            );
        } else {
            //
            $connectedUser = $users[0];
            $connectedUser->setPassword(null);
            $connectedUser->setPasswordConfirm(null);
            $response = new Response(1, "Login et mot de passe corrects !");
            ;
            return array(
                "reponse" => $response,
                "connectedUser" => $connectedUser
            );
        }
    }

    // Rechercher un user dans la BDD par son email
    public function findByID($v_email)
    {
        $query = $this->entityManager->createQuery('SELECT u FROM Utilisateur u WHERE u.email = :p_email');
        $query->setParameter('p_email', $v_email);
        $users = $query->getResult(); // array of ForumUser objects
        if (sizeof($users) == 1) { // Aucun enregistrement dans la BDD
            return $users[0];
            ;
        } else
            return null;
    }

    // Supprimer un utilisateur
    public function deleteBy($v_email)
    {
        $user = $this->findByID($v_email);
        try {
            $this->entityManager->remove($user);
            $this->entityManager->flush();
            return new Response(1, "Suppression effectuée avec succès !");
        } catch (Exception $e) {
            return new Response(- 1, "Echec de la suppression !");
        }
    }
    
    // Modifier un utilisateur
    public function edit($v_email, $v_nom, $v_prenoms, $v_level)
    {
        $selectedUtilisateur = $this->findByID($v_email);
        $selectedUtilisateur->setNom($v_nom);
        $selectedUtilisateur->setPrenoms($v_prenoms);
        $selectedUtilisateur->setLevel($v_level);
        try {
            $this->entityManager->merge($selectedUtilisateur);
            $this->entityManager->flush();
            return new Response(1, "Modification effectuée avec succès !");
        } catch (Exception $e) {
            return new Response(- 1, "Echec de la modification !");
        }
    }
    
    // Verrouiller un utilisateur
    public function lock($v_email)
    {
        $selectedUtilisateur = $this->findByID($v_email);
        $selectedUtilisateur->setVerrouillage(1);
        try {
            $this->entityManager->merge($selectedUtilisateur);
            $this->entityManager->flush();
            return new Response(1, "Utilisateur verrouillé avec succès !");
        } catch (Exception $e) {
            return new Response(- 1, "Echec de l'opération !");
        }
    }
    // Déverrouiller un utilisateur
    public function unlock($v_email)
    {
        $selectedUtilisateur = $this->findByID($v_email);
        $selectedUtilisateur->setVerrouillage(0);
        try {
            $this->entityManager->merge($selectedUtilisateur);
            $this->entityManager->flush();
            return new Response(1, "Utilisateur déverrouillé avec succès !");
        } catch (Exception $e) {
            return new Response(- 1, "Echec de l'opération !");
        }
    }

    // Réinitialiser le mot de passe d'un utilisateur
    public function initPassword($v_email, $v_password)
    {
        $selectedUtilisateur = $this->findByID($v_email);
        $selectedUtilisateur->setPassword($v_password);
        $selectedUtilisateur->crypterPassword();
        $selectedUtilisateur->setPremiereconnexion(0); //Afin que l'utilisateur modifie son mot de passe à la première connexion
        try {
            $this->entityManager->merge($selectedUtilisateur);
            $this->entityManager->flush();
            return new Response(1, "Mot de passe réinitialisé avec succès !");
        } catch (Exception $e) {
            return new Response(- 1, "Echec de l'opération !");
        }
    }
    
    // Rechercher un user dans la BDD par son email
    public function findAll()
    {
        $query = $this->entityManager->createQuery('SELECT u FROM Utilisateur u');
        return $query->getResult(); // array of ForumUser objects
    }

    /**
     * Get the value of newUtilisateur
     */
    public function getNewUtilisateur()
    {
        return $this->newUtilisateur;
    }

    /**
     * Set the value of newUtilisateur
     *
     * @return self
     */
    public function setNewUtilisateur($newUtilisateur)
    {
        $this->newUtilisateur = $newUtilisateur;

        return $this;
    }
}
?>