<?php
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity
 * @ORM\Table(name="fonction")
 */
class Fonction
{

    /**
     *@ORM\Id
     * @ORM\Column(type="string")
     */
    private $code;
    
    
    /**
     *
     * @ORM\Column(type="string")
     */
    private $libelle;
   
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
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    // Constructeur par défaut
    public function __construct()
    {
       
    }

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
     * Set *@ORM\Id
     *
     * @return  self
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