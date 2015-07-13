
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
	<div class="show_spec" id="show_spec">show special</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
     var $special_box = $('#special_box');
     $special_box.delay(2000).animate({top: '+=150'}, 300).delay(8000).fadeTo('slow', .5).animate({top: '-=107'}, 300).animate({left: '-=295'}).promise().then(function() {
     	$('#show_spec').fadeTo('fast', 1)
     	$('#special_conditions').fadeTo(500, 0);
        $special_box.mouseenter(function() {
        	$('#show_spec').fadeTo(250, 0);
        	$('#special_conditions').fadeTo(250, 1);
            $special_box.fadeTo('fast', 1).animate({left: '+=295'}).animate({top: '+=107'}, 300);
            
        });
        $special_box.mouseleave(function(){
            $special_box.fadeTo('fast', .5).animate({top: '-=107'}, 300).animate({left: '-=295'});
            $('#special_conditions').fadeTo('fast', 0);
            $('#show_spec').fadeTo(1500, 1)
	        });
	    });
	});
</script>