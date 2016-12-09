<?php $this->layout('layout', ['title' => 'Inscription']) ?>


<?php $this->start('main_content') ?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<form method="POST" class="form-inline" action="<?= $this->url('default_traitementInscription') ?>">
				  <div class="form-group">
				    <label for="username">Nom</label>
				    <input type="text" class="form-control" id="username" name="username" placeholder="Jane Doe">
				  </div>
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="email" class="form-control" id="email" name="email" placeholder="jane.doe@example.com">
				  </div>
				   <div class="form-group">
				    <label for="password">Password</label>
				    <input type="password" class="form-control" id="password" name="password" placeholder="jane.doe@example.com">
				  </div>
				  <button id="inscription" type="submit" class="btn btn-default">S'inscrire</button>
				</form>
			</div>
		</div>
	</div>
</section>

<?php $this->stop('main_content') ?>
