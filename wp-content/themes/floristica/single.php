<?php get_header(); ?>
<div id="content">
<?php if (have_posts()) : ?>
    <ul>
	<?php while (have_posts()) : the_post(); ?>
		<li <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <div class="title">
        	    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
            </div>
            <span class="date"><?php the_time('d')?><span><?php the_time('M')?></span></span>
            <div class="postdata">
                <span class="categories">Categories: <?php the_category(', ') ?></span>
                <span class="comments"><?php comments_popup_link('Comments: 0', 'Comments: 1', 'Comments: %'); ?></span>
            </div>
    		<div class="entry">
		<?php the_post_thumbnail() ?>
    		    <?php the_content('<span>Read more &raquo;</span>'); ?>
    		</div>
<?php wp_link_pages() ?>
            <?php the_tags( '<div class="tags"><span class="top"></span><div class="content">Tags: ', ', ', '</div></div>'); ?>
		</li>
	<?php endwhile; ?>
    </ul>
    
	<?php comments_template(); ?>
    
	<?php else : ?>
        <p>&nbsp;</p>
		<h2 class="t-center">Not Found</h2>
		<p class="t-center">Sorry, but you are looking for something that isn't here.</p>
	<?php endif; ?>
    <span class="footer"></span>
    </div>
<?php get_footer(); ?>
