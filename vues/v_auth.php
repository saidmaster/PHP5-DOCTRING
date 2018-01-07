<?php
require_once 'vue.php';
class v_auth extends vue{

public function auth()
	{
		$this->content.="<form action='controllor.php' method='post'>
		<table border=1 align=center>
		<tr><th>Login</th><td><input type='text' name='login'></td></tr>
		<tr><th>Password</th><td><input type='password' name='passwd' ></td></tr>
		<input type='hidden' name='action' value='verifauth'>
		<tr><td><div align='center'>
		<input type='submit' value='Valider'>
		</div></td><td><div align='center'>
		<input type='reset' value='Annuler'>
		</div></td></tr>		
		</table>
		</form>";
	}

	}
?>