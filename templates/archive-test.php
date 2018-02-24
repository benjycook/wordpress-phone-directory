<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<?php simple_directory_vc_compatibility(); ?>

<div id="<?php sdir_archive_id();?>" class="content-area <?php sdir_archive_class();?>">
	<main id="main" class="site-main archive-listing " role="main">
    <?php if ( have_posts() ) : ?>
      <header class="listing-archive-header row">
<?php $tax = get_queried_object()->term_id;
$z_image_url = get_option('z_taxonomy_image'.$tax);
$sdir_image_url = get_option('sdir_taxonomy_image'.$tax);
if($sdir_image_url !=''){?>
	 <div class="medium-3 columns">
      	<img src="<?php if (function_exists('sdir_taxonomy_image_url')) echo sdir_taxonomy_image_url(); ?>"></div>
      			<div class="medium-9 columns">
<?php }
elseif($z_image_url !='' ){?>
        <div class="medium-3 columns">
      	<img src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>"></div>
      			<div class="medium-9 columns">
<?php }

else {?><div class="small-12 columns"><?}?>
	      				<h1 class="archive-title"><?php echo single_cat_title('',false);?></h1>

      		<?php

      					// Show an optional term description.
      					$term_description = term_description();
      					if ( ! empty( $term_description ) ) :
      						printf( '<div class="taxonomy-description">%s</div>', $term_description );
      					endif;
      				?>
      	</div>
      </header>
		<?php endif;?>

					<?php
					$tax = get_queried_object()->term_id;


					$args = array(
						'post_type'=>'listing'
						,'orderby'=>'title'
						,'order'=>'ASC'
						,'posts_per_page'=>-1

						//,'meta_key'=>'listing_status'
						//,'meta_value'=>'premium'
						,'tax_query'=> array(
						array(
							 'taxonomy'=>'listing_category'
							 ,'field'=>'term_id'
							 ,'terms'=>array($tax)
						))
					);

					$listings = new WP_Query($args);
					while ($listings->have_posts()):$listings->the_post(); ?>

			<div class="row">
        <?php   $m = get_post_meta($post->id);?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="<?php sdir_logo_class();?>">
		<?php the_post_thumbnail(); ?>
		</div>

		<div class="<?php sdir_title_on_cat_class();?> ">



			<?php sdir_listing_level();
?>
			<?php  sdir_address_output();?>
					</div>

				<div class="row">
					<div class="medium-12 columns hide-for-small-down">
						<ul class="button-group even-3">
							<?php sdir_link_bar();?>
						</ul>
					</div>
					<div class="small-12 columns hide-for-medium-up">
				<div class="icon-bar three-up">
					<?php sdir_mobile_link_bar();?>
				</div>
					</div>
</div>
</article>
</div>

<hr class="simple-break"/>

					<?php endwhile;?>



					<?php wp_reset_postdata();?>




</main>
</div>
<?php
$s = get_option('simple_directory_settings');
	$show_sidebar = $s['archive_listing_show_sidebar'];
	if ($show_sidebar == 'yes'){
		get_sidebar();
	}?>

<?php get_footer();?>
