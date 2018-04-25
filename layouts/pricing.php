<section id="pricing" class="pricing-section">
			<div class="section-padding">
				<div class="container">
					
					<div class="section-head wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".6s">
						<h2 class="section-title">
							<?php echo cs_get_option('pricing_title');?>
						</h2>
						<p class="section-description">
							<?php echo cs_get_option('pricing_desc');?>
						</p>
					</div><!-- /.section-head -->

					<div class="section-content text-center">
						<div class="row">

							<div class="col-md-3 col-sm-6">
								<div class="item-md3 wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".6s">
									<div class="item-head">
										<h4 class="title"><?php echo cs_get_option('p_package1');?></h4>

										<div class="currency-price-time">
											<span class="currency"><sub><?php echo cs_get_option('p_currency1');?></sub></span> 
											<span class="number"><?php echo cs_get_option('p_price1');?></span>
											<span class="duration"><sup>/<?php echo cs_get_option('p_duration1');?></sup></span>
										</div>
									</div>

									<div class="item-list text-left">
										<ul>
										
										<?php 
										
											$prices = cs_get_option('pricing_group1');
											if(is_array($prices)){
											foreach($prices as $price_key=>$price_value){
												if($price_value['p1_check']){ ?>
													<li class="fa fa-check"><?php echo " " . $price_value['p1_title'];?></li>
													
													<?php
												}else{ ?>
													<li class="fa fa-remove"><?php echo " " . $price_value['p1_title'];?></li>
													
													<?php
												}
											}
											}
										
										?>
											
										</ul>
									</div>
									<div class="link">
										<a href="#" class="btn btn-default">Buy Now</a>
									</div>
								</div><!-- /.item-md3 -->
							</div><!-- /.col-md-3 -->
							
							
							<div class="col-md-3 col-sm-6">
								<div class="item-md3 wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".6s">
									<div class="item-head">
										<h4 class="title"><?php echo cs_get_option('p_package2');?></h4>

										<div class="currency-price-time">
											<span class="currency"><sub><?php echo cs_get_option('p_currency2');?></sub></span> 
											<span class="number"><?php echo cs_get_option('p_price2');?></span>
											<span class="duration"><sup>/<?php echo cs_get_option('p_duration2');?></sup></span>
										</div>
									</div>

									<div class="item-list text-left">
										<ul>
										
										<?php 
										
											$prices2 = cs_get_option('pricing_group2');
											if(is_array($prices2)){
											foreach($prices2 as $price_key2=>$price_value2){
												if($price_value2['p2_check']){ ?>
													<li class="fa fa-check"><?php echo " " . $price_value2['p2_title'];?></li>
													
													<?php
												}else{ ?>
													<li class="fa fa-remove"><?php echo " " . $price_value2['p2_title'];?></li>
													
													<?php
												}
											}
										}
										?>
											
										</ul>
									</div>
									<div class="link">
										<a href="#" class="btn btn-default">Buy Now</a>
									</div>
								</div><!-- /.item-md3 -->
							</div><!-- /.col-md-3 -->
							
							<div class="col-md-3 col-sm-6">
								<div class="item-md3 wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".6s">
									<div class="item-head">
										<h4 class="title"><?php echo cs_get_option('p_package3');?></h4>

										<div class="currency-price-time">
											<span class="currency"><sub><?php echo cs_get_option('p_currency3');?></sub></span> 
											<span class="number"><?php echo cs_get_option('p_price3');?></span>
											<span class="duration"><sup>/<?php echo cs_get_option('p_duration3');?></sup></span>
										</div>
									</div>

									<div class="item-list text-left">
										<ul>
										
										<?php 
										
											$prices3 = cs_get_option('pricing_group3');
											if(is_array($prices3)){
											foreach($prices3 as $price_key3=>$price_value3){
												if($price_value3['p3_check']){ ?>
													<li class="fa fa-check"><?php echo " " . $price_value3['p3_title'];?></li>
													
													<?php
												}else{ ?>
													<li class="fa fa-remove"><?php echo " " . $price_value3['p3_title'];?></li>
													
													<?php
												}
											}
										}
										?>
											
										</ul>
									</div>
									<div class="link">
										<a href="#" class="btn btn-default">Buy Now</a>
									</div>
								</div><!-- /.item-md3 -->
							</div><!-- /.col-md-3 -->

						<div class="col-md-3 col-sm-6">
								<div class="item-md3 wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".6s">
									<div class="item-head">
										<h4 class="title"><?php echo cs_get_option('p_package4');?></h4>

										<div class="currency-price-time">
											<span class="currency"><sub><?php echo cs_get_option('p_currency4');?></sub></span> 
											<span class="number"><?php echo cs_get_option('p_price4');?></span>
											<span class="duration"><sup>/<?php echo cs_get_option('p_duration4');?></sup></span>
										</div>
									</div>

									<div class="item-list text-left">
										<ul>
										
										<?php 
										
											$prices4 = cs_get_option('pricing_group4');
											if(is_array($prices4)){
											foreach($prices4 as $price_key4=>$price_value4){
												if($price_value4['p4_check']){ ?>
													<li class="fa fa-check"><?php echo " " . $price_value4['p4_title'];?></li>
													
													<?php
												}else{ ?>
													<li class="fa fa-remove"><?php echo " " . $price_value4['p4_title'];?></li>
													
													<?php
												}
											}
										}
										?>
											
										</ul>
									</div>
									<div class="link">
										<a href="#" class="btn btn-default">Buy Now</a>
									</div>
								</div><!-- /.item-md3 -->
							</div><!-- /.col-md-3 -->


							

							

						</div><!-- /.row -->
					</div><!-- /.section-content -->
				</div><!-- /.container -->
			</div><!-- /.pricing-section -->
		</section><!-- /#pricing -->