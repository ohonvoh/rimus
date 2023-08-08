<?php
require_once RACINE . 'src/Institution.php';
require_once "Response.php";

class InstitutionController
{

    private Institution $newInstitution;

    private Institution $selectedInstitution;

    private $entityManager;

    public function __construct($v_entityManager)
    {
        $this->newInstitution = new Institution();
        $this->entityManager = $v_entityManager;
    }

    // Insérer une Institution dans la BDD
    public function insert()
    {
        $this->newInstitution->prePersist(); // Date de creation et de update
        try {
            $this->entityManager->persist($this->newInstitution);
            $this->entityManager->flush();
            return new Response(1, "Institution ajoutée avec succès !");
        } catch (Exception $e) {
            if ($e->getCode() == 1062)
                return new Response(- 1, "Cette Institution existe déjà !");
            else
                return new Response(- 1, "L'enregistrement n'a pu être effectué !");
        }
    }


    // Rechercher un user dans la BDD par son email
    public function findByID($v_code)
    {
        $query = $this->entityManager->createQuery('SELECT u FROM Institution u WHERE u.code = :p_code');
        $query->setParameter('p_code', $v_code);
        $users = $query->getResult(); // array of ForumUser objects
        if (sizeof($users) == 1) { // Aucun enregistrement dans la BDD
            return $users[0];
            ;
        } else
            return null;
    }

    // Supprimer une Institution
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

    // Modifier une Institution
    public function edit($v_code, $v_libelleCourt, $v_libelleLong, $v_sigleFR, $v_sigleEN, $v_type)
    {
        $selectedInstitution = $this->findByID($v_code);
        $selectedInstitution->setLibelleCourt($v_libelleCourt);
        $selectedInstitution->setLibelleLong($v_libelleLong);
        $selectedInstitution->setSigleFR($v_sigleFR);
        $selectedInstitution->setSigleEN($v_sigleEN);
        $selectedInstitution->setType($v_type);
        try {
            $this->entityManager->merge($selectedInstitution);
            $this->entityManager->flush();
            return new Response(1, "Modification effectuée avec succès !");
        } catch (Exception $e) {
            return new Response(- 1, "Echec de la modification !");
        }
    }

    // Rechercher un user dans la BDD par son email
    public function findAll()
    {
        $query = $this->entityManager->createQuery('SELECT u FROM Institution u');
        return $query->getResult(); // array of ForumUser objects
    }

    /**
     * Get the value of newInstitution
     */
    public function getNewInstitution()
    {
        return $this->newInstitution;
    }

    /**
     * Set the value of newInstitution
     *
     * @return self
     */
    public function setNewInstitution($newInstitution)
    {
        $this->newInstitution = $newInstitution;

        return $this;
    }
}
?>