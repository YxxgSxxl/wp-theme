<?php get_header(); ?>

    <h1>Le thème de Alex</h1>
    <h2>Page actuelle: <?php the_title(); ?></h2>

<?php if(have_posts()): ?>
    <div class="row gap-4 justify-content-center">
    <?php while(have_posts()): the_post(); ?>
    <div class="col-sm-4">
        <div class="card position-relative" style="width: 18rem; height: auto">
            <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => "", 'style' => 'height: 10rem;']) ?>
            <div class="card-body">
                <h5 class="card-title"><?php the_title(); ?></h5>
                <p class="card-text"><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary position-absolute" style="bottom: 20px;">En lire plus</a>
            </div>
        </div>
    </div>
    <?php endwhile ?>
    </div>
<?php else: ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>

<?php get_footer(); ?>