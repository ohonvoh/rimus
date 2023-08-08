<?php
require_once RACINE . 'src/Pays.php';
require_once "Response.php";

class PaysController
{

    private Pays $newPays;

    private Pays $selectedPays;

    private $entityManager;

    public function __construct($v_entityManager)
    {
        $this->newPays = new Pays();
        $this->entityManager = $v_entityManager;
    }

    // Insérer un Pays dans la BDD
    public function insert()
    {
        $this->newPays->prePersist(); // Date de creation et de update
        try {
            $this->entityManager->persist($this->newPays);
            $this->entityManager->flush();
            return new Response(1, "Pays ajouté avec succès !");
        } catch (Exception $e) {
            if ($e->getCode() == 1062)
                return new Response(- 1, "Cet Pays existe déjà !");
            else
                return new Response(- 1, "L'enregistrement n'a pu être effectué !");
        }
    }


    // Rechercher un user dans la BDD par son email
    public function findByID($v_code)
    {
        $query = $this->entityManager->createQuery('SELECT u FROM Pays u WHERE u.code = :p_code');
        $query->setParameter('p_code', $v_code);
        $users = $query->getResult(); // array of ForumUser objects
        if (sizeof($users) == 1) { // Aucun enregistrement dans la BDD
            return $users[0];
            ;
        } else
            return null;
    }

    // Supprimer un Pays
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

    // Modifier un Pays
    public function edit($v_code, $v_alpha3, $v_nom_fr, $v_nom_en)
    {
        $selectedPays = $this->findByID($v_code);
        $selectedPays->setAlpha3($v_alpha3);
        $selectedPays->setNom_fr($v_nom_fr);
        $selectedPays->setNom_en($v_nom_en);
        try {
            $this->entityManager->merge($selectedPays);
            $this->entityManager->flush();
            return new Response(1, "Modification effectuée avec succès !");
        } catch (Exception $e) {
            return new Response(- 1, "Echec de la modification !");
        }
    }

    // Rechercher un user dans la BDD par son email
    public function findAll()
    {
        $query = $this->entityManager->createQuery('SELECT u FROM Pays u');
        return $query->getResult(); // array of ForumUser objects
    }

    /**
     * Get the value of newPays
     */
    public function getNewPays()
    {
        return $this->newPays;
    }

    /**
     * Set the value of newPays
     *
     * @return self
     */
    public function setNewPays($newPays)
    {
        $this->newPays = $newPays;

        return $this;
    }
}
?>