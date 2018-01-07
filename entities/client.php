 <?php
use Doctrine\ORM\Mapping as ORM;

/**
* client
* @ORM\Table(name="client")
* @ORM\Entity
**/


class Client
{

	/**
	* @var integer
	* @ORM\Column(name="num",type="integer",nullable=false)
	* @ORM\Id
	* @ORM\GeneratedValue(strategy="IDENTITY")
    */
	private $num;
	
	/**
	* @var string
	* @ORM\Column(name="nom",type="string",length=255,nullable=false)
    */
	private $nom;

    /**
     * @var string
     * @ORM\Column(name="prenom",type="string",length=255,nullable=false)
     */
    private $prenom;

    /**
     * @var string
     * @ORM\Column(name="sexe",type="string",length=255,nullable=false)
     */
    private $sexe;

    /**
     * @var string
     * @ORM\Column(name="ddn",type="string",length=255,nullable=false)
     */
    private $ddn;

    /**
     * @var string
     * @ORM\Column(name="adresse",type="string",length=255,nullable=false)
     */
    private $adresse;


public function __construct($nom,$prenom,$sexe,$ddn,$adresse)
	{
		$this->nom = $nom;
		$this->prenom=$prenom;
		$this->sexe = $sexe;
		$this->ddn=$ddn;
		$this->adresse = $adresse;
		
	}
public function getNum()
{
	return $this->num;
}
public function getNom(){
    return $this->nom;
}

public function setNom($nom)
    {
        $this->nom = $nom;
    }

public function getPrenom(){
	return $this->prenom;
}
public function setPrenom($prenom){
	$this->prenom = $prenom;
}

public function getSexe(){
	return $this->sexe;
}
public function setSexe($sexe){
	$this->sexe = $sexe;
}

public function getDdn(){
	return $this->ddn;
}
public function setDdn($ddn){
	$this->ddn = $ddn;
}
public function getAdresse(){
	return $this->adresse;
}
public function setAdresse($adresse){
	$this->adresse  = $adresse;
}


public function toString()
	{
		return "Num: ".$this->getNum()." Nom : ".$this->getNom()." Sexe : ".$this->getSexe()." Date De Naissance : ".$this->getDdn()." Adresse : ".$this->getAdresse();
	}
public function afficher(){
	echo $this->toString();
}
public function toArray()
	{
		return array($this->getNum(),$this->getNom(),$this->getPrenom(),$this->getSexe(),$this->getDdn(),$this->getAdresse());
	}
}

?>

