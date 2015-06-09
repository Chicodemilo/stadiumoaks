<footer>
        <div id="footer_info_right" style="color:#<?php echo $property_color_3 ?>;">
        	<div class="footer_address_box">
		        <?php echo "<span class='footer_address'>".$property_name; ?>&nbsp;&#8226;
		        <?php echo $property_phone; ?>&nbsp;&#8226;
		        <?php echo $property_address; ?>&nbsp;&#8226;
		        <?php echo $property_city.", ".$property_state." ".$property_zip."</span>"; ?>
	        </div>
	        <div class="badges_box">
			<svg version="1.1" id="equal_housing" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 width="25px" height="25px" viewBox="0 0 198 198" enable-background="new 0 0 198 198" xml:space="preserve">
				<g>
					<path fill="#<?php echo $property_color_3 ?>" d="M100.774,6.3L3.002,65.958v13.258h16.572v62.972h159.088V79.216h16.572V65.958L100.774,6.3z M157.12,127.273H39.459V60.987
						l59.659-33.145l58.001,33.145V127.273z"/>
					<rect fill="#<?php echo $property_color_3 ?>" x="65.975" y="67.247" width="62.973" height="16.571"/>
					<polygon fill="#<?php echo $property_color_3 ?>" points="65.975,94.13 128.947,93.762 128.947,110.702 65.975,110.702 	"/>
				</g>
			</svg>
			<svg version="1.1" id="handicap" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 width="30px" height="30px" viewBox="0 0 190 210" enable-background="new 0 0 198 198" xml:space="preserve">
			<path fill="#<?php echo $property_color_3 ?>" d="M126.779,129.137c-2.383,21.26-20.578,37.758-42.518,37.758c-23.639,0-42.857-19.218-42.857-42.856
				c0-16.836,9.864-31.463,24.148-38.435l1.191,9.013c-10.034,5.953-16.837,16.837-16.837,29.422c0,19.047,15.307,34.355,34.355,34.355
				c17.176,0,31.461-12.759,34.014-29.257H126.779L126.779,129.137z M74.229,95.806c-3.062-19.386-3.404-21.937-3.404-24.149
				c0-7.141,5.273-11.904,11.225-11.904c10.035,0,11.396,8.504,12.586,17.518l0.51,3.742h27.213c0,10.543-5.954,11.563-14.966,11.563
				c-3.912,0-7.315-0.169-10.546-0.511l2.212,14.286h37.753l18.201,49.149c0.677,2.041,1.02,3.742,1.02,4.591
				c0,1.53-0.851,2.212-4.255,2.212c-6.458,0-8.162-2.382-9.864-6.803l-12.414-33.504H78.309L74.229,95.806L74.229,95.806z
				 M86.643,31.861c6.631,0,11.904,5.271,11.904,11.904s-5.273,11.905-11.904,11.905c-6.633,0-11.906-5.272-11.906-11.905
				S80.01,31.861,86.643,31.861L86.643,31.861z"/>
			</svg>
        	</div>
        </div>
      
        <div id="footer_info_left" style="color:#<?php echo $property_color_3 ?>;">
	         <?php 
	        	if($management_logo_name != 'N'){
	        		echo "<div id='property_management_logo_box' class='property_management_logo_box'>";
	        		echo "<img src='".base_url()."images/logos/management/".$management_logo_name."'>";
	        		echo "</div>";
	        	}else{
	        		echo "<div id='property_management_logo_box' class='property_management_logo_box'></div>";
	        	}
	         ?>
         	<div class='property_management_name'>
		        &copy;<?php echo " ".date('Y'); ?>
		        <?php 
		        	if($property_management_name != ''){
		        		if($property_management_url != 'N'){
		        			$property_management_url = prep_url($property_management_url);
		        			echo "<a href='".$property_management_url."'>".$property_management_name."</a>";
		        		}else{
		        			echo $property_management_name;
		        		}
		        	}else{
		        		echo $property_name;
		        	}
		         ?>
		    </div>	        
        </div>
</footer>
<style type="text/css">
#footer_info_left a:link {color: #<?php echo $property_color_3; ?>;}
#footer_info_left a:hover {color: #<?php echo $property_color_2; ?>;}
#footer_info_left a:visited {color: #<?php echo $property_color_3; ?>;}
#footer_info_left a:active {color: #dedede;}
</style>
</body>
</html>