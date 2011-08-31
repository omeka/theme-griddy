<?php head(array('title'=>'Browse Collections','bodyid'=>'collections','bodyclass' => 'browse')); ?>
<div id="primary">
	<h1>Collections</h1>
    <div class="pagination secondary-nav"><?php echo pagination_links(); ?></div>
		<?php while (loop_collections()): ?>

            <p class="view-items-link-browse"><?php echo link_to_browse_items('View the items in this collection', array('collection' => collection('id'))); ?></p>

			<div class="collection">
			    
            	<h2><?php echo link_to_collection(); ?></h2>
	
            	<div class="element">
            	<div class="collection-description"><?php echo nls2p(collection('Description', array('snippet'=>150))); ?></div>
	            </div>
	            
                <?php if (collection_has_collectors()): ?>
            	<div class="element">
                <h3>Collector(s)</h3>
            	    <div class="element-text">
                    <p><?php echo collection('Collectors', array('delimiter'=>', ')); ?></p>
            	    </div>
            	</div>            	   
            	<?php endif; ?>
            	
            <?php echo plugin_append_to_collections_browse_each(); ?>
            
            </div><!-- end class="collection" -->
		<?php endwhile; ?>
		
        <?php echo plugin_append_to_collections_browse(); ?>
        
</div><!-- end primary -->
			
<?php foot(); ?>