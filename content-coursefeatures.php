<?php
/**
 * Course Feature Section
 */
$feature_section_image = get_field( 'course_feature_image' );
$feature_section_title = get_field( 'course_feature_title' );

?>

<!-- COURSE FEATURES
	================================================== -->
<section id="course-features">
	<div class="container">

		<div class="section-header">
			<?php if ( ! empty( $income_feature_image ) ): ?>
				<img src="<?= $feature_section_image['url']; ?>" alt="<?= $who_feature_image['alt']; ?>">
			<?php endif; ?>
			<h2><?= $feature_section_title ?></h2>
		</div><!-- section-header -->

		<div class="row">

			<?php $loop = new WP_Query( [
				'post_type' => 'course_feature',
				'orderby'   => 'post_id',
				'order'     => 'ASC'
			] ); ?>

			<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

				<div class="col-sm-2">
					<i class="<?php the_field( 'course_feature_icon' ); ?>"></i>
					<h4><?php the_title(); ?></h4>
				</div><!-- end col -->

			<?php endwhile;  wp_reset_query();?>
		</div><!-- row -->
	</div><!-- container -->
</section><!-- course-features -->
