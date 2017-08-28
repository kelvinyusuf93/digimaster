	<div class="container-fluid"><br>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<form class="form-inline" action="<?=base_url('search')?>" method="GET" >
			<div class="dropdown" style="display: inline-block;">
				<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Choose
					<span class="caret"></span></button>
					<ul class="dropdown-menu">
						<?php foreach($ms_subject as $ms): ?>
						<li><a href="#"><?=$ms['digimaster_subject_name']?></a></li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="input-group search">
					<input type="text" class="form-control input-block" placeholder="Temukan training yang cocok untuk Anda..." name="q">
					<div class="input-group-btn">
						<button class="btn btn-default" type="submit">
							<i class="fa fa-search"></i>
						</button>
					</div>
				</div>
				<div class="form-group">
					<label>Sort By:</label>
					<select class="form-control" id="sort">
						<?php foreach($sort_by as $keys => $sb): ?>
						<option value="<?=$keys?>" <?=$this->input->get('sorting') == $keys ? 'selected="selected"' : '';?>><?=$keys?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<label>Show:</label>
					<select class="form-control" id="show">
						<?php foreach($show_page as $sp): ?>
						<option value="<?=$sp?>" <?=$this->input->get('show') == $sp ? 'selected="selected"' : '';?>><?=$sp?></option>
						<?php endforeach; ?>
					</select>
					<label id="dis">Per Page</label>
				</div>
			</form>
			<hr>
			<div align="center">
				<nav aria-label="Page navigation">
					<ul class="pagination">
						<?=$paging?>
					</ul>
				</nav>
			</div>
			<div class="panel panel-default">

				<?php foreach($main_content as $mc): ?>
					<div class="panel-body shadow">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<img src="<?=img($mc['digimaster_main_img'])?>" class="img-responsive">
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<h3 class="bold"><?=$mc['digimaster_main_name']?></h3>
							<p align="justify"><?=$mc['digimaster_main_description']?></p>
							<h4 class="bold">Date: <?=date('d - M - Y', strtotime(date($mc['digimaster_main_created_on'])))?></h4>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 pad-30" align="center">
							<span class="bold price">Rp. <?=number_format($mc['digimaster_main_price'],0, ",", ".")?>,-</span><br><br><br><br>
							<a href="<?=base_url('detail/'.$mc['digimaster_main_slug'])?>">
								<button class="btn btn-primary btn-block">See Detail</button>
							</a>
						</div>
					</div>
				<?php endforeach; ?>

			</div>
		</div>
	</div>