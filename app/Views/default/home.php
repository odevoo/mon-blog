<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
	<h2>Bonjour <?php echo $user['username'] ?> !!!</h2>
	<p>Vous avez atteint la page d'accueil. Bravo.</p>
	<?php echo var_dump($_SESSION); ?>
<?php $this->stop('main_content') ?>
