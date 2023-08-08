<?php
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity
 * @ORM\Table(name="utilisateur")
 */
class Utilisateur
{

    /**
     *
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    private $email;

    /**
     *
     * @ORM\Column(type="string")
     */
    private $password;

    private $passwordConfirm;

    /**
     *
     * @ORM\Column(type="string")
     */
    private $nom;

    /**
     *
     * @ORM\Column(type="string")
     */
    private $prenoms;

    /**
     *
     * @ORM\Column(type="integer")
     */
    private $verrouillage;

    // 0 dévérouillé, 1 verrouillé
    /**
     *
     * @ORM\Column(type="integer")
     */
    private $level;

    // 0 simple, 1 admin, 2 superadmin
    /**
     *
     * @ORM\Column(type="integer")
     */
    private $premiereconnexion;

    // 0 premiere connexion pour inciter à modifier le mot de passe
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

    private $locked;
    // Date de modification

    // getters and setters

    // Constructeur par défaut
    public function __construct()
    {
        $this->verrouillage = 0;
        $this->level = 0;
    }

    // Initialiser le password et le level
    public function initialize($v_password, $v_level)
    {
        $this->password = $v_password;
        $this->level = $v_level;
        $this->verrouillage = 0;
    }

    // Initialiser le password et le level
    public function initializeData($v_email, $v_nom, $v_prenoms, $v_password, $v_passwordConfirm, $v_level)
    {
        $this->email = $v_email;
        $this->nom = $v_nom;
        $this->prenoms = $v_prenoms;
        $this->password = $v_password;
        $this->passwordConfirm = $v_passwordConfirm;
        $this->level = $v_level;
        $this->verrouillage = 0;
        $this->premiereconnexion = 0;
    }

    // Crypter le mot de passe
    public function crypterPassword()
    {
        $this->password = sha1($this->password);
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
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenoms
     */
    public function getPrenoms()
    {
        return $this->prenoms;
    }

    /**
     * Set the value of prenoms
     *
     * @return self
     */
    public function setPrenoms($prenoms)
    {
        $this->prenoms = $prenoms;

        return $this;
    }

    /**
     * Get the value of level
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set the value of level
     *
     * @return self
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get the value of level
     */
    public function getLevelLabel()
    {
        switch ($this->level) {
            case 0:
                return "Normal";
                break;
            case 1:
                return "Administrateur";
                break;
            case 2:
                return "Super Administrateur";
                break;
        }
    }

    /**
     * Get the value of passwordConfirm
     */
    public function getPasswordConfirm()
    {
        return $this->passwordConfirm;
    }

    /**
     * Set the value of passwordConfirm
     *
     * @return self
     */
    public function setPasswordConfirm($passwordConfirm)
    {
        $this->passwordConfirm = $passwordConfirm;

        return $this;
    }

    // Si les mots sont identiques
    public function isEqualPassword()
    {
        return $this->getPassword() == $this->getPasswordConfirm();
    }
    
    // Si c'est vérrouillé
    public function getLocked()
    {
        return $this->getVerrouillage() == 1;
    }

    /**
     * Get the value of verrouillage
     */
    public function getVerrouillage()
    {
        return $this->verrouillage;
    }

    /**
     * Set the value of verrouillage
     *
     * @return self
     */
    public function setVerrouillage($verrouillage)
    {
        $this->verrouillage = $verrouillage;

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
     * Get the value of premiereconnexion
     */ 
    public function getPremiereconnexion()
    {
        return $this->premiereconnexion;
    }

    /**
     * Set the value of premiereconnexion
     *
     * @return  self
     */ 
    public function setPremiereconnexion($premiereconnexion)
    {
        $this->premiereconnexion = $premiereconnexion;

        return $this;
    }
}
?>