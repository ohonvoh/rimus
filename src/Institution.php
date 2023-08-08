<?php
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity
 * @ORM\Table(name="institution")
 */
class Institution
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
    private $libelleCourt;

    /**
     *
     * @ORM\Column(type="string")
     */
    private $libelleLong;

    /**
     *
     * @ORM\Column(type="string")
     */
    private $sigleFr;

    /**
     *
     * @ORM\Column(type="string")
     */
    private $sigleEn;

    /**
     *
     * @ORM\Column(type="integer")
     */
    private $type;

    // Sous-régionale, Régionale, Internationale

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
    public function getSigleFr()
    {
        return $this->sigleFr;
    }

    /**
     * @return mixed
     */
    public function getSigleEn()
    {
        return $this->sigleEn;
    }

    /**
     * @param mixed $sigleFr
     */
    public function setSigleFr($sigleFr)
    {
        $this->sigleFr = $sigleFr;
    }

    /**
     * @param mixed $sigleEn
     */
    public function setSigleEn($sigleEn)
    {
        $this->sigleEn = $sigleEn;
    }

    /**
     *
     * @return mixed
     */
    public function getLibelleCourt()
    {
        return $this->libelleCourt;
    }

    /**
     *
     * @return mixed
     */
    public function getLibelleLong()
    {
        return $this->libelleLong;
    }

    /**
     *
     * @param mixed $libelleCourt
     */
    public function setLibelleCourt($libelleCourt)
    {
        $this->libelleCourt = $libelleCourt;
    }

    /**
     *
     * @param mixed $libelleLong
     */
    public function setLibelleLong($libelleLong)
    {
        $this->libelleLong = $libelleLong;
    }

    /**
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     *
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    // Constructeur par défaut
    public function __construct()
    {}

    // Initialiser le password et le level
    public function initializeData($v_code, $v_libelleCourt, $v_libelleLong, $v_sigleFr, $v_sigleEn, $_type)
    {
        $this->code = $v_code;
        $this->libelleCourt = $v_libelleCourt;
        $this->libelleLong = $v_libelleLong;
        $this->sigleFr = $v_sigleFr;
        $this->sigleEn = $v_sigleEn;
        $this->type = $_type;
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
    
    /**
     * Get the value of level
     */
    public function getTypeLabel()
    {
        switch ($this->type) {
            case 0:
                return "Sous-régionale";
                break;
            case 1:
                return "Régionale";
                break;
            case 2:
                return "Internationale";
                break;
        }
    }
    
}
?>