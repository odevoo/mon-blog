<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/admin_style.css') ?>">
	<script src="<?= $this->assetUrl('vendor/jquery/jquery.min.js') ?>"></script>
</head>
<body>
	<div class="container">
		<header>
			<h1>W :: <?= $this->e($title) ?></h1>
			<a href="<?= $this->url('admin_traitementDeconnexion'); ?>">Déconnexion</a>
		</header>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	</div>

</body>
</html>