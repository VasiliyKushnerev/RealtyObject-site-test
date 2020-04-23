<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">

    <!--===============SINGLE CITY========-->
    <section id="single-city">
        <div class="<?php echo $container ?> single-city">
            <div class="row">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h1><?php echo the_title() ?></h1>
                        <div class="main_img">
                            <?php echo get_the_post_thumbnail( $post->ID ); ?>
                        </div>
                        <p class="city-desc">
                            <?php $cytdesc = get_the_content(); echo esc_attr(strip_tags($cytdesc)) ?>
                        </p>
                    </div>
                <?php endwhile; endif; ?>
            </div>
            <h2>Свежие объекты</h2>
            <div class="row">
                <?php
                $city_title = get_the_title();
                $args = array(
                    'post_type' => 'realty-object',
                    'posts_per_page' => 10,
                    'orderby' =>'date',
                    'meta_key' => 'city',
                    'meta_value' => $city_title,
                );
                $objects = new WP_Query($args);
                if ($objects->have_posts()) : while ( $objects->have_posts()) : $objects->the_post();?>
                <div class="col-xs-4 col-sm-12 col-md-12 col-lg-4">
                    <a href="<?php the_permalink() ?>">
                        <?php echo get_the_post_thumbnail( $post->ID ); ?>
                        <figure>
                            <h3><?php esc_attr(the_field('realty_name')) ?></h3>
                            <p><i class="fas fa-map-marker-alt"></i><?php esc_attr(the_field('address'))  ?></p>
                            <p><span>Тип:</span> <?php if(get_field('living_area')): echo 'Жилая площадь'; else:echo ('Нежилая площадь');endif ?></p>
                            <ul>
                                <li><span>Площадь:</span> <?php esc_attr(the_field('area'));?> кв.м.</li>
                                <li><span>Этаж:</span> <?php esc_attr(the_field('floor'));?></li>
                            </ul>
                            <p><span>Стоимость:</span> <?php
                                $numberCost = get_field('cost');
                                echo esc_attr(number_format($numberCost,0,'',' '));?> руб.</p>
                        </figure>
                    </a>
                </div>
                <?php endwhile; endif; wp_reset_query(); ?>

            </div>
        </div>
    </section>

</div><!-- #single-wrapper -->

<?php get_footer(); ?>
