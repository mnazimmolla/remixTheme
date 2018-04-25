<section id="team" class="team-section dark-bg">
			<div class="section-padding">
				<div class="container">
					
					<div class="section-head">
						<h2 class="section-title">
							<?php echo  cs_get_option('team_title');?>
						</h2>
						<p class="section-description">
							<?php echo  cs_get_option('team_desc');?>
						</p>
					</div><!-- /.section-head -->


					<div class="section-content">
						<div class="row">
							<?php 
								$team_section = cs_get_option('team_group');
								if(is_array($team_section)){
								foreach($team_section as $team_key=>$team_value){
									?>
									
									<div class="col-md-3 col-sm-6">
								<div class="item-md3 wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".6s">
									<div class="team-img">
										<img src="<?php echo $team_value['team_image'];?>" />
										<div class="overlay" style="background-color:<?php echo $team_value['team_overlay'];?>"></div>
										<div class="social-icon">
											<a href="<?php echo $team_value['team_facebook'];?>"><i class="fa fa-facebook"></i></a>
											<a href="<?php echo $team_value['team_twitter'];?>"><i class="fa fa-twitter"></i></a>
											<a href="<?php echo $team_value['team_google'];?>"><i class="fa fa-google-plus"></i></a>
										</div>
									</div><!-- /.icon -->

									<div class="member-info">
										<h4 class="name item-title">
											<a href="#"><?php echo $team_value['team_mem_title'];?></a>
										</h4>
										<div class="designation">
											<?php echo $team_value['team_mem_desi'];?>
										</div><!-- /.item-title -->
										<p><?php echo $team_value['team_mem_desc'];?></p>
									</div><!-- /.item-info -->
								</div><!-- /.item-md3 -->
							</div><!-- /.col-md-3 -->
								<?php	
								}
								}
							?>
							

							


							
						</div><!-- /.row -->
					</div><!-- /.section-content -->
				</div><!-- /.container -->
			</div><!-- /.team-section -->
		</section><!-- /#team -->