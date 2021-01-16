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
?>
<?php get_header(); ?>
<div id="content">
	<div class="page-wrapper">
	
		<div class="not-found-wrapper text-center">
			<div class="not-found-title"><h1><span><?php echo esc_html__('404', 'kipso') ?></span></h1></div>
			<div class="not-found-subtitle"><?php echo esc_html__('Pagina no Encontrada', 'kipso') ?></div>
			<div class="not-found-desc"><?php echo esc_html__('No se pudo encontrar la página solicitada. Esto podría ser un error ortográfico en la URL o una página eliminada.','kipso' )?></div> 

			<div class="not-found-home text-center">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="gv-icon-200"></i><?php echo esc_html__('Volver al Inicio', 'kipso') ?></a>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>