<?php head(array('title'=>html_escape('Browse Exhibits'),'bodyid'=>'exhibit','bodyclass'=>'browse')); ?>
<div id="primary">
    <h1>Browse Exhibits (<?php echo $total_records; ?> total)</h1>
	<?php if (count($exhibits) > 0): ?>
	
	<div class="secondary-nav top">

		<ul class="navigation">
		    <?php echo nav(array('Browse All' => uri('exhibits'), 'Browse by Tag' => uri('exhibits/tags'))); ?>
	    </ul>	
	
    	<div class="pagination"><?php echo pagination_links(); ?></div>

    </div>
	
    <div id="exhibits">	
    <?php $exhibitCount = 0; ?>
    <?php while(loop_exhibits()): ?>
    	<?php $exhibitCount++; ?>
    	<div class="exhibit <?php if ($exhibitCount%2==1) echo ' even'; else echo ' odd'; ?>">
    		<h2><?php echo link_to_exhibit(); ?></h2>
    		<div class="exhibit-description"><?php echo exhibit('description'); ?></div>
    		<p class="tags"><?php echo tag_string(get_current_exhibit(), uri('exhibits/browse/tag/')); ?></p>
    	</div>
    <?php endwhile; ?>
    </div>
    
    <div class="pagination"><?php echo pagination_links(); ?></div>

    <?php else: ?>
	<p class="none">There are no exhibits available yet.</p>
	<?php endif; ?>

	<div class="secondary-nav bottom">

		<ul class="navigation">
		    <?php echo nav(array('Browse All' => uri('exhibits'), 'Browse by Tag' => uri('exhibits/tags'))); ?>
	    </ul>	
	
    	<div class="pagination"><?php echo pagination_links(); ?></div>

    </div>	
	
</div>
<?php foot(); ?>