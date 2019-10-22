<?php get_header(); ?>

<div class="container">
    <div class="article">
        <hgroup class="header">
            <h3 class="article-title"><?php the_title(); ?></h3>
            <div class="article-info">
                <span><i class="iconfont icon-time"></i><?php the_time('Y-n-j'); ?></span>
                <span><i class="iconfont icon-browse"></i><?php post_views(); ?></span>
                <span><a href="#post-like"><i class="iconfont icon-like"></i><?php show_like(); ?></a></span>
                <span><a href="#comments"><i class="iconfont icon-message"></i><?php $id=$post->ID; echo get_post($id)->comment_count;?></a></span>
                <?php if (is_user_logged_in()){ echo '<span><i class="iconfont icon-brush"></i>'; edit_post_link('编辑'); echo '</span>';} ?>
            </div>
        </hgroup>
        <article class="content">
            <?php while (have_posts()): the_post(); the_content(); endwhile; ?>
        </article>

        <?php comments_template(); ?>
    </div>
</div>
<?php get_footer(); ?>