<?php

namespace Controller;

use PHPMailer;
use \W\Controller\Controller;
use \W\Model\UsersModel;

class ContactController extends Controller
{

	/**
	 * Page de contact 
	 */
	public function index()
	{
		$this->show('contact/contact');
	}

	/**
	 * Traitement du formulaire
	 */
	public function traitementForm($id = ''){
		$user = new UsersModel;
		if($id !== ''){
			$equipier =  $user->find($id);
		}else{
			$equipiers =  $user->findAll();
		}

		$expediteur = $_POST['nom'];
		$email_expediteur = $_POST['email'];
		$message = $_POST['message'];

		$mail = new PHPMailer();

		$mail->isSMTP(); // on va se connecter directement au serveur SMTP
		$mail->isHTML(true); // on va utiliser le format HTML pour le message
		$mail->Host = "smtp.gmail.com"; // le serveur SMTP utilisé
		$mail->Port = 465; //le port utilisé pour le SMTP
		$mail->SMTPAuth = true; // on va donner des infos au serveur (login/mdp)
		$mail->SMTPSecure = 'ssl'; //certificat SSL
		$mail->Username = "bioforce3@gmail.com"; // utilisateur pour le SMTP
		$mail->Password= "Azerty1234"; // mot de passe pour le SMTP
		$mail->setFrom('bioforce3@gmail.com', 'BioForce 3'); // l'expediteur
		if($id !== ''){
			$mail->addAddress($equipier['email']); // le destinataire
		}else{
			foreach ($equipiers as $equipier) {
				$mail->addAddress($equipier['email']); // les destinataires
			}
		}

		$mail->Subject = 'message de '.$expediteur; // le sujet du mail
		$mail->Body = "<html>
						<head>
						<style>
						h1{color: blue;}
						</style>
						</head>
						<body>
						<h1>Message de ".$expediteur."</h1>
						<h3>Email: ".$email_expediteur."</h3>
						".$message."
						</body>
						</html>"; // le contenu du mail en HTML

		if(!$mail->send()) // si l'envoi délire...
		{
			$this->show('contact/contact', ['erreur' => true, 'data' => $mail]);
		}else{
			$this->show('contact/contact', ['erreur' => false, 'data' => $mail]);
		}
		
	}
}