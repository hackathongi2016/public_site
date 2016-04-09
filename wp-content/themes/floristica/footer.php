</div><!--#main-->

<div id="recent">
    <div class="content">
        <div class="box blogroll">
	    <?php wp_list_bookmarks(array('title_before'=>'<h3>', 'title_after'=>'</h3>', 'category_before'=>'', 'category_after'=>'')); ?>
        </div>
        <div class="meta box">
        	<h3>Meta:</h3>
        	<ul>
            	<li><a href="<?php bloginfo('rss2_url'); ?>" title="Syndicate this site using RSS"><abbr title="Really Simple Syndication">RSS</abbr></a></li>
            	<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="The latest comments to all posts in RSS">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
            	<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
            	<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
            	<?php wp_meta(); ?>
        	</ul>
        </div>

        <div class="box posts">
            <h3>Recent Posts</h3>
            <?php $_query = new WP_Query(array(
                'posts_per_page' => 5,
            )) ?>
            <?php if ($_query->have_posts()): ?>
                <ul>
                    <?php while ($_query->have_posts()) : $_query->the_post(); ?>
                    <li>
                        <span class="date"><?php the_time('m-d-Y') ?></span> / <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent link to <?php the_title(); ?>"><?php the_title(); ?></a>
                    </li>
                <?php endwhile;?>
                </ul>
            <?php endif ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</div><!--#recent-->

<div id="footer">
    <span class="copyright">&copy; <?php echo date('Y');?> <?php bloginfo('name') ?>. All Rights Reserved.</span>
    <span class="links">
        <a href="<?php bloginfo('rss2_url'); ?>" title="Syndicate this site using RSS" class="rss">Entries <abbr title="Really Simple Syndication">RSS</abbr></a>
        <a href="<?php bloginfo('comments_rss2_url'); ?>" title="The latest comments to all posts in RSS" class="rss">Comments <abbr title="Really Simple Syndication">RSS</abbr></a>
	<?php wp_loginout(); ?>
	<a href="https://www.aoe.com/en/lp/wordpress-themes.html" title="AOE" class="powered"><img src="<?php echo get_template_directory_uri() ?>/images/cubes.gif" /></a>
    </span>
</div><!--#footer-->



</div>
<?php wp_footer(); ?>
</body>
</html>
