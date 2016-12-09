<?php $this->layout('layout', ['title' => $contenu_page->getPageTitle() ]) ?>


<?php $this->start('main_content') ?>
<?php echo $contenu_page->getData('presentation'); ?>
	<h2>Vous êtes sur une page !!!</h2>

<?php $this->stop('main_content') ?>
