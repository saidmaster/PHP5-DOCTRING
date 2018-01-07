<?php

require_once 'vue.php';
class v_update extends vue{

public function one($client)
	{
		$this->content.="<form action='controllor.php' method='get'>";
		$this->content.="<table border=1 align=center>";
		$this->content.="<tr><th>Code</th><td><input type='text' name='num' value='".$client[0]."' readonly=''></td></tr>";
		$this->content.="<tr><th>Nom</th><td><input type='text' name='nom' value='".$client[1]."'></td></tr>";
		$this->content.="<tr><th>Prenom</th><td><input type='text' name='prenom' value='".$client[2]."'></td></tr>";
		$this->content.="<tr><th>Sexe</th><td> M <input type='radio' name='sexe' value='M'";
		if($client[3]=='M') $this->content.="checked"; 
		$this->content.=">";
		$this->content.=" F <input type='radio' name='sexe' value='F'";
		if($client[3]=='F') $this->content.="checked";
		$this->content.="></td></tr>";
		$this->content.="<tr><th>DateNaissance</th><td><input type='text' name='ddn' value='".$client[4]."'></td></tr>";
		$this->content.="<tr><th>Adresse</th><td><textarea name='adresse'>".$client[5]."</textarea></td></tr>";
		$this->content.="<tr><td><div align='center'><input type='submit' value='Modifier'></div></td><td><div align='center'><input type='reset' value='Annuler'></div></td></tr>";
		$this->content.="<input type='hidden' name='action' value='valupdate'>";
		$this->content.="</table></form>";
		
	}
	
}
?>