<?php
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity
 * @ORM\Table(name="poste")
 */
class Poste
{

    /**
     *
     *@ORM\Id
     * @ORM\Column(type="string")
     */
    private $code;
    
    /**
     *
     * @ORM\Column(type="string")
     */
    private $observation;

    /**
     *
     *@ORM\ManyToOne(targetEntity="Election")
     *@ORM\JoinColumn(name="election_id", referencedColumnName="id")
     */
    private Election $election;

    /**
     *
     *@ORM\ManyToOne(targetEntity="Fonction")
     *@ORM\JoinColumn(name="fonction_code", referencedColumnName="code")
     */
    private Fonction $fonction;
    
    /**
     *
     * @ORM\Column(type="integer")
     */
    private $nbSieges;

    /**
     *
     * @ORM\Column(type="datetime")
     */
    private $createAt;

    // Date de création
    /**
     *
     * @ORM\Column(type="datetime")
     */
    private $updateAt;

    // Constructeur par défaut
    public function __construct()
    {}

    // Initialiser le password et le level
    public function initializeData($v_code, $v_libelle)
    {
        $this->code = $v_code;
        $this->libelle = $v_libelle;
    }

    // prePersist
    public function prePersist()
    {
        $this->setCreateAt(new DateTime('now'));
        $this->setUpdateAt($this->getCreateAt());
    }

    // preUpdate
    public function preUpdate()
    {
        $this->setUpdateAt(new DateTime('now'));
    }

    /**
     * Get *@ORM\Id
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return mixed
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * @return Election
     */
    public function getElection()
    {
        return $this->election;
    }

    /**
     * @return Fonction
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * @return mixed
     */
    public function getNbSieges()
    {
        return $this->nbSieges;
    }

    /**
     * @param mixed $observation
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;
    }

    /**
     * @param Election $election
     */
    public function setElection($election)
    {
        $this->election = $election;
    }

    /**
     * @param Fonction $fonction
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;
    }

    /**
     * @param mixed $nbSieges
     */
    public function setNbSieges($nbSieges)
    {
        $this->nbSieges = $nbSieges;
    }

    /**
     * Set *@ORM\Id
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of createAt
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * Set the value of createAt
     *
     * @return self
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;

        return $this;
    }

    /**
     * Get the value of updateAt
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }

    /**
     * Set the value of updateAt
     *
     * @return self
     */
    public function setUpdateAt($updateAt)
    {
        $this->updateAt = $updateAt;

        return $this;
    }
}
?>