<?php
/**
 * Template Name: Resources Page
 * Template Post Type: page, post
 *
 * @package Bootstrap_to_WordPress
 */

get_header();

$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->id));
?>

<!-- FEATURE IMAGE
	================================================== -->
<?php if(has_post_thumbnail()) : ?>
	<section class="feature-image" style="background: url('<?= $thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
		<h1><?= the_title(); ?></h1>
	</section>
<?php else: ?>
	<section class="feature-image feature-image-default" data-type="background" data-speed="2">
		<h1><?= the_title(); ?></h1>
	</section>
<?php endif; ?>



<!-- MAIN CONTENT
================================================== -->
<div class="container">
	<div class="row" id="primary">

		<div id="content" class="col-sm-12">

			<section class="main-content">

				<?php if(have_posts()): the_post(); the_content(); endif;?>
                
                <?php $loop = new WP_Query([
                        'post_type' => 'resource',
                        'orderby' => 'post_id',
                        'order' => 'ASC'
                ]); ?>

				<hr>

				<div class="resource-row clearfix">
					<div class="row">
	                    <?php while($loop->have_posts()) : $loop->the_post(); ?>
	                    <?php
		                    $resource_image = get_field('resource_image');
		                    $resource_url = get_field('resource_url');
		                    $resource_button_text = get_field('button_text');
	                    ?>
	                        <div class="col-sm-4 mb-4">
	                            <img src="<?= $resource_image['url']; ?>" alt="<?= $resource_image['alt']; ?>">
	                            <h3><a href="<?= $resource_url; ?>"><?php the_title(); ?></a></h3>
	                            <?php the_content(); ?>
	                            <?php if(!empty($resource_button_text)): ?>
	                                <a href="<?= $resource_url; ?>" class="btn btn-success"><?= $resource_button_text; ?></a>
	                            <?php endif; ?>
	                        </div>
	                    <?php endwhile; ?>
					</div>
				</div>
			</section>

		</div><!-- content -->

	</div><!-- primary -->
</div><!-- container -->

<?php get_footer(); ?>