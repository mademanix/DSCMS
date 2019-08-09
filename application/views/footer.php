		<footer class="text-center">copyright siarzewsky, <?php echo date("Y"); ?></footer>
		</div>
		<!-- jQuery -->
		<script src="<?php echo base_url(); ?>js/jquery.js""></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url(); ?>js/bootstrap.js"></script>
		
		<script src="<?php echo base_url(); ?>js/jquery.easing.min.js"></script>

		<script src="<?php echo base_url(); ?>js/beets.js"></script>

		<script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
		<script type="text/javascript" src="<?= base_url(); ?>js/8beetscookie.js"></script>
		<script> 
			$(document).ready(function(){       
			   var scroll_start = 0;
			   var startchange = $('#startchange');
			   var offset = startchange.offset();
			   if($( window ).width() > 767)
			    	if (startchange.length){
			   			$(document).scroll(function() { 
			      scroll_start = $(this).scrollTop();
			      if(scroll_start > offset.top - 10) {
			          $(".navbar-default").css('background-color', '#333');
			          $(".navbar-default").css('padding-top', '0');
			          
			       } else {
			          $('.navbar-default').css('background-color', 'transparent');
			          $(".navbar-default").css('padding-top', '20px');
			          
			       }
			   });
			    }
			});
		</script>
	</body>
</html>