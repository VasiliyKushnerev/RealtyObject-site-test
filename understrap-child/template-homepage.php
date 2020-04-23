<?php
nocache_headers();
/*
Template Name: Homepage
*/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>


<div class="wrapper" id="page-wrapper">
	<!--===============CITIES========-->
	<section id="cities">
		<div class="<?php echo $container ?> cities">
			<h3>Города</h3>
			<div class="row">
                <?php
                $args = array(
                    'post_type' => 'realty-cities',
                );

                $cities = new WP_Query($args);

                if ($cities->have_posts()) : while ( $cities->have_posts()) : $cities->the_post();?>

					<div class="col-xs-2 col-sm-4 col-md-4 col-lg-2">
						<a href="<?php the_permalink() ?>">
							<figure>
                                <?php echo get_the_post_thumbnail( $post->ID ); ?>
								<p><?php the_title()?></p>
							</figure>
						</a>
					</div>

                <?php endwhile; endif; wp_reset_query(); ?>
			</div>
		</div>
	</section>

	<!--===============RECENT OBJECT========-->
	<section id="recent_object">
		<div class="<?php echo $container ?> recent">
			<h1>Свежие объекты недвижимости</h1>
			<div class="row">
				<?php
	            $args = array(
	                'post_type' => 'realty-object',
	                'posts_per_page' => 9
	            );

	            $objects = new WP_Query($args);

	            if ($objects->have_posts()) : while ( $objects->have_posts()) : $objects->the_post();?>
		            <div class="col-xs-4 col-sm-12 col-md-12 col-lg-4">
				            <a href="<?php the_permalink() ?>">

	                            <?php echo get_the_post_thumbnail( $post->ID ); ?>
					            <figure>
						            <h2><?php esc_attr(the_field('realty_name')) ?></h2>
						            <p><i class="fas fa-map-marker-alt"></i><?php esc_attr(the_field('address'));?></p>
						            <p><span>Тип:</span> <?php if(get_field('living_area')): echo 'Жилая площадь'; else:echo ('Нежилая площадь');endif ?></p>
						            <ul>
							            <li><span>Площадь:</span> <?php esc_attr(the_field('area'));?> кв.м.</li>
							            <li><span>Этаж:</span> <?php esc_attr(the_field('floor'));?></li>
						            </ul>
						            <p><span>Стоимость:</span> <?php
							            $numberCost = get_field('cost');
							            echo esc_attr(number_format((float)$numberCost,0,'',' '));?> руб.</p>
					            </figure>
				            </a>
			            </div>
	            <?php endwhile; endif; wp_reset_query(); ?>
			</div>
		</div>
	</section>

	<!--===============FORMA========-->
		<?php pub_post_form(); ?>

	</body>
	</html>

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
