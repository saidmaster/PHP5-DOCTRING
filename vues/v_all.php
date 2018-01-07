<?php
require_once 'vue.php';
class vall extends vue{

	
	
public function all($clients)
{
	$this->content.="<table border=1 align=center>
	<tr><th>Code</th><th>Nom</th><th>Suppression</th><th>Modifier</th><th>Affichage</th></tr>";
	foreach ($clients as $client)
	{
		$this->content.="<tr><td>$client[0]</td><td>$client[1]</td>";
		$this->content.="<td align=center><a href=controllor.php?action=del&num=".$client[0]."><img src='../vues/images/drop.png' alt='supprimer' onClick='return confirmerSupression()'></a></td>";
		$this->content.="<td align=center><a href=controllor.php?action=update&num=".$client[0]."><img src='../vues/images/edit.png' alt='update' onClick='return confirmerModification()'></a></td>";
		$this->content.="<td align=center><a href=controllor.php?action=one&num=".$client[0]."><img src='../vues/images/view.png' alt='afficher'></a></td>";
		$this->content.="</tr>";
	}
	$this->content.="<tr><th colspan='5'>Nombre de clients : ";
	$this->content.=count($clients);
	$this->content.="</tr>";
	$this->content.="</table>";
	$this->content.="<a href='controllor.php?action=nouveau'>Ajout nouveau client</a>";
}
}

?>
