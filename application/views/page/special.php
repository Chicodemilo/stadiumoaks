
<div class="special_box" id="special_box">
<div class="special_title">
	<?php echo $title; ?>
</div>
<div class="special_description">
	<?php echo $description; ?>
</div>
<div class="special_conditions">
	Exp:<?php 
		$end_format = date('n-j-y', strtotime($end));
		echo $end_format."&nbsp;&nbsp;&nbsp;".$conditions; 
	?>
</div>
			

	
	
</div>

<script type="text/javascript">
	$(document).ready(function() {
     var $special_box = $('#special_box');
     
     $special_box.delay(2000).animate({top: '+=110'}, 300).delay(8000).fadeTo('slow', .3).animate({right: '-=300'}, 300).promise().then(function() {
        $special_box.mouseenter(function() {
            $special_box.fadeTo('fast', 1).animate({right: '+=300'}, 300);
        });
        $special_box.mouseleave(function(){
            $special_box.fadeTo('fast', .3).animate({right: '-=300'}, 300);
        });
    });
});

</script>