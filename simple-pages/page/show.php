<?php 

$bodyclass = 'page simple-page';
if (simple_pages_is_home_page(get_current_simple_page())) {
    $bodyclass .= ' simple-page-home';
} ?>

<?php head(array('title' => html_escape(simple_page('title')), 'bodyclass' => $bodyclass, 'bodyid' => html_escape(simple_page('slug')))); ?>
<div id="primary">
    <?php if (!simple_pages_is_home_page(get_current_simple_page())): ?>
    <?php endif; ?>
    <h1><?php echo html_escape(simple_page('title')); ?></h1>
    <div id="primary-content">
	    <?php echo eval('?>' . simple_page('text')); ?>
	</div>
</div>
<?php if (!simple_pages_is_home_page(get_current_simple_page())): ?>
<div id="secondary">
</div>
<?php endif; ?>
<?php echo foot(); ?>