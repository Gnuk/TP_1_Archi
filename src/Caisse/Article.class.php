<?php
namespace Caisse;
class Article{
	private $name;
	private $price;
	
	public function __construct($name, $price, $lang="fr"){
		$this->name = $name;
		$this->price = $price;
		$this->lang = $lang;
	}
	
	/**
	* Méthode getName
	*/
	public function getName() {
		return $this->name;
	}
	
	/**
	* Méthode getPrix
	*/
	public function getPrice() {
		return $this->price;
	}
	
	/**
	* Méthode getLang
	*/
	public function getLang() {
		return $this->lang;
	}



}
?>
