<?php
$subscribe_text        = get_field( 'subscribe_text' );
$subscribe_text_button = get_field( 'subscribe_text_button' );
?>

<!-- OPT IN SECTION
	================================================== -->
<section id="optin">
	<div class="container">
		<div class="row">

			<div class="col-sm-8">
				<p class="lead"><?= $subscribe_text; ?></p>
			</div><!-- end col -->

			<div class="col-sm-4">
				<button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
					<?= $subscribe_text_button; ?>
				</button>
			</div><!-- end col -->

		</div><!-- row -->
	</div><!-- container -->
</section><!-- optin -->

