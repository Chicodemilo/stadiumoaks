<?php 
	$x = 0;
	echo "<div class='view_pic_box' id='view_pic_box'>";
			foreach ($pictures as $value) {
				
				echo "<div class='view_small_pic_box' id='view_small_pic_box".$x."' style='display:none;'>";
				echo "<div class='close_x' id='close_x".$x."'>";
				echo '<svg version="1.1" id="red_x'.$x.'" class="red_x" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 width="35px" height="35px" viewBox="0 0 198 198" enable-background="new 0 0 198 198" xml:space="preserve">
					<polygon fill="#890E0E" points="171.25,19.941 100.535,90.655 29.82,19.941 20.111,29.651 90.825,100.365 20.112,171.078 29.822,180.789 
						100.535,110.075 171.248,180.787 180.957,171.078 110.244,100.365 180.957,29.651 "/>
					</svg>';
				echo "</div>";
				echo "<div class='right_arrow' id='right_arrow".$x."'>";
				echo '<svg version="1.1" id="right_arrow_svg'.$x.'" class="right_arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 width="30px" height="30px" viewBox="0 0 198 198" enable-background="new 0 0 198 198" xml:space="preserve">
						<g>
							<path fill="#3D53A4" d="M16.56,195.471l-7.174-13.345l153.937-82.727L9.385,16.687l7.174-13.345l178.769,96.057L16.56,195.471z"/>
						</g>
						</svg>';
				echo "</div>";
				echo "<div class='left_arrow' id='left_arrow".$x."'>";
				echo '<svg version="1.1" id="left_arrow_svg'.$x.'" class="left_arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 					width="30px" height="30px" viewBox="0 0 198 198" enable-background="new 0 0 198 198" xml:space="preserve">
						<g>
						<path fill="#3D53A4" d="M182.586,3.342l7.174,13.345L35.823,99.414l153.937,82.712l-7.174,13.345L3.817,99.414L182.586,3.342z"/>
					</g>
					</svg>';
				echo "</div>";
				echo "<div class='pic_caption'>".$value['caption']."</div>";
				echo "<img src='".base_url()."images/pictures/".$value['id']."/".$value['name']."' alt='".$value['caption']."'>";
				echo "</div>";
				$x += 1;
			}
	echo "</div>";
?>
<div class="center_box">
	<?php 
		if($property_pictures_text != ''){
			echo "<div class='pic_main_text' id='pic_main_text'>
						<p>".$property_pictures_text."</p>
				</div>";
		}else{
			echo "<div class='pic_main_text_none'></div>";
		}
	 ?>

	<div class="big_pic_box" id="big_pic_box">
			<?php 
				$x = 0;
				foreach ($pictures as $value) {
					echo "<div class='not_seen_pic_box'>";
					echo "<div class='small_pic_box' id='small_pic_box".$x."'>";
					echo "<img src='".base_url()."images/pictures/".$value['id']."/".$value['name']."' alt='".$value['caption']."'>";
					echo "</div>";
					echo "</div>";
					$x += 1;
				}
			 ?>
	<div class='mobile_pic_bottom'>&nbsp;</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		<?php
			$x = 0;
			$count = count($pictures);
			foreach ($pictures as $value) {
				$prev = $x - 1;
				$next = $x + 1;
				if($x == 0){
					$prev = $count - 1;
				}
				if($x == $count-1){
					$next = 0;
				}
				echo "$('#small_pic_box".$x."').hover(function() {
							$(this).css({position:'relative'}).animate({top: '-=3'}, 100).addClass('small_pic_box_shadow');
						}, function() {
							$(this).animate({top: '+=3'}, 100).removeClass('small_pic_box_shadow');
						});

						$('#small_pic_box".$x."').click(function(){

		 					$('#view_pic_box').fadeIn(400);
		 					$('#view_small_pic_box".$x."').fadeIn(200);

		 					$('#big_pic_box').fadeOut(1000);
		 					$('#pic_main_text').fadeOut(1000);
		 					window.scrollTo(0,0);
		 				});

					$('#close_x".$x."').click(function(){
						$('#view_small_pic_box".$x."').fadeOut(200);
						$('#view_pic_box').fadeOut(200);
						$('#big_pic_box').fadeIn(600);
						$('#pic_main_text').fadeIn(600);
					});
					$('#right_arrow".$x."').click(function(){
						$('#view_small_pic_box".$x."').fadeOut(150);
						$('#view_small_pic_box".$next."').fadeIn(800);
						
					});

					$('#left_arrow".$x."').click(function(){
						$('#view_small_pic_box".$x."').fadeOut(150);
						$('#view_small_pic_box".$prev."').fadeIn(800);
					});";
				$x += 1;
				}
		 ?>
	});
</script>
