<?php
class vue {

	protected $content;
	protected $title;
	protected $entete;
	protected $pied;
	protected $css;
	protected $js;
	
public function __construct($title,$css,$js,$entete,$pied)
{
	$this->title=$title; 
	$this->css=$css;
	$this->js=$js;
	$this->entete=$entete;
	$this->pied=$pied;
	
	$this->content="<html><head>";
	if($title!="NEANT") $this->content.="<title>".$title."</title>";
	if($css!="NEANT") $this->content.="<link REL='StyleSheet' TYPE='text/css' HREF='".$css."'/>";
	if($js!="NEANT") $this->content.="<script language='Javascript' src='".$js."'></script>";
	$this->content.="</head><body>";
	if($entete!="NEANT") $this->content.=$entete;
	$this->content.="<a href=controllor.php?action=close><img src='../vues/images/close.png'></a>";
}

public function getContent()
{
	return $this->content;
}

public function finirContent()
{
	if($this->pied!="NEANT") $this->content.=$this->pied;
	$this->content.="</body></html>";
}

public function afficher()
{
	$this->finirContent();
	echo $this->getContent();
}
	
}
?>