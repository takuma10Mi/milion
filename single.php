<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

        <h2 class="pageTitle"><?php the_title(); ?></h2>

        <main class="main">
            <div class="container">
                <div class="content">
								<p class="single_post_img"><?php the_post_thumbnail('thumbnail'); ?></p>
                    <?php the_content(); ?>
                </div>
            </div>
        </main>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>