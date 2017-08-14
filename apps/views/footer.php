<footer class="contact">
		<div class="container">
			<div class="row">
				<div class="content">

						<?php foreach($except_social_media as $esm): ?>
							<div class="col-md-<?=12/$number_of_rows?>">
								<div class="top">
									<img src="<?=img($esm['digimaster_footer_img'])?>" alt="">
									
									<div class="desc">
										<h4 class="title"><?=$esm['digimaster_footer_title']?></h4>
										<p class="description"><?=$esm['digimaster_footer_content']?></p>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
						
						<ul class="social-media text-center">
							<?php foreach($social_media as $sm): ?>
								<li>
									<a href="http://<?=$sm['digimaster_footer_url']?>">
										<img src="<?=img($sm['digimaster_footer_img'])?>" class="img-responsive">
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
		</footer>
	</body>
	<script type="text/javascript" src="<?=js('jquery.min.js')?>"></script>
	<script type="text/javascript" src="<?=js('bootstrap.min.js')?>"></script>
</html>