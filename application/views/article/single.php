<div class="row" style="padding-top: 60px;">

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
			<p><?php echo nl2br($news_item['text']); ?></p>
	</div>
</div>
