<?php
/**
 * Template Name: 归档页面
 */
get_header();
?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) :
the_post(); ?>

<div class="archives-container container">
    <div class="archives-content-widescreen">
        <section class="posts">
            <div class="posts-inner">
                <article class="post text">
                    <h1 class="archives-article-title"><?php the_title(); ?></h1>
                    <?php archives_list(); ?>
                </article>
            </div><!-- /.posts-inner -->
        </section><!-- /.posts -->
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
