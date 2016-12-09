<?php $this->layout('layout_admin', ['title' => 'Admin']) ?>

<?php $this->start('main_content') ?>
	<h2>Ajouter une page</h2>
	<form id="form" method="POST" data-url="<?= $this->url('admin_ajoutPageBdd'); ?>">
		<label for="titre">Titre</label>
		<input id="titre" type="text" name="titre" >

		<label for="categorie">categorie</label>
		<select id="categorie" name="categorie">
			<?php foreach ($categories as $categorie) {
				?><option value="<?php echo $categorie; ?>" ><?php echo $categorie; ?></option><?php
			} ?>
		</select>

		<label for="presentation">presentation</label>
		<input id="presentation" type="text" name="data[presentation]">

		<label for="competences">competences</label>
		<input id="competences" type="text" name="data[competences]">
		<div id="select_user" class="hide">
			<label for="Utilisateur">Utilisateur</label>
			
			<select id="Utilisateur" name="user_id" >
				<option disabled value="null">Aucun</option>
				<?php foreach ($users as $user) {
					?><option value="<?php echo $user['id']; ?>" ><?php echo $user['username']; ?></option><?php
				} ?>
			</select>
	</div>
		<input id="envoyer" type="submit" name="submit" value="Ajouter une page">
	</form>
	<script type="text/javascript">
		$(function($) {
			$('#envoyer').on('click', function(event){
				event.preventDefault();
				
				var data = $('#form').serialize();
				$.ajax({
				  method: "POST",
				  url: $('#form').data('url'),
				  data: data,
				}).done(function(  ) {
			    
			  });
			});

			$('select[name="categorie"]').on('change', function(){
				if($(this).val() == 'equipe'){
					$('#select_user').removeClass('hide');
				}else{
					$('#select_user').addClass('hide').find('select').val('null');
				}
			});
		});
	</script>	
<?php $this->stop('main_content') ?>