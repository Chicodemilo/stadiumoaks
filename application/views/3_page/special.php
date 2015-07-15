
<div class="special_box" id="special_box">
	<div class="special_title">
		<?php echo $title; ?>
	</div>
	<div class="special_description">
		<?php echo $description; ?>
	</div>
	<div class="special_conditions" id="special_conditions">
		Exp:<?php 
			$end_format = date('n-j-y', strtotime($end));
			echo $end_format."&nbsp;&nbsp;&nbsp;".$conditions; 
		?>
	</div>
	<br>
	
</div>
<div class="show_spec" id="show_spec">show special</div>
<script type="text/javascript">
	$(document).ready(function() {
     var $special_box = $('#special_box');
     var $show_spec = $('#show_spec');
     $special_box.delay(1500).animate({top: '+=150'}, 300).delay(8000).fadeTo('slow', 0).promise().then(function() {
     	$('#show_spec').fadeTo('fast', 1).promise().then(function(){
	     		$show_spec.mouseenter(function() {
		        	$('#show_spec').toggleClass('show_spec_over', 500);
		            $special_box.fadeTo('fast', 1);
	        	});
		        $show_spec.mouseleave(function(){
		            $('#show_spec').toggleClass('show_spec_over', 500);
		            $special_box.fadeTo('fast', 0);
		        });
     		});
	    });
	});
</script>