<?php
	
	$w_routes = array(
		// methode , url ,   controller#method ,    nom
		['GET',      '/',    'Default#home',       'default_home'],
		['GET', '/a-propos', 'Default#aPropos', 'default_apropos'],

		/* Inscription */
		['GET', '/inscription', 'Default#inscription', 'default_inscription'],
		['POST', '/inscription', 'Default#traitementInscription', 'default_traitementInscription'],

		/* Contact */
		['GET', '/contact', 'Contact#index', 'contact_index'],
		// route à utiliser sur la page perso: elle permet de retrouver l'email du créateur de la page
		['POST', '/envoi-formulaire/[:id]', 'Contact#traitementForm', 'contact_traitementform'],
		// route à utiliser sur la page contact, elle envera un mail a toute l'equipe
		['POST', '/envoi-formulaire', 'Contact#traitementForm', 'contact_traitementform_equipe'],

		/* Equipe */
		['GET', '/equipe/[:username]', 'Equipe#afficheProfile', 'equipe_afficheProfile'],


		/* Admin */
		['GET', '/admin', 'Admin#index', 'admin_index'],

		['GET', '/admin/ajoutPage', 'Admin#ajoutPage', 'admin_ajoutPage'],
		['POST', '/admin/ajoutPage', 'Admin#ajoutPageBdd', 'admin_ajoutPageBdd'],

		// créer une page connection
		['GET', '/admin/connexion', 'Admin#connexion', 'admin_connexion'],
		['POST', '/admin/connexion', 'Admin#traitementConnexion', 'admin_traitementConnexion'],

		//deconnexion
		['GET', '/admin/deconnexion', 'Admin#traitementDeconnexion', 'admin_traitementDeconnexion'],

		/* Pages */
		['GET', '/page/[:slug]', 'Default#affichePage', 'default_affichePage']
	);
