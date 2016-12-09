<?php

namespace Pages;

class PagesModel extends Model{
	private $id;
	private $slug;
	private $data;
	private $titre;
	private $categorie;

	/**
	* Constructeur
	*/
	public function __construct(){
		// Définit la table en fonction de la config
		//$this->setTable('Pages');

		$this->dbh = ConnectionModel::getDbh();
	}

	public function getPage($id) {
		$page = $this->find($id);
		$this->id = $page['id'];
		$this->slug = $page['slug'];
		$this->data = $page['data'];
		$this->titre = $page['titre'];
		$this->categorie = $page['categorie'];
	}

	public function getPageBySlug($slug) {

		$sql = 'SELECT * FROM ' . $this->table . 
			   ' WHERE slug = :slug LIMIT 1';

		$dbh = ConnectionModel::getDbh();
		$sth = $dbh->prepare($sql);
		$sth->bindValue(':slug', $slug);
		
		if($sth->execute()){
			$foundPage = $sth->fetch();
			if($foundPage){
				$this->id = $foundPage['id'];
				$this->slug = $foundPage['slug'];
				$this->data = $foundPage['data'];
				$this->titre = $foundPage['titre'];
				$this->categorie = $foundPage['categorie'];
				//return $foundPage;
			}
		}

		return false;
	}

	public function getPageTitle() {
		return $this->titre;
	}
	public function setPageTitle($titre) {
		$this->titre = $titre;
	}

	public function createPage($page){
		$this->titre = $page['titre'];
		$this->slug = $this->slugify( $page['titre'] );
		$this->data = serialize($page['data']);
		$this->categorie = $page['categorie'];

		$this->insert(['titre' => $this->titre, 'slug' => $this->slug, 'data' => $this->data , 'categorie' => $this->categorie]);
		
	}

	public function slugify($text)
	{
		// replace non letter or digits by -
		$text = preg_replace('~[^\pL\d]+~u', '-', $text);

		// transliterate
		$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

		// remove unwanted characters
		$text = preg_replace('~[^-\w]+~', '', $text);

		// trim
		$text = trim($text, '-');

		// remove duplicate -
		$text = preg_replace('~-+~', '-', $text);

		// lowercase
		$text = strtolower($text);

		if (empty($text)) {
			return 'n-a';
		}

		return $text;
	}


}