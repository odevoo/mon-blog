<?php $this->layout('layout', ['title' => 'Roberjot Gino']) ?>

<?php $this->start('main_content') ?>

	<br><br><br>
	<h1>Présentation</h1>
		<p><img src="<?= $this->assetUrl('img/dbz.jpg') ?>" alt=""><?php echo $presentation; ?></p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores sapiente hic nostrum magnam, provident numquam possimus illo mollitia repellendus ipsum eum assumenda, quibusdam itaque aliquid autem ducimus. Quos, facere, nostrum?</p>

		<section id="services" class="services ">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 col-lg-12  skill">
                    <h2 class="text-primary">Compétences</h2>
                    <hr class="small">
                    <div class="row ">
                        <div class="col-md-2 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-html5 fa-stack-1x text-primary"></i>
                            </span>
                                <h4 class="text-primary">
                                    <strong>HTML</strong>
                                </h4>                                        
                                <div class="progress">
                                  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                    <span class="">50%</span>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-css3 fa-stack-1x text-primary"></i>
                            </span>
                                <h4 class="text-primary">
                                    <strong>CSS</strong>
                                </h4>                                
                                <div class="progress">
                                  <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                    <span class="">80%</span>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-jsfiddle fa-stack-1x text-primary"></i>
                            </span>
                                <h4 class="text-primary">
                                    <strong>JS</strong>
                                </h4>                                
                                <div class="progress">
                                  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                    <span class="">70%</span>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-product-hunt fa-stack-1x text-primary"></i>
                            </span>
                                <h4 class="text-primary">
                                    <strong>PHP</strong>
                                </h4>                               
                                <div class="progress">
                                  <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 55%">
                                    <span class="">55%</span>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-scribd fa-stack-1x text-primary"></i>
                            </span>
                                <h4 class="text-primary">
                                    <strong>SQL</strong>
                                </h4>                                
                                <div class="progress">
                                  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                    <span class="">80%</span>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-shield fa-stack-1x text-primary"></i>
                            </span>
                                <h4 class="text-primary">
                                    <strong>SEO</strong>
                                </h4>                                
                                <div class="progress">
                                  <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100" style="width: 50%">    
                                    <span class="">50%</span>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>



        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4 text-center">
                    <h4 class="title2"><strong>Contact</strong>
                    </h4>
                    <hr class="small">
                    <form method="post" action="<?= $this->url('contact_traitementform',['id' => $id]) ?>">
                        <div class="input-group">
                            <span class="input-group-addon" id="sizing-addon2"><span class="text-primary glyphicon glyphicon-user " aria-hidden="true"></span></span>
                            <input type="email" class="form-control form" placeholder="Email" name="expediteur" id="email" required aria-describedby="sizing-addon2">                            
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon" id=""><span class="text-primary glyphicon glyphicon-pencil " aria-hidden="true"></span></span>
                            <textarea class="form-control form" placeholder="Commentaire" aria-describedby="sizing-addon2" name="message" id="message"></textarea>              
                        </div>
                        <input type="submit" name="btnSub" value="Envoyer" class="btn btn-lg btn-success bouton2 " />

                    </form>
                    </div>
                    </div>
                    </div>                    



<?php $this->stop('main_content') ?>