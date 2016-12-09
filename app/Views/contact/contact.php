<?php $this->layout('layout', ['title' => 'Contact']) ?>

<?php $this->start('main_content') ?>

	<?php if(isset($erreur) && $erreur == true){?>
	<h2 style="color:red;">Erreur !!! Votre message n'a pas été envoyé </h2>
	<code>
		<?php echo $data; ?>
	</code>
	<?php } ?>
	<?php if(isset($erreur) && $erreur == false){?>
	<h2 style="color:green;">Votre message a bien été envoyé !!!</h2>
	<code>
		<?php echo var_dump($data); ?>
	</code>
	<?php } ?>

	<h2>Vous êtes sur la page Contact utilisant le controlleur Contact !!!</h2>
		<form method="POST" action="<?= $this->url('contact_traitementform_equipe') ?>" >
			<div>
				<label for="nom">Nom:</label>
				<input type="text" name="nom">
			</div>
			<div>
				<label for="email">Email:</label>
				<input type="email" name="email">
			</div>
			<div>
				<label for="message">Message:</label>
				<textarea name="message" rows="10" cols="40"></textarea>
			</div>
			<input type="submit" name="submit" value="Envoyer">
		</form>

<?php $this->stop('main_content') ?>

