<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel;
use \Model\PagesModel;

class EquipeController extends Controller
{

	/**
	 * Page de contact 
	 */
	public function afficheProfile($username)
	{
		$user = new UsersModel;
		$equipier =  $user->getUserByUsernameOrEmail($username);

		$page = new PagesModel;
		$page->getPageByUserId($equipier['id']);
		//var_dump($page);
		$url = 'equipe/' . $page->getData('template');

		$this->show($url, ['id' => $equipier['id'], 
												'page' => $page,
												'presentation' => $page->getData('presentation'),
												'competences' => $page->getData('competences')] );
	}

}