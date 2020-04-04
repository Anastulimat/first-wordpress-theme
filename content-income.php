<?php

/**
 * Income Section
 */
$income_feature_image = get_field( 'income_feature_image' );
$income_section_title = get_field( 'income_section_title' );
$income_section_desc  = get_field( 'income_section_description' );
$reason_1             = get_field( 'reason_#1' );
$reason_1_title       = $reason_1['reason_one_title'];
$reason_1_desc        = $reason_1['reason_one_description'];
$reason_2             = get_field( 'reason_#2' );
$reason_2_title       = $reason_2['reason_two_title'];
$reason_2_desc        = $reason_2['reason_two_description'];
?>

<!-- BOOST YOUR INCOME
	================================================== -->
<section id="boost-income">
	<div class="container">

		<div class="section-header">
			<?php if ( ! empty( $income_feature_image ) ): ?>
				<img src="<?= $income_feature_image['url']; ?>" alt="<?= $income_feature_image['alt']; ?>">
			<?php endif; ?>
			<h2><?= $income_section_title ?></h2>
		</div><!-- section-header -->

		<p class="lead"><?= $income_section_desc; ?></p>
		<div class="row">
			<div class="col-sm-6">
				<h3><?= $reason_1_title; ?></h3>
				<p><?= $reason_1_desc; ?></p>
			</div><!-- end col -->

			<div class="col-sm-6">
				<h3><?= $reason_2_title; ?></h3>
				<p><?= $reason_2_desc; ?></p>
			</div><!-- end col -->
		</div><!-- row -->

	</div><!-- container -->
</section><!-- boost-income -->

