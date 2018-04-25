<section id="about">
			<div class="about-section section-padding">
				<div class="container">
					<div class="section-head">
						<h2 class="section-title">
							<?php echo cs_get_option('about_title');?>
						</h2>
						<p class="section-description">
							<?php echo cs_get_option('about_desc');?>
						</p>
					</div><!-- /.section-head -->
					<div class="section-content">
						<div class="row">

							<div class="col-lg-4">
								<div class="item-md4 wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".6s">
									<h3><?php echo cs_get_option('about_sec_title');?></h3>
									<p class="item-description"><?php echo cs_get_option('about_sec_desc');?></p>
									
									<?php $about_group = cs_get_option('about_group');
										if(is_array($about_group)){
											foreach($about_group as $about_group_values=>$about_group_remix){
											?>		
													
											<div class="inner-item">
												<div class="icon">
													<i class="<?php echo $about_group_remix['about_icon'];?>"></i>
												</div>
												<div class="item-info">
													<h4 class="item-title">
														<a href="#"><?php echo $about_group_remix['about_bottom_title'];?></a>
													</h4><!-- /.item-title -->
													<p><?php echo $about_group_remix['about_bottom_desc'];?></p>
												</div><!-- /.item-info -->
											</div><!-- /.inner-item -->
										
										<?php
											}
										}	
									?>
									
								</div><!-- /.item-md4 -->
							</div><!-- /.col-md-3 -->

							<?php 
							
								$about_sec = cs_get_option('about_second_section');
								if(is_array($about_sec)){
								foreach($about_sec as $about_key=>$about_value){
									?>
									<div class="col-lg-4">
										<div class="item-md4 main-blog wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".9s">
											<div class="post-img">
												<img src="<?php echo $about_value['about_section_image'];?>" alt="post Image">
											</div>
											<div class="item-info">
												<h4 class="item-title">
													<a href="#"><?php echo $about_value['about_second_title'];?></a>
												</h4><!-- /.item-title -->
												<p><?php echo $about_value['about_second_desc'];?></p>
											</div><!-- /.item-info -->
											<a href="<?php echo $about_value['button_link'];?>" class="btn btn-default"><?php echo $about_value['about_second_button'];?></a>
										</div><!-- /.item-md4 -->
									</div><!-- /.col-md-3 -->
									
								<?php	
								}
							}
							?>
							

							

						</div><!-- /.row -->
					</div><!-- /.section-content -->
				</div><!-- /.container -->
			</div><!-- /.about-section -->
		</section><!-- /#about -->