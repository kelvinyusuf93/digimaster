<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?=css('bootstrap.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=css('custom.css')?>">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title><?=$title['digimaster_header_content']?></title>
</head>
<body>
	<header>
		<nav class="navbar navbar-default m-b-0">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a class="navbar-brand" href="<?=base_url($logo['digimaster_header_url'])?>">
						<img src="<?=img($logo['digimaster_header_img'])?>" class="logo-desktop" alt="digimaster">
					</a>
				</div>
				<div class="collapse navbar-collapse" id="nav-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<?php foreach($menu as $m): ?>
							<li><a href="<?=base_url($m['digimaster_header_url'])?>" class="<?=$active_segment === $m['digimaster_header_url'] ? 'active' : ''?>"><?=$m['digimaster_header_content']?></a></li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</nav>
	</header>