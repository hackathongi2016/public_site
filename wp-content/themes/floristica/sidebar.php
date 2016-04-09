<div id="sidebar">
<span class="header"></span><div class="content">
<div class="transparent"></div>
<div class="text">
    <?php if (!dynamic_sidebar()) : ?>
        <div class="categories box">
            <?php wp_list_categories(array('title_li'=>'<h3>Category:</h3>')); ?>
        </div>
    <div class="archive box">
        <h3>Archives:</h3>
        <ul>
            <?php wp_get_archives('type=monthly'); ?>
        </ul>
    </div>
    <?php endif; ?>
</div>
</div>
<span class="footer"></span>
</div>
