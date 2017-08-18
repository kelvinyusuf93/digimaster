<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<?php foreach($banner as $b): ?>
			<li data-target="#myCarousel" data-slide-to="<?=$b['digimaster_banner_id']-1?>" class="<?=($b['digimaster_banner_id']-1) == 0 ? 'active' : ''?>"></li>
		<?php endforeach; ?>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner banner">
		<?php foreach($banner as $b): ?>
			<div class="item <?=($b['digimaster_banner_id']-1) == 0 ? 'active' : ''?>">
				<img src="<?=img($b['digimaster_banner_img'])?>" alt="">
			</div>
		<?php endforeach; ?>
	</div>

	<!-- Left and right controls -->
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

	<div class="container-fluid">
		<br><br>
		<?php foreach($about_content as $ac): ?>
			<div class="<?=$ac['class']?>"> 
				<h2 class="bold"><?=$ac['digimaster_about_type']?></h2>
				<p><?=$ac['digimaster_about_content']?></p><br>
			</div>
		<?php endforeach; ?>
	</div>