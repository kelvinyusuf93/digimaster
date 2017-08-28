<div class="container-fluid">
		<br><br>
		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<img src="<?=img($detail_courses['digimaster_main_img'])?>" class="img-responsive">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="title">
					<h1 class="bold"><?=$detail_courses['digimaster_main_name']?></h1>
				</div>
				<div class="description">
					<p align="justify"><?=$detail_course_desc['digimaster_main_detail_description']?></p>
					<span class="bold f-14">Topic Include:</span><br><br>
					<ul><?=$detail_course_desc['digimaster_main_detail_topic']?></ul>
				</div>
				<br>
				<div class="code">
					<span class="bold">Course Code:</span>
					<span><?=$detail_course_desc['digimaster_main_detail_course_code']?></span>
				</div>
			</div>
			<div class="col-lg-12"><hr>
				<div class="detail">
					<ul class="nav nav-pills nav-justified f-18">
						<li class="active">
							<a class="bold" data-toggle="tab" href="#detail">Course Detail</a>
						</li>
						<li>
							<a class="bold" data-toggle="tab" href="#attend">Who Should Attend</a>
						</li>
						<li>
							<a class="bold" data-toggle="tab" href="#prerequisite">Prerequisite</a>
						</li>
						<li>
							<a class="bold" data-toggle="tab" href="#trainers">Trainers</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="tab-content">
					<div id="detail" class="tab-pane fade in active">
						<div class="module m-t-30">
							<?=$detail_course_desc['digimaster_main_detail_module']?>
						</div>
					</div>
					<div id="attend" class="tab-pane fade">
						<div class="m-t-30">
							<ul class="p-l-15">
								<?=$detail_course_desc['digimaster_main_detail_attendance']?>
							</ul>
						</div>
					</div>
					<div id="prerequisite" class="tab-pane fade">
						<div class="m-t-30">
							<span><?=$detail_course_desc['digimaster_main_detail_prequisite']?></span>
						</div>
					</div>
					<div id="trainers" class="tab-pane fade">
						<div class="m-t-30">
							<div class="media">
								<div class="media-left media-middle"></div>
								<div class="media-body">
									<ul class="p-l-15">
										<?=$detail_course_desc['digimaster_main_detail_trainers']?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
			<div class="col-lg-12"><hr style="border: 1px dashed #eee"></div>
			<div class="col-lg-12"><h3 class="bold">Other Course</h3><br></div>

			<?php foreach($other_courses as $oc): ?>
				<div class="col-sm-6 col-md-3">
					<div class="thumbnail">
						<img src="<?=img($oc['digimaster_main_img'])?>" alt="...">
						<div class="caption">
							<h3><?=$oc['digimaster_main_name']?></h3>
							<span>Rp. <?=number_format($oc['digimaster_main_price'], 0, ",", ".")?>,-</span>
							<div align="center"><br>
								<a href="<?=base_url('detail/'.$oc['digimaster_main_slug'])?>" class="btn btn-view-more" role="button">Detail <i class="icon-double-angle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		
		</div>
		<div class="col-lg-3 xol-md-3 col-sm-3 col-xs-12 left-border">
			<div class="form-booking">
				<h2 class="bold">Course Booking</h2>
				<hr>
				<span class="bold price">Rp. <?=number_format($detail_courses['digimaster_main_price'], 0, ",", ".")?>,-</span><br><br>
				<form>
					<div class="form-group">
						<label for="email">Course Date *</label>
						<br>
						<select class="form-control">
							<option>--Please Select--</option>
							<?php foreach($detail_course_schedule_date as $dcsd): ?>
								<option value="<?=$dcsd['digimaster_main_schedule_id']?>"><?=date('d-F-Y (l)', strtotime(date($dcsd['digimaster_main_schedule_date'])))?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label for="email">Course Time *</label>
						<br>
						<div class="radio">
							<label id='first_date'>-- Chose Date First --</label>
						</div>
					</div>
					<div class="form-group">
						<label for="email">No. of Participants *</label>
						<br>
						<select class="form-control">
						</select>
					</div>
					<div class="form-group">
						<label>Name(s) on Certificate *</label>
						<textarea class="form-control" rows="3"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			<hr>
			<div class="course-information">
				<h4 class="bold">Course Information</h4>
				<?=$detail_course_desc['digimaster_main_detail_information']?>
				<br>
				<div class="maps">
					<iframe src="<?=$detail_course_desc['digimaster_main_detail_map']?>" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div><hr>
				<h4 class="bold">Course Cancellation/Reschedule Policy</h4>
				<?=$detail_course_desc['digimaster_main_detail_policy']?>
			</div>
		</div>
	</div>