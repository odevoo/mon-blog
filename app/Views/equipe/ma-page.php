<?php $this->layout('layout', ['title' => 'Ma page perso']) ?>

<?php $this->start('main_content') ?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3 text-center">
				<img class="img-responsive" src="" alt="">
				<div class="intro-text">
					<h1 class="name">Hello !!!</h1>
					<hr class="star-light">
					<span class="skills">Web Developer - Graphic Artist - User Experience Designer</span>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="success" id="competence">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>Presentation</h2>
				<hr class="star-light">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 text-center">
				<p> <?php echo $presentation; ?></p>
				<p> <?php echo $competences; ?></p>
			</div>
			
		</div>
	</div>
</section>

<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>Me contacter</h2>
				<hr class="star-light">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<form method="POST" action="<?= $this->url('contact_traitementform', ['id' => $id]) ?>" >
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
			</div>
		</div>
	</div>
</section>

<?php $this->stop('main_content') ?>
