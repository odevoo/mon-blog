<?php $this->layout('layout_admin', ['title' => 'Page de connexion']) ?>

<?php $this->start('main_content') ?>
	<form id="form" method="POST" action="<?= $this->url('admin_traitementConnexion'); ?>">
		<label for="identifiant">Identifiant</label>
		<input id="identifiant" type="text" name="identifiant" >

		<label for="password">Mot de passe</label>
		<input id="password" type="password" name="password">

		<input id="envoyer" type="submit" name="submit" value="Se connecter">
	</form>
<?php $this->stop('main_content') ?>
