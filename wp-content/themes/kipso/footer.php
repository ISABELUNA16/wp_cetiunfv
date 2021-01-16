<?php
/**
 * $Desc
 *
 * @version    1.0
 * @package    basetheme
 * @author     Gaviasthemes Team     
 * @copyright  Copyright (C) 2016 Gaviasthemess. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 * 
 */
$copyright = kipso_get_option('copyright_text', esc_html__('Copyright ', 'kipso') . date('Y') . ' - ' . esc_html__('Company - All rights reserved. Powered by WordPress.', 'kipso') );
?>
	</div><!--end page content-->
	
</div><!-- End page -->

	<footer id="wp-footer" class="clearfix">
		
		<?php $footer = apply_filters('kipso_get_footer_layout', null );?>

		<?php if(!empty($footer) && $footer != '__disable_footer' && class_exists('Gavias_Themer_Footer')){
			if($footer != '__default'){
				echo '<div class="footer-main">' .  Gavias_Themer_Footer::getInstance()->render_footer_builder($footer)  . '</div>'; 
			}else{
				get_template_part('templates/parts/footer-widgets');
			} 
		}?>
		
		<div class="copyright">
			<div class="container">
				<div class="copyright-content">
						<div class="row">
							<div class="col-sm-12 col-xs-12">
								<?php echo ($copyright); ?>
							</div>
						</div>	
					</div>	
			</div>
		</div>
		<div class="return-top default"><i class="gv-icon-194"></i></div>

	</footer>
	
	<div id="gva-overlay"></div>
	<div id="gva-quickview" class="clearfix"></div>
	<svg version="1.1" xmlns="<?php echo kipso_protocol_html() ?>://www.w3.org/2000/svg" xmlns:xlink="<?php echo kipso_protocol_html() ?>://www.w3.org/1999/xlink" class="blur-svg">
	   <defs>
	      <filter id="blur-filter">
	         <feGaussianBlur stdDeviation="3"></feGaussianBlur>
	      </filter>
	    </defs>
	</svg>
<?php wp_footer(); ?>
</body>
</html>

