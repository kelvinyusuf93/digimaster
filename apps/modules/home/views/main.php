<?php $this->load->view('header'); ?>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner banner">
			<div class="item active">
				<img src="images/banner-1.jpg" alt="">
			</div>

			<div class="item">
				<img src="images/banner-2.jpg" alt="">
			</div>

			<div class="item">
				<img src="images/banner-3.jpg" alt="">
			</div>
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
			<div class="col-md-3">
				<select class="form-control" id="sel1">
					<option>Choose Subject</option>
					<option>Subject 1</option>
					<option>Subject 2</option>
					<option>Subject 3</option>
					<option>Subject 4</option>
					<option>Subject 5</option>
					<option>Subject 6</option>
					<option>Subject 7</option>
					<option>Subject 8</option>
					<option>Subject 9</option>
					<option>Subject 10</option>
				</select>
			</div>
			<div class="col-md-7">
				<form action="#" method="GET" class="navbar-form navbar-left m-t-0" role="search">
					<div class="col-md-5 input-group search">
						<input type="text" class="form-control input-block" placeholder="Temukan training yang cocok untuk Anda...">
						<div class="input-group-btn">
							<button class="btn btn-default" type="submit">
								<i class="icon-search"></i>
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
							<div class="col-sm-6 col-md-3">
								<div class="thumbnail">
									<img src="images/banner-4.jpg" alt="...">
									<div class="caption">
										<h3>Judul</h3>
										<span>Harga</span>
										<div align="center"><br>
											<a href="#" class="btn btn-view-more" role="button">Detail <i class="icon-double-angle-right"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="thumbnail">
									<img src="images/banner-4.jpg" alt="...">
									<div class="caption">
										<h3>Judul</h3>
										<span>Harga</span>
										<div align="center"><br>
											<a href="#" class="btn btn-view-more" role="button">Detail <i class="icon-double-angle-right"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="thumbnail">
									<img src="images/banner-4.jpg" alt="...">
									<div class="caption">
										<h3>Judul</h3>
										<span>Harga</span>
										<div align="center"><br>
											<a href="#" class="btn btn-view-more" role="button">Detail <i class="icon-double-angle-right"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<div class="thumbnail">
									<img src="images/banner-4.jpg" alt="...">
									<div class="caption">
										<h3>Judul</h3>
										<span>Harga</span>
										<div align="center"><br>
											<a href="#" class="btn btn-view-more" role="button">Detail <i class="icon-double-angle-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="panel-footer new-training">
						<div align="center">
							<a href="#" class="btn btn-view-more" role="button">View All Training</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $this->load->view('footer'); ?>