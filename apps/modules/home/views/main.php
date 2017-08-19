<?php $this->load->view('header'); ?>
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
		<div class="row" align="center">
			<div class="col-md-1"></div>

			<div class="col-md-2">
				<div class="dropdown" style="display: inline-block;">
					<button class="btn btn-default dropdown-toggle btn-block" type="button" data-toggle="dropdown">		Choose Subject
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<?php foreach($ms_subject as $ms): ?>
						<li><a href="#"><?=$ms['digimaster_subject_name']?></a></li>
						<?php endforeach; ?>
						<li class="divider"></li>
						<li><a href="<?=base_url('all-subject')?>">View All Subject</a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-7">
				<form action="#" method="GET" class="navbar-form navbar-left m-t-0" role="search">
					<div class="col-md-5 input-group search">
						<input type="text" class="form-control input-block" placeholder="Temukan training yang cocok untuk Anda...">
						<div class="input-group-btn">
							<button class="btn btn-default" type="submit">
								<i class="fa fa-search"></i>
							</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-1"></div>
		</div>
		<br>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">New Courses</h3>
					</div>
					<div class="panel-body">
						<div class="row">

							<?php foreach($main_content as $mc): ?>
								<div class="col-sm-6 col-md-3">
									<div class="thumbnail">
										<img src="<?=img($mc['digimaster_main_img'])?>" alt="...">
										<div class="caption">
											<h3><?=$mc['digimaster_main_name']?></h3>
											<span>Rp. <?=number_format($mc['digimaster_main_price'], 0, ",",".")?> ,-</span>
											<div align="center"><br>
												<a href="<?=base_url('detail/'.$mc['digimaster_main_slug'])?>" class="btn btn-view-more" role="button">Detail <i class="icon-double-angle-right"></i></a>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
							
						</div>
					</div>
					<div class="panel-footer new-training">
						<div align="center">
							<a href="<?=base_url('list')?>" class="btn btn-view-more" role="button">View All Training</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $this->load->view('footer'); ?>