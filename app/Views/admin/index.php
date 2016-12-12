<?php $this->layout('layout_admin', ['title' => 'Admin']) ?>

<?php $this->start('main_content') ?>
	<h2>Vous êtes dans l'admin.</h2>
	<?php echo var_dump($_SESSION); ?>
<?php $this->stop('main_content') ?>
