<section id="content">
<div id="startchange">
<div class="break"></div>
<?php foreach (array_reverse($news) as $news_item) { 
	if($news_item['is_viewed']) {
?>

	<div class="row">

		<div class="article">
	    	<h1><a href="<?php echo base_url().'post/'.$news_item['slug']; ?>"><?php echo $news_item['title']; ?></a></h1>
	    	<h3><?php echo $news_item['subtitle']; ?></h3>
			<div class="date">
				<?php
					if($news_item['show_date']) 
						echo $news_item['date']; 
					if($news_item['show_author'])
						echo " [ ".$news_item['author']." ]";
				?>	
			</div>
				<p>
					<?php 
						$content = nl2br($news_item['text']);
						if(strpos($content, "<!-- Read more -->"))
							$content = substr($content, 0, strpos($content, "<!-- Read more -->"));
						echo $content;
					?>
					
				</p>
				<p><a href="<?php echo base_url().'post/'.$news_item['slug']; ?>" class="more-link">[ czytaj całość! ]</a></p>
		</div>
	</div>
<?php }} ?>
</div>
</section>
