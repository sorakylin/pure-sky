<?php $options = get_option('p_options'); ?>
<footer>
    <p class="copyright"><?php echo $options['copyright']; ?></p>
</footer>
<?php if ($options['back-to-top']): ?>
    <div class="back-to-top"><i class="iconfont icon-upbig"></i> <span id="scroll-percent">0%</span></div>
<?php endif; ?>
<?php echo $options['html']; ?>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/highlight.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.pjax.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery-ias.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/pure.js"></script>
<?php if ($options['pjax']): ?>
<script>
    // Pjax
    $(function () {
        $(document).pjax("a", '.container', {
            fragment: '.container',
            timeout: 6000
        });
        $(document).on('pjax:complete', function () {
            $('pre code').each(function (i, e) {
                hljs.highlightBlock(e)
            });
            $("#comment").on("click", function () {
                $(".comment-fields").fadeIn(300);
            });
            $(document).ready(function () {
                $(".fancybox").fancybox();
            });
            ajaxPagination();
        });

        var href = $('#pagination a').attr('href');
        //?_pjax=.container
        if (href && href.indexOf('?_pjax=.container') == -1) {
            $('#pagination a').attr('href', href + '?_pjax=.container');
        }
    });
</script>
<?php endif; ?>
<?php echo "<script>".$options['js']."</script>"; ?>
<?php wp_footer();?>
</body>
</html>