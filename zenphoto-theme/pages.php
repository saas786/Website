<?php include('header.php'); ?>

<div id="sidebar">
	<?php printSearchForm();	?>
	<?php
	$parent = $_zp_current_zenpage_page->getParentid();
	$subpages = $_zp_current_zenpage_page->getPages();
	//echo '<pre>'; print_r($parents).'<br />'; print_r($subpages); echo '</pre>';
	if(!is_null($parent) || $subpages) {
	?>
		<hr />
		<?php printPageMenu('omit-top','','','','active','',1); ?>

	<?php } ?>
	<?php 
		if($_zp_current_zenpage_page->getTitlelink() == 'advertise') {
			zp_printSponsorAvailability(); 
		}
	?>
	<?php zp_printSidebarBoxes(); ?>
	<hr />
    
</div><!-- sidebar end -->

<div id="content">
    	<h2><?php printZenpageItemsBreadcrumb('',' » '); ?><?php printPageTitle(); ?></h2> 
    	<ol id="toc" class="table_of_content_list"></ol> 
  		<div class="entrybody">
  			<span id="entrybody">
  		 	<?php printPageContent(); ?>
  		 	<?php printCodeblock(1); ?>
  		 	</span>
  		</div>

		

<?php include('footer.php'); ?>
