<?php
require_once 'vue.php';
class v_one extends vue{

public function one($client)
	{
		$this->content.="<table border=1 align=center>";
		$this->content.="<tr><th>Code</th><td>".$client[0]."</td></tr>";
		$this->content.="<tr><th>Nom</th><td>".$client[1]."</td></tr>";
		$this->content.="<tr><th>Prenom</th><td>".$client[2]."</td></tr>";
		$this->content.="<tr><th>Sexe</th><td>".$client[3]."</td></tr>";
		$this->content.="<tr><th>DateNaissance</th><td>".$client[4]."</td></tr>";
		$this->content.="<tr><th>Adresse</th><td>".$client[5]."</td></tr>";
		$this->content.="</table>";
		$this->content.="<a href='controllor.php'>Retour</a>";
	}
	
}
?>