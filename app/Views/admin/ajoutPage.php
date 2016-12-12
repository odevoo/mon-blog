<?php $this->layout('layout_admin', ['title' => 'Admin']) ?>

<?php $this->start('main_content') ?>
	<h2>Ajouter une page</h2>
	<form id="form" method="POST" enctype="multipart/form-data" action="<?= $this->url('admin_ajoutPageBdd'); ?>">
		<div>
			<label for="titre">Titre</label>
			<input id="titre" type="text" name="titre" >
		</div>
		<div>
			<label for="categorie">categorie</label>
			<select id="categorie" name="categorie">
				<?php foreach ($categories as $categorie) {
					?><option value="<?php echo $categorie; ?>" ><?php echo $categorie; ?></option><?php
				} ?>
			</select>
		</div>
		<div>
			<label for="presentation">presentation</label>
			<input id="presentation" type="text" name="data[presentation]">
		</div>
		<div>
			<label for="competences">competences</label>
			<input id="competences" type="text" name="data[competences]">
		</div>



		<div id="champs_equipe" class="hide">
			<div>
				<label for="Utilisateur">Utilisateur</label>
				<select id="Utilisateur" name="user_id" >
					<option disabled value="null">Aucun</option>
					<?php foreach ($users as $user) {
						?><option value="<?php echo $user['id']; ?>" ><?php echo $user['username']; ?></option><?php
					} ?>
				</select>
			</div>
			<div>
				<input type="file" name="fichier">
			</div>
		</div>
		
		<input id="envoyer" type="submit" name="submit" value="Ajouter une page">
	</form>
	<script type="text/javascript">
		$(function($) {
			$('#envoyer').on('click', function(event){ // On capture l'évenement "click" sur le bouton
				event.preventDefault(); // On dit au navigateur de ne pas executer la méthode par défault, ici recharger la page pour envoyer le formulaire
				
				var form = $('#form'); //on selectionne notre formulaire
				var formdata = (window.FormData) ? new FormData(form[0]) : null; // on verifie que le navigateur supporte window.FormData
				var data = (FormData !== null) ? formdata : form.serialize();// On prépare les données avant envoi du formulaire

				$.ajax({ // on envoi la requete AJAX
				  method: "POST",
				  url: $('#form').data('url'), // Où les données sont envoyées
				  data: data,
				  contentType: false,
				  processData: false,
				}).done(function() {
			    
			  });
			});


			$('select[name="categorie"]').on('change', function(){
				if($(this).val() == 'equipe'){
					$('#champs_equipe').removeClass('hide');
				}else{
					$('#champs_equipe').addClass('hide').find('select').val('null');
				}
			});

		});
	</script>	
<?php $this->stop('main_content') ?>