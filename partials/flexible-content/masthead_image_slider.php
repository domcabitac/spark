<section class="masthead-image-slider" id="<?php the_sub_field( 'id' ); ?>">
	<?php if ( have_rows( 'slides' ) ) : ?>
	<?php while ( have_rows( 'slides' ) ) : the_row(); ?>
	<div class="slide">
		<?php $background_image = get_sub_field( 'background_image' ); ?>
					<?php if ( $background_image ) : ?>
						<img src="<?php echo esc_url( $background_image['url'] ); ?>" alt="<?php echo esc_attr( $background_image['alt'] ); ?>" class="background-image"/>
			<?php endif; ?>
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-7 sub-title-text-btn">
					<div class="sub"><?php the_sub_field( 'subtitle' ); ?></div>
					<h1 class="animate-text-h1"><?php 
					$re = "/([^\\s>])(?!(?:[^<>]*)?>)/u"; 
					$str = get_sub_field( 'title' );
					$subst = "<span class='letter'>$1</span>"; 
					$result = preg_replace($re, $subst, $str);
					echo $result;
					 ?></h1>
					<?php if ( have_rows( 'buttons' ) ) : $i=0; ?>
					<?php while ( have_rows( 'buttons' ) ) : the_row(); ?>
					
					<?php $button_link = get_sub_field( 'button_link' ); ?>
					<?php if ( $button_link ) : ?>
					<a href="<?php echo esc_url( $button_link['url'] ); ?>"
						target="<?php echo esc_attr( $button_link['target'] ); ?>"><?php the_sub_field( 'button_text' ); ?>
                        <?php if ($i==0): include 'arrow.php'; endif; ?>
                        </a>
					<?php $i++; endif; ?>
					<?php endwhile; ?>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>

	<?php endwhile; ?>
	<?php endif; ?>
</section>
