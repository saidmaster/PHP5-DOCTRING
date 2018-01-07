<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * user
 * @ORM\Table(name="user")
 * @ORM\Entity
 **/


class User
{

    /**
     * @var integer
     * @ORM\Column(name="id",type="integer",nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="login",type="string",length=255,nullable=false)
     */
    private $login;

    /**
     * @var string
     * @ORM\Column(name="pass",type="string",length=255,nullable=false)
     */
    private $pass;

    public function __construct($login,$pass)
    {
        $this->login = $login;
        $this->pass=$pass;

    }
    public function getId()
    {
        return $this->id;
    }
    public function getLogin(){
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getPass(){
        return $this->pass;
    }
    public function setPass($pass){
        $this->pass = $pass;
    }

    public function toString()
    {
        return "Id: ".$this->getId()." Login : ".$this->getLogin()." Pass : ".$this->getPass();
    }
    public function afficher(){
        echo $this->toString();
    }
    public function toArray()
    {
        return array($this->getId(),$this->getLogin(),$this->getPass());
    }
}

?>

