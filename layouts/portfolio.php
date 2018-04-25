
		<!-- Portfolio Section -->
		<section id="portfolio-work" class="portfolio-work dark-bg">
			<div class="container">

				<div class="section-head">
					<h2 class="section-title">
						Our Portfolio
					</h2>
				</div><!-- /.section-head -->
				
				<div id="portfolio-container" class="clearfix">
					<div class="portfolioFilter">
						<a href="#" data-filter="" class="current">All</a>
						
						
						<?php 
						
							$terms = get_terms('group');
							foreach($terms as $term){
								
								echo "<a href=\"#\" data-filter=\".$term->slug\">$term->name</a>";
								
							}
						?>
					</div> <!-- /.portfolioFilter -->
						<div class="portfolio-item element-from-bottom">
						<?php
						
							query_posts(array(
								'post_type' => 'portfolio',
								'taxonomy' => 'group',
								
							));
							while(have_posts()): the_post();
							
							$item = get_post_meta($post->ID,'_portfilo_options', true);
						
						?>
						<?php 
						
							$terms = get_the_terms( get_the_ID(), 'group' );
														 
								if ( $terms && ! is_wp_error( $terms ) ) : 
								 
									$draught_links = array();
								 
									foreach ( $terms as $term ) {
										$draught_links[] = $term->slug;
									}
														 
									$on_draught = join( " ", $draught_links );
						?>
											
						
					
				

					
						<figure class="item <?php echo $item['portfilo_sec_field'];?> <?php echo $on_draught?>">
							<?php the_post_thumbnail();?>
							<div class="overlay"></div>
							<div class="expand">
								<div class="expand-wrap">
									<div class="expand-info">
										<h3><a href="#"><?php the_title();?></a></h3>
										<p><?php the_content();?></p>
									</div><!-- /.expand-info -->
									<a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" class="boxer" title="Portfolio Image Title">
										<span class="flaticon-zoom10"></span>
									</a>
								</div><!-- /.expand-wrap -->
							</div>
						</figure>

				

						
						
						<?php endif;?>
						<?php endwhile;?>
						


					</div><!-- /.portfolio-item -->
					
					<div class="link">
						<a href="#" class="btn btn-default">Load More</a>
					</div>

				</div><!-- /#portfolio-container -->
			</div>
		</section><!-- #portfolio -->