<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel;
use \Model\PagesModel;
use W\Security\AuthentificationModel as Auth;

class AdminController extends Controller
{

	/**
	 * Page de contact 
	 */
	public function index()
	{
		$this->allowTo('admin');
		$this->show('admin/index');
	}

	public function ajoutPage(){
		$this->allowTo('admin');
		$users = new UsersModel();
		$allUser = $users->findAll();

		$categories = ['basique', 'equipe'];

		$this->show('admin/ajoutPage', ['users' => $allUser, 'categories' => $categories]);
	}

	public function ajoutPageBdd(){
		$this->allowTo('admin');
		$page = new PagesModel;
		$dataPage = $_POST;
		
		if($_POST['categorie'] === 'equipe'){
			$nom_du_fichier = $_FILES['fichier']['name'];
			$dossier_destination = '../app/Views/equipe/' . $nom_du_fichier;
			$tmp =  $_FILES['fichier']['tmp_name'];
			if(!is_uploaded_file($tmp)){
				exit("Fichier introuvable");
			}
			
			if(!move_uploaded_file($tmp , $dossier_destination)){
				$erreur = 'Erreur, impossible de copier le fichier dans:' . $dossier_destination;
				exit($erreur);
			}
			$dataPage['data']['template'] = $nom_du_fichier;

		}
		$page->createPage($dataPage);
		$this->redirectToRoute('admin_ajoutPage');
	}

	public function connexion(){
		$this->show('admin/connexion');
	}

	public function traitementConnexion(){
		$auth = new Auth;
		$usernameOrEmail = $_POST['identifiant'];
		$plainPassword = $_POST['password'];

		$userId = $auth->isValidLoginInfo($usernameOrEmail, $plainPassword);

		if($userId !== 0){
			$UsersModel = new UsersModel;
			$user = $UsersModel->find($userId);

			$auth->logUserIn($user);
			if($user['role'] === 'admin'){
				$this->redirectToRoute('admin_index');
			}else{
				$this->redirectToRoute('default_home');
			}
		}else{
			$this->redirectToRoute('admin_connexion');
		}
	}

	public function traitementDeconnexion(){
		$auth = new Auth;
		$auth->logUserOut();
		$this->redirectToRoute('default_home');
	}
}