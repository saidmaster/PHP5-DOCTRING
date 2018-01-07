<?php
require_once 'vue.php';
class v_insert extends vue{

	public function insert()
	{
		$this->content.="<form action='controllor.php' method='get'>
		<input type='hidden' name='num' value=''>
		<table border=1 align=center>
		<tr><th>Nom</th><td><input type='text' name='nom'></td></tr>
		<tr><th>Prenom</th><td><input type='text' name='prenom' ></td></tr>
		<tr><th>Sexe</th><td> M <input type='radio' name='sexe' value='M' checked> F <input type='radio' name='sexe' value='F' ></td></tr>
		<tr><th>DateNaissance</th><td><input type='text' name='DateNaissance' ></td></tr>
		<tr><th>Adresse</th><td><textarea name='Adresse'></textarea></td></tr>
		<input type='hidden' name='action' value='add'>
		<tr><td><div align='center'>
		<input type='submit' value='Ajouter'>
		</div></td><td><div align='center'>
		<input type='reset' value='Annuler'>
		</div></td></tr>		
		</table>
		</form>";
	}

	}
?>