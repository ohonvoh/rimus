<?php
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity
 * @ORM\Table(name="soutien")
 */
class Soutien
{

    /**
     *
     *@ORM\Id
     *@ORM\Column(type="integer")
     *@ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     *@ORM\ManyToOne(targetEntity="Pays")
     *@ORM\JoinColumn(name="pays_code", referencedColumnName="code")
     */
    private Pays $pays;

    /**
     *
     *@ORM\ManyToOne(targetEntity="Fonction")
     *@ORM\JoinColumn(name="fonction_code", referencedColumnName="code")
     */
    private Fonction $fonction;

    /**
     *
     * @ORM\Column(type="string")
     */
    private $candidat;

    /**
     *
     * @ORM\Column(type="date")
     */
    private $dateSoutien;

    /**
     *
     * @ORM\Column(type="string")
     */
    private $observation;

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