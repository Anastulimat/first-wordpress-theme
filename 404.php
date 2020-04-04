<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bootstrap_to_WordPress
 */

get_header();
?>

    <section class="feature-image feature-image-default" data-type="background" data-speed="2">
        <h1 class="page-title">Bummer! That page can't be found.</h1>
    </section>

    <div class="container">
        <div class="row" id="primary">
            <main id="content" class="col-sm-8">

                <div class="error-404 not-found">

                    <div class="page-content">
                        <h2>Don't fret! Let's get you back on track.</h2>
                        <!-- Resources -->
                        <h3>Resources</h3>
                        <p>Perhaps you were looking for a specific resource ?</p>

                        <div class="resource-row clearfix">

	                        <?php $loop = new WP_Query([
		                        'post_type' => 'resource',
		                        'orderby' => 'post_id',
		                        'order' => 'ASC'
	                        ]); ?>

		                    <?php while($loop->have_posts()) : $loop->the_post(); ?>
			                    <?php
			                    $resource_image = get_field('resource_image');
			                    $resource_url = get_field('resource_url');
			                    $resource_button_text = get_field('button_text');
			                    ?>
                                <div class="resource">
                                    <img src="<?= $resource_image['url']; ?>" alt="<?= $resource_image['alt']; ?>">
                                    <h3><a href="<?= $resource_url; ?>"><?php the_title(); ?></a></h3>
				                    <?php the_excerpt(); ?>
				                    <?php if(!empty($resource_button_text)): ?>
                                        <a href="<?= $resource_url; ?>" class="btn btn-success"><?= $resource_button_text; ?></a>
				                    <?php endif; ?>
                                </div>
		                    <?php endwhile; ?>
                        </div>

                        <!-- Categories -->
                        <h3>Categories</h3>
                        <p>...or maybe a popular category?</p>

                        <div class="widget widget_categories">
                            <h4 class="widget-title">Most Used Categories</h4>
                            <ul>
                                <?php wp_list_categories([
                                        'orderby' => 'count',
                                        'order' => 'DESC',
                                        'show_count' => 1,
                                        'title_li' => '',
                                        'number' => 10
                                ]); ?>
                            </ul>
                        </div>

                        <!-- Archives -->
                        <h3>Archives</h3>
                        <p>You can always sort through our archives...</p>
                        <?php the_widget('WP_Widget_Archives', 'title=Our Archives' ,  [
	                        'before_title' => '<h4 class="widget-title">',
	                        'after_title' => '</h4>'
                        ]); ?>

                        <!-- Go to homepage -->
                        <p>...or, just head back to the <a href="<?= esc_url( home_url('/')) ?>">home page</a>.</p>

                    </div>
                </div>
            </main>

            <!-- Sidebar -->
            <aside class="col-sm-4">
                <?php get_sidebar(); ?>
            </aside>

        </div>
    </div>

<?php
get_footer();
