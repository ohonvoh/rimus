<?php
require_once RACINE . 'src/Election.php';
require_once "Response.php";

class ElectionController
{

    private Election $newElection;

    private Election $selectedElection;

    private $entityManager;

    public function __construct($v_entityManager)
    {
        $this->newElection = new Election();
        $this->entityManager = $v_entityManager;
    }

    // Insérer une Election dans la BDD
    public function insert()
    {
        $this->newElection->prePersist(); // Date de creation et de update
        try {
            $this->entityManager->persist($this->newElection);
            $this->entityManager->flush();
            return new Response(1, "Election ajoutée avec succès !");
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
        $query = $this->entityManager->createQuery('SELECT u FROM Election u WHERE u.code = :p_code');
        $query->setParameter('p_code', $v_code);
        $users = $query->getResult(); // array of ForumUser objects
        if (sizeof($users) == 1) { // Aucun enregistrement dans la BDD
            return $users[0];
            ;
        } else
            return null;
    }

    // Supprimer une Election
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

    // Modifier un Election
    public function edit($v_code, $v_libelle)
    {
        $selectedElection = $this->findByID($v_code);
        $selectedElection->setLibelle($v_libelle);
        try {
            $this->entityManager->merge($selectedElection);
            $this->entityManager->flush();
            return new Response(1, "Modification effectuée avec succès !");
        } catch (Exception $e) {
            return new Response(- 1, "Echec de la modification !");
        }
    }

    // Rechercher un user dans la BDD par son email
    public function findAll()
    {
        $query = $this->entityManager->createQuery('SELECT u FROM Election u');
        return $query->getResult(); // array of ForumUser objects
    }

    /**
     * Get the value of newElection
     */
    public function getNewElection()
    {
        return $this->newElection;
    }

    /**
     * Set the value of newElection
     *
     * @return self
     */
    public function setNewElection($newElection)
    {
        $this->newElection = $newElection;

        return $this;
    }
}
?>