<?php
	$title = get_sub_field( 'title' );
	$title_seo = get_sub_field( 'title_seo' );
	$testimonials = get_sub_field( 'items' );
	$section_id = get_sub_field( 'section_id' );
	$is_autoplay = get_sub_field( 'is_autoplay' );
	$is_autoplaytime = get_sub_field( 'is_autoplaytime' );
	$is_dots = get_sub_field( 'is_dots' );
	$is_loop = get_sub_field( 'is_loop' );
	$is_rewind = get_sub_field( 'is_rewind' );
?>

<!--
	Clients
-->

<div class="content testimonials">

	<?php if ( $title ) : ?>
	<!-- title -->
	<<?php echo esc_attr( $title_seo ); ?> class="title"><?php echo esc_html( $title ); ?></<?php echo esc_attr( $title_seo ); ?>>
	<?php endif; ?>

	<!-- content -->
	<div class="row testimonial-items">

		<div class="col col-d-12 col-t-12 col-m-12 border-line-v">
			<div class="revs-carousel">
				<div class="owl-carousel" data-autoplay="<?php echo esc_attr((int) $is_autoplay ); ?>" data-autoplaytime="<?php echo esc_attr( $is_autoplaytime ); ?>" data-dots="<?php echo esc_attr((int) $is_dots ); ?>" data-loop="<?php echo esc_attr((int) $is_loop ); ?>" data-rewind="<?php echo esc_attr((int) $is_rewind ); ?>">
					<?php foreach ( $testimonials as $item ) { ?>
					<div class="item">
						<div class="revs-item">
							<?php if( $item['text'] ) : ?>
							<div class="text">
								<?php echo esc_html( $item['text'] ); ?>
							</div>
							<?php endif; ?>
							<div class="user">
								<?php
									$img = $item['img'];
									if( $img ) : 
								?>
								<div class="img"><img src="<?php echo esc_url( $img['sizes']['ryancv_92x92'] ); ?>" alt="<?php echo esc_attr( $item['name'] ); ?>" /></div>
								<?php endif; ?>
								<div class="info">
									<?php if( $item['name'] ) : ?>
									<div class="name"><?php echo esc_html( $item['name'] ); ?></div>
									<?php endif; ?>
									<?php if( $item['subname'] ) : ?>
									<div class="company"><?php echo esc_html( $item['subname'] ); ?></div>
									<?php endif; ?>
								</div>
								<div class="clear"></div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>

		<div class="clear"></div>
	</div>

</div>