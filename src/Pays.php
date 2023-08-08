<?php
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity
 * @ORM\Table(name="pays")
 */
class Pays
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
    private $alpha3;
    
    /**
     *
     * @ORM\Column(type="string")
     */
    private $nom_fr;
    
    /**
     *
     * @ORM\Column(type="string")
     */
    private $nom_en;

   
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
    {
       
    }

    // Initialiser le password et le level
    public function initializeData($v_code, $v_alpha3, $v_nom_fr, $v_nom_en)
    {
        $this->code = $v_code;
        $this->alpha3 = $v_alpha3;
        $this->nom_fr = $v_nom_fr;
        $this->nom_en = $v_nom_en;
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
     * Get the value of alpha3
     */ 
    public function getAlpha3()
    {
        return $this->alpha3;
    }

    /**
     * Set the value of alpha3
     *
     * @return  self
     */ 
    public function setAlpha3($alpha3)
    {
        $this->alpha3 = $alpha3;

        return $this;
    }

    /**
     * Get the value of nom_fr
     */ 
    public function getNom_fr()
    {
        return $this->nom_fr;
    }

    /**
     * Set the value of nom_fr
     *
     * @return  self
     */ 
    public function setNom_fr($nom_fr)
    {
        $this->nom_fr = $nom_fr;

        return $this;
    }

    /**
     * Get the value of nom_en
     */ 
    public function getNom_en()
    {
        return $this->nom_en;
    }

    /**
     * Set the value of nom_en
     *
     * @return  self
     */ 
    public function setNom_en($nom_en)
    {
        $this->nom_en = $nom_en;

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