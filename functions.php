<?php 

add_theme_support('post-thumbnails');
add_image_size('sidebar_image', 80,64, true);
require_once('codestar/cs-framework.php');
require_once('inc/custom-post.php');
require_once('inc/sidebar.php');
require_once('inc/post-like.php');
require_once('inc/shortcode.php');
require_once('inc/tinymce.php');


function add_js_css(){
	//wp_eneque_style('name', get_template_directory_uri().'/folder/sub_folder/', array(), 'version', 'all');
	wp_enqueue_style('awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), 'version', 'all');
	wp_enqueue_style('flaticon', get_template_directory_uri().'/assets/css/flaticon.css', array(), 'version', 'all');
	wp_enqueue_style('boxer', get_template_directory_uri().'/assets/css/jquery.fs.boxer.min.css', array(), 'version', 'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), 'version', 'all');
	wp_enqueue_style('animate', get_template_directory_uri().'/assets/css/animate.min.css', array(), 'version', 'all');
	wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css', array(), 'version', 'all');
	wp_enqueue_style('responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), 'version', 'all');
	wp_enqueue_style('likes', get_template_directory_uri().'/assets/css/simple-likes-public.css', array(), 'version', 'all');
	
	
	//wp_enqueue_script('responsive', get_template_directory_uri().'/assets/css/responsive.css', array(jquery), 'version', true);
	wp_enqueue_script('modernizr', get_template_directory_uri().'/assets/js/modernizr.js', array('jquery'), 'version', true);
	wp_enqueue_script('plugins', get_template_directory_uri().'/assets/js/plugins.js', array('jquery'), 'version', true);
	wp_enqueue_script('OnePagenNav', get_template_directory_uri().'/assets/js/OnePagenNav.js', array('jquery'), 'version', true);
	wp_enqueue_script('wow', get_template_directory_uri().'/assets/js/wow.min.js', array('jquery'), 'version', true);
	wp_enqueue_script('google', get_template_directory_uri().'/http://maps.google.com/maps/api/js?sensor=true', array('jquery'), 'version', true);
	wp_enqueue_script('gmap3', get_template_directory_uri().'/assets/js/gmap3.min.js', array('jquery'), 'version', true);
	wp_enqueue_script('functions', get_template_directory_uri().'/assets/js/functions.js', array('jquery'), 'version', true);
	wp_enqueue_script('viewport', get_template_directory_uri().'/assets/js/jquery.viewport.js', array('jquery'), 'version', true);
	wp_enqueue_script('easypiechart', get_template_directory_uri().'/assets/js/jquery.easypiechart.min.js', array('jquery'), 'version', true);
	wp_enqueue_script('scripts', get_template_directory_uri().'/assets/js/scripts.js', array('jquery'), 'version', true);
	wp_enqueue_script('simple', get_template_directory_uri().'/assets/js/simple-likes-public.js', array('jquery'), 'version', true);
}
add_action('wp_enqueue_scripts','add_js_css');

function footer_js(){ ?>
	
	<script type="text/javascript">

		    jQuery('#main-nav').onePageNav({
                 currentClass: 'active',
                 changeHash: false,
                 scrollSpeed: 1200,
                 scrollOffset: 80,
				 filter: ':not(.sub-menu a, .not-home)'
            });

			jQuery('.carousel').carousel({
		        interval: 8000
		    })	

			/*  - wow animation wow.js 
		    ---------------------------------------------------*/
		    var wow = new WOW (
		    {
		          boxClass:     'wow',      // animated element css class (default is wow)
		          animateClass: 'animated', // animation css class (default is animated)
		          offset:       0,          // distance to the element when triggering the animation (default is 0)
		          mobile:       false       // trigger animations on mobile devices (true is default)
		      }
		    );
		    wow.init();

		    /*  - wow animation wow.js End 
		    ---------------------------------------------------*/

		</script>
		<?php
}
add_action('wp_footer','footer_js',100);


//comment callback function


function remix_callback($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }
    ?>
    <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
			<?php endif; ?>
			
			<?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
			
			<div class="comment-box-style">
				<?php printf( __( '<cite class="fn">%s</cite>' ), get_comment_author_link() ); ?>
			
				<?php
					/* translators: 1: date, 2: time */
					printf( __('%1$s at %2$s'), get_comment_date(), get_comment_time()); ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' );
				?>
				<?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div>
			<div class="comment-text-style">
				<?php comment_text(); ?>
			</div>
			<?php if ( $comment->comment_approved == '0' ) : ?>
				 <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
				  <br />
			<?php endif; ?>
			
			<?php if ( 'div' != $args['style'] ) : ?>
    </div>
    <?php endif; ?>
    <?php
    }
