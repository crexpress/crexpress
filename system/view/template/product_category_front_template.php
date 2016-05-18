<div class="container">
	<div class="row-fluid">
		<div class="span12 slider"> 
			<?php echo Html::img('inner-about-banner.jpg'); ?>
		</div>
	</div>
</div>
<div class="container">
	<div class="row-fluid">
		<div class="span12 start">
			<div class="span2"> <?php echo Html::img('mai.png'); ?></div>
			<div class="span8 mid_mg">
				<p><?php echo $latest_news; ?></p>
			</div>
			<div class="span2 info"> <a href="<?php echo page_url(17); ?>">View More...</a> </div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row-fluid">
		<div class="span12 mid_part">
			<div class="span3 mid_part_l">
				<?php echo $left_widget; ?>
			</div>
			<div class="span9 mid_part_r">
				<div class="row-fluid">
					<div class="span12 vedio_cell">
						<?php
						$db = new Db();
						$products = $db->select('product', array('parent_id=' => $category_id, 'status=' => 1),'sort_order','asc');
						foreach($products as $product){
						?>
						<div class="span4 Vedio_name">
							<a href="<?php echo page_url($product['slug']); ?>"><img src="<?php echo SITE_PATH;?>/asset/data/product/<?php echo $product['image']; ?>" />
							<p><?php echo $product['title'];?></p></a>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>