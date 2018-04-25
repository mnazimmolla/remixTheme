	<?php get_header();?>


	<?php 

		$remix_sor_sec = cs_get_option('remix_sort_sec');
		foreach($remix_sor_sec['enabled'] as $remix_sort_key=>$remix_sort_value){
			switch($remix_sort_key){
				case 'slider' : get_template_part('layouts/slider');
				break;
				
				case 'about' : get_template_part('layouts/about');
				break;
				
				case 'portfolio' : get_template_part('layouts/portfolio');
				break;
				
				case 'add' : get_template_part('layouts/add');
				break;
				
				case 'service' : get_template_part('layouts/service');
				break;
				
				case 'team' : get_template_part('layouts/team');
				break;
				
				case 'pricing' : get_template_part('layouts/pricing');
				break;
				
				case 'work' : get_template_part('layouts/work');
				break;
				
				case 'blog' : get_template_part('layouts/blog');
				break;
				
				case 'video' : get_template_part('layouts/video');
				break;
				
				case 'client' : get_template_part('layouts/client');
				break;
			}
			
			
		}
	?>
		
	<?php get_footer();?>

