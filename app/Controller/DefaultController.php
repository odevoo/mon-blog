<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel;
use \W\Security\AuthentificationModel;
use \Model\PagesModel;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$loggedUser = $this->getUser();

		$this->show('default/home', ['user' => $loggedUser ]);
	}

	/**
	 * Page a-propos
	 */
	public function aPropos()
	{
		$this->show('default/aPropos');
	}

	public function affichePage($slug){
		$page = new PagesModel;
		$page->getPageBySlug($slug);
		if($page){
			$this->show('basique/page', ['contenu_page' => $page]);
		}else{
			$this->showNotFound();
		}
	}
	/**
	 * Page inscription
	 */
	public function inscription()
	{
		$this->show('default/inscription');
	}
	
	public function traitementInscription(){
		$user = new UsersModel;
		$auth = new AuthentificationModel;

		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $auth->hashPassword($_POST['password']);
		$role = 'admin';

		$userData = $user->insert(['username' => $username, 'email' => $email, 'password' => $password, 'role' => $role]);

		$auth->logUserIn($userData);

		$this->redirectToRoute('default_inscription');
	}
}