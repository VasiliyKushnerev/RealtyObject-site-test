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

    <!--===============SINGLE OBJECT========-->
    <section id="object-single">
        <div class="<?php echo $container ?>">
            <div class="row">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="object-name">
                            <h1>Продаётся <?php esc_attr(the_field('realty_name')) ?></h1>
                            <ul>
                                <li><?php the_date('j F Y')?></li>
                                <li><?php
                                    $numberCost = get_field('cost');
                                    echo esc_attr(number_format($numberCost,0,'',' '));?> руб.</li>
                            </ul>
                            <p><i class="fas fa-map-marker-alt"></i><?php esc_attr(the_field('address'))  ?></p>
                        </div>
                        <div class="object-description">
                            <?php echo get_the_post_thumbnail( $post->ID ); ?>
                            <div class="object-description-bottom">
                                <ul>
                                    <li><span>Площадь:</span> <?php esc_attr(the_field('area'))  ?> м.кв.</li>
                                    <li><span>Этаж:</span> <?php esc_attr(the_field('floor'))  ?></li>
                                </ul>
                                <h2>Описание</h2>
                                <p><?php $objdesc = get_the_content(); echo esc_attr(strip_tags($objdesc))?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>

</div><!-- #single-wrapper -->

<?php get_footer(); ?>
