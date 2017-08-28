<div class="container-fluid">
		<br>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h2 class="bold">Search Result : <?=$result_search?></h2>
			<hr>
			<form class="form-inline">
				<div class="form-group">
					<label>Sort By:</label>
					<select class="form-control" id="sort_search">
						<?php foreach($sort_by as $keys => $sb): ?>
						<option value="<?=$keys?>" <?=$this->input->get('sorting') == $keys ? 'selected="selected"' : '';?>><?=$keys?></option>
						<?php endforeach; ?>
					</select>
				</div>

				<div class="form-group distance">
					<label>Show:</label>
					<select class="form-control" id="show_search">
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
						<?=@$paging?>
					</ul>
				</nav>
			</div>
			<div class="panel panel-default">

				<?php if(!empty($result)): ?>
					<?php foreach($result as $r): ?>
						<div class="panel-body shadow">
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
								<img src="<?=img($r['digimaster_main_img'])?>" class="img-responsive">
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<h3 class="bold"><?=$r['digimaster_main_name']?></h3>
								<p align="justify"><?=$r['digimaster_main_description']?></p>
								<h4 class="bold">Date: <?=date('d M Y', strtotime(date($r['digimaster_main_created_on'])))?></h4>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 pad-30" align="center">
								<span class="bold price">Rp. <?=number_format($r['digimaster_main_price'],0,",",".")?> ,-</span><br><br><br><br>
								<a href="<?=base_url('detail/'.$r['digimaster_main_slug'])?>">
									<button class="btn btn-primary btn-block">See Detail</button>
								</a>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>

			</div>
		</div>
	</div>