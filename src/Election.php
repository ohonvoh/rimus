<?php
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity
 * @ORM\Table(name="election")
 */
class Election
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
     * @ORM\Column(type="string")
     */
    private $titre;
    
    /**
     *
     * @ORM\Column(type="string")
     */
    private $observation;
    
    /**
     *
     *@ORM\ManyToOne(targetEntity="Institution")
     *@ORM\JoinColumn(name="institution_code", referencedColumnName="code")
     */
    private Institution $institution;
    
    /**
     *
     * @ORM\Column(type="date")
     */
    private $dateElection;
    
    /**
     *
     * @ORM\Column(type="integer")
     */
    private $anneeElection;
   
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


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @return mixed
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * @return Institution
     */
    public function getInstitution()
    {
        return $this->institution;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @param mixed $observation
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;
    }

    /**
     * @param Institution $institution
     */
    public function setInstitution($institution)
    {
        $this->institution = $institution;
    }

    // Constructeur par défaut
    public function __construct()
    {
       
    }

    // Initialiser le password et le level
    public function initializeData($v_id, $v_titre)
    {
        $this->id = $v_id;
        $this->titre = $v_titre;
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
     * @return  self
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
     * @return  self
     */ 
    public function setUpdateAt($updateAt)
    {
        $this->updateAt = $updateAt;

        return $this;
    }
    
    
}
?>