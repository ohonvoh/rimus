<?php
require_once RACINE . 'src/Fonction.php';
require_once "Response.php";

class FonctionController
{

    private Fonction $newFonction;

    private Fonction $selectedFonction;

    private $entityManager;

    public function __construct($v_entityManager)
    {
        $this->newFonction = new Fonction();
        $this->entityManager = $v_entityManager;
    }

    // Insérer une Fonction dans la BDD
    public function insert()
    {
        $this->newFonction->prePersist(); // Date de creation et de update
        try {
            $this->entityManager->persist($this->newFonction);
            $this->entityManager->flush();
            return new Response(1, "Fonction ajoutée avec succès !");
        } catch (Exception $e) {
            if ($e->getCode() == 1062)
                return new Response(- 1, "Cette fonction existe déjà !");
            else
                return new Response(- 1, "L'enregistrement n'a pu être effectué !");
        }
    }


    // Rechercher une fonction dans la BDD par son email
    public function findByID($v_code)
    {
        $query = $this->entityManager->createQuery('SELECT u FROM Fonction u WHERE u.code = :p_code');
        $query->setParameter('p_code', $v_code);
        $users = $query->getResult(); // array of ForumUser objects
        if (sizeof($users) == 1) { // Aucun enregistrement dans la BDD
            return $users[0];
            ;
        } else
            return null;
    }

    // Supprimer une Fonction
    public function deleteBy($v_code)
    {
        $pays = $this->findByID($v_code);
        try {
            $this->entityManager->remove($pays);
            $this->entityManager->flush();
            return new Response(1, "Suppression effectuée avec succès !");
        } catch (Exception $e) {
            return new Response(- 1, "Echec de la suppression !");
        }
    }

    // Modifier un Fonction
    public function edit($v_code, $v_libelle)
    {
        $selectedFonction = $this->findByID($v_code);
        $selectedFonction->setLibelle($v_libelle);
        try {
            $this->entityManager->merge($selectedFonction);
            $this->entityManager->flush();
            return new Response(1, "Modification effectuée avec succès !");
        } catch (Exception $e) {
            return new Response(- 1, "Echec de la modification !");
        }
    }

    // Rechercher un user dans la BDD par son email
    public function findAll()
    {
        $query = $this->entityManager->createQuery('SELECT u FROM Fonction u');
        return $query->getResult(); // array of ForumUser objects
    }

    /**
     * Get the value of newFonction
     */
    public function getNewFonction()
    {
        return $this->newFonction;
    }

    /**
     * Set the value of newFonction
     *
     * @return self
     */
    public function setNewFonction($newFonction)
    {
        $this->newFonction = $newFonction;

        return $this;
    }
}
?>