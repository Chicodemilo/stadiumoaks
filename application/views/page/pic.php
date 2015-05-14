<?php 
			foreach ($pictures as $value) {
				echo "<div class='view_pic_box' id='view_pic_box".$value['id']."'>";
				echo "<div class='view_small_pic_box' id='view_small_pic_box".$value['id']."'>";
				echo "<div class='close_x' id='close_x".$value['id']."'>";
				echo '<svg version="1.1" id="red_x" class="red_x" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 width="35px" height="35px" viewBox="0 0 198 198" enable-background="new 0 0 198 198" xml:space="preserve">
					<polygon fill="#890E0E" points="171.25,19.941 100.535,90.655 29.82,19.941 20.111,29.651 90.825,100.365 20.112,171.078 29.822,180.789 
						100.535,110.075 171.248,180.787 180.957,171.078 110.244,100.365 180.957,29.651 "/>
					</svg>';
				echo "</div>";
				echo "<div class='pic_caption'>".$value['caption']."</div>";
				echo "<img src='".base_url()."images/pictures/".$value['id']."/".$value['name']."' alt'".$value['caption']."'>";
				echo "</div>";
				echo "</div>";

				
			}
?>

<?php 
	if($property_pictures_text != ''){
		echo "<div class='pic_main_text' id='pic_main_text' style='color:#".$property_color_2.";'>
					<p>".$property_pictures_text."</p>
			</div>";
	}else{
		echo "<div class='pic_main_text_none'></div>";
	}
 ?>

<div class="big_pic_box" id="big_pic_box">
		<?php 
			foreach ($pictures as $value) {
				echo "<div class='not_seen_pic_box'>";
				echo "<div class='small_pic_box' id='small_pic_box".$value['id']."'>";
				echo "<img src='".base_url()."images/pictures/".$value['id']."/".$value['name']."' alt'".$value['caption']."'>";
				echo "</div>";
				echo "</div>";


			}
		 ?>
<div class='mobile_pic_bottom'>&nbsp;</div>
</div>


<script type="text/javascript">
	$(document).ready(function(){
		<?php
			foreach ($pictures as $value) {
				echo "$('#small_pic_box".$value['id']."').hover(function() {
							$(this).css({position:'relative'}).animate({top: '-=3'}, 100).addClass('small_pic_box_shadow');
						}, function() {
							$(this).animate({top: '+=3'}, 100).removeClass('small_pic_box_shadow');
						});

						$('#small_pic_box".$value['id']."').click(function(){

		 					$('#view_pic_box".$value['id']."').fadeIn(400);

		 					$('#big_pic_box').fadeOut(1000);
		 					$('#pic_main_text').fadeOut(1000);
		 					window.scrollTo(0,0);
		 				});

					$('#close_x".$value['id']."').click(function(){
						$('#view_pic_box".$value['id']."').fadeOut(200);
						$('#big_pic_box').fadeIn(600);
						$('#pic_main_text').fadeIn(600);
						
					});";
				}
		 ?>
	});
</script>
<style type="text/css">
.red_x polygon {transition: 0.5s;}
.red_x:hover polygon {fill:#FC6060;}
</style>


