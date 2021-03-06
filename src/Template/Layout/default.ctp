<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

	<?= $this->Html->script('jquery-3.2.0.min') ?>
    <?= $this->Html->script('bootstrap.min') ?>		
    <?= $this->Html->css('bootstrap.min') ?>
    <?= $this->Html->css('base.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
   <div class="background">
	<header class="row ">
		<div class="row header-title" >
			<div class="col-sm-12 col-md-12 "></div> 
		</div>
	</header>

	<div class="container-fluid">  
		<nav class="navbar navbar-inverse">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-4">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse-4">
					<ul class="nav navbar-nav navbar-left">
						<li class = "active"><?= $this->Html->link ('<span class="glyphicon glyphicon-home">&#8194;</span>Inicio',['controller'=>'index1','action'=> 'index2'],['escape' => false]);?></li>
						<li><?= $this->Html->link ('<span class="glyphicon glyphicon-info-sign">&#8194;</span>Información',['controller'=>'informacion','action'=> 'index1'],['escape' => false]);?></li>
						<li class="dropdown" id="accountmenu">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-map-marker">&#8194;</span>Recorridos<b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><?= $this->Html->link ('<span class="glyphicon glyphicon-chevron-right">&#8194;</span>Descripción general',['controller'=>'recorrido','action'=> 'descripcion'],['escape' => false]);?></li>
									<li><?= $this->Html->link ('<span class="glyphicon glyphicon-chevron-right">&#8194;</span>Recorrido 1',['controller'=>'recorrido','action'=> 'recorrido1'],['escape' => false]);?></li>
									<li><?= $this->Html->link ('<span class="glyphicon glyphicon-chevron-right">&#8194;</span>Recorrido 2',['controller'=>'recorrido','action'=> 'recorrido2'],['escape' => false]);?></li>
								</ul>
						</li>
						<li><?= $this->Html->link ('<span class="glyphicon glyphicon-picture">&#8194;</span>Galería',['controller'=>'recorrido','action'=> 'recorrido2'],['escape' => false]);?></li>
						<li><?= $this->Html->link ('<span class="glyphicon glyphicon-user">&#8194;</span>Contacto',['controller'=>'recorrido','action'=> 'recorrido2'],['escape' => false]);?></li>
					</ul>
				</div>
		  </div>
		</nav>
	</div>


    <?= $this->Flash->render() ?>

		<article>
			<div style="min-height: 65vh;"> 
				<?= $this->fetch('content') ?>
			</div>
		</article>
	<footer class="row mdl-mega-footer ">
	</footer>
	
</div>
</body>
</html>
