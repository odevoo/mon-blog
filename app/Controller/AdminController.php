<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel;
use \Model\PagesModel;

class AdminController extends Controller
{

	/**
	 * Page de contact 
	 */
	public function index()
	{
		$this->show('admin/index');
	}

	public function ajoutPage(){
		$users = new UsersModel();
		$allUser = $users->findAll();

		$categories = ['basique', 'equipe'];

		$this->show('admin/ajoutPage', ['users' => $allUser, 'categories' => $categories]);
	}

	public function ajoutPageBdd(){
		$page = new PagesModel;

		$page->createPage($_POST);

		$this->redirectToRoute('admin_ajoutPage');
	}
}