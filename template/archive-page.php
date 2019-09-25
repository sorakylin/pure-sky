<?php
/**
 * Template Name: 归档页面
 */
get_header();
?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) :
the_post(); ?>

    <style type="text/css">
        .article-title {
            text-align: center;
        }
        .al_post_list li a {
            margin-right: 10px;
            margin-left: 10px;
            color: #111;
            text-decoration: none;
            transition: color 0.3s;
        }

        .al_post_list li a:hover{
            color: #00e0e0;
        }

        .time_base-l {
            position: relative;
            margin-bottom: 15px;
            margin-left: 30px;
            list-style-type: none;
            line-height: 30px;
            box-sizing: border-box;
            cursor: pointer;
        }
    </style>
<div class="container">
    <div class="content-widescreen">
        <section class="posts">
            <div class="posts-inner">
                <article class="post text">
                    <h1 class="article-title"><?php the_title(); ?></h1>
                    <?php archives_list(); ?>
                </article>
            </div><!-- /.posts-inner -->
        </section><!-- /.posts -->
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
