<?php

function custom_sidebar() {
    register_sidebar( array(
        'name' => __( 'Remix Sidebar', 'theme-slug' ),
        'id' => 'remix_sidebar',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<div class="col-md-4"><div class="widget">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'custom_sidebar' );

//register custom widget 

class remix_latest_post extends WP_Widget {

	function __construct() {
		// Instantiate the parent object
		parent::__construct(
			'latest_sidebar_post',
			'Remix Recent Post'
		);
	}

	function widget( $args, $instance ) {
		
		
		echo $args['before_widget'];
		?>
		
		<h2 class="rounded">Latest Posts</h2>

			<div class="latest-post">
			
			<?php  while(have_posts()): the_post();?>
				<div class="inner-item clearfix">
					<div class="post-img">
						<a href="<?php the_permalink();?>"><?php 
							if(has_post_thumbnail()){
								the_post_thumbnail('sidebar_image');
							}
						?></a>
					</div><!-- /.auther-img -->
											
					<div class="post-details">
						<p class="message">
							<a href="single.html"><?php echo wp_trim_words(get_the_content(), 10);?></a>
						</p>
						<p class="entry-meta">
								<a href="#"> <?php echo wp_count_comments( get_the_ID() )->total_comments; ?>  Comments</a> <span>at</span>
						<a href="#"><?php the_time('F, j, Y');?></a>
						</p>
					</div><!-- /.post-details -->
					</div><!-- /.inner-item -->
					<?php endwhile; ?>
			</div><!-- /.latest-post -->
		<?php 
		
		echo $args['after_widget'];
	}
}
function remix_recent_post_footer() {
	register_widget( 'remix_latest_post' );
}
add_action( 'widgets_init', 'remix_recent_post_footer' );




//register contact widget 

class remix_contact_widget extends WP_Widget {

	function __construct() {
		// Instantiate the parent object
		parent::__construct(
		
			'footer_contact',
			'Contact'
		
		);
	}
	function form( $instance ) {
		// Output admin widget options form
		$description = !empty($instance['description'])? $instance['description']: 'Description Box is Empty!';
		$title = !empty($instance['title'])? $instance['title']: 'Input Box is Empty!';
		$icon_add = !empty($instance['icon_add'])? $instance['icon_add']: 'Icon Box is Empty!';
		$address = !empty($instance['address'])? $instance['address']: 'Address Box is Empty!';
		$icon_phone = !empty($instance['icon_phone'])? $instance['icon_phone']: 'Icon Box is Empty!';
		$phone = !empty($instance['phone'])? $instance['phone']: 'Phone Box is Empty!';
		$envelope = !empty($instance['envelope'])? $instance['envelope']: 'Icon Box is Empty!';
		$mail = !empty($instance['mail'])? $instance['mail']: 'Mail Box is Empty!';
		?>
		<p>
			<label>Description</label>
			<input type="text" name="<?php echo $this->get_field_name('description');?>" value="<?php echo $description?>" />
		</p>
		<p>
			<label>Title</label>
			<input type="text" name="<?php echo $this->get_field_name('title');?>" value="<?php echo $title?>" />
		</p>
		<p>
			<label>Icon for Address</label>
			<input type="text" name="<?php echo $this->get_field_name('icon_add');?>" value="<?php echo $icon_add?>" />
		</p>
		<p>
			<label>Address</label>
			<input type="text" name="<?php echo $this->get_field_name('address');?>" value="<?php echo $address?>" />
		</p>
		<p>
			<label>Icon for Phone</label>
			<input type="text" name="<?php echo $this->get_field_name('icon_phone');?>" value="<?php echo $icon_phone?>" />
		</p>
		<p>
			<label>Phone</label>
			<input type="text" name="<?php echo $this->get_field_name('phone');?>" value="<?php echo $phone?>" />
		</p>
		<p>
			<label>Icon for Mail</label>
			<input type="text" name="<?php echo $this->get_field_name('envelope');?>" value="<?php echo $envelope?>" />
		</p>
		<p>
			<label>Mail</label>
			<input type="text" name="<?php echo $this->get_field_name('mail');?>" value="<?php echo $mail?>" />
		</p>
		<?php
	}
	
	function update( $new_instance, $old_instance ) {
		// Save widget options
		$instance['description'] = ( ! empty( $new_instance['description'] ) ) ? strip_tags( $new_instance['description'] ) : '';
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['icon_add'] = ( ! empty( $new_instance['icon_add'] ) ) ? strip_tags( $new_instance['icon_add'] ) : '';
		$instance['address'] = ( ! empty( $new_instance['address'] ) ) ? strip_tags( $new_instance['address'] ) : '';
		$instance['icon_phone'] = ( ! empty( $new_instance['icon_phone'] ) ) ? strip_tags( $new_instance['icon_phone'] ) : '';
		$instance['phone'] = ( ! empty( $new_instance['phone'] ) ) ? strip_tags( $new_instance['phone'] ) : '';
		$instance['envelope'] = ( ! empty( $new_instance['envelope'] ) ) ? strip_tags( $new_instance['envelope'] ) : '';
		$instance['mail'] = ( ! empty( $new_instance['mail'] ) ) ? strip_tags( $new_instance['mail'] ) : '';

		return $instance;
	}

	function widget( $args, $instance ) {
		echo $args['before_widget'];
		if(!empty ($instance['description']) && ($instance['title']) && ($instance['icon']) && ($instance['address']) && ($instance['icon_phone']) && ($instance['phone']) && ($instance['envelope']) && ($instance['mail']))
		?>
		<h2 class="rounded"><?php echo $instance['title']?></h2>
		<div class="contact-info">
			<p><?php echo $instance['description'];?></p>
			<ul>
				<li class="fa-<?php echo $instance['icon_add']?>"><?php echo $instance['address'];?></li>
				<li class="fa-<?php echo $instance['icon_phone'];?>"><?php echo $instance['phone'];?></li>
				<li class="fa-<?php echo $instance['envelope'];?>"><?php echo $instance['mail'];?></li>
			</ul>
		</div><!-- /.contact-info -->
		<?php
		echo $args['after_widget'];
	}

	

	
}

function remix_footer_contact() {
	register_widget( 'remix_contact_widget' );
}

add_action( 'widgets_init', 'remix_footer_contact' );