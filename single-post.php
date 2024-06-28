<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <img src="<?php the_post_thumbnail_url(); ?>" alt="" style="width: 50%; height: auto">
    <?php the_content(); ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
