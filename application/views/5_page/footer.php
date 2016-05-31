</div>


<div class="background_slider">
	 <div class="bss-slides">
	 	<?php 
				foreach ($pic_data[pictures] as $key => $value) {
					echo "<figure>";
					echo "<img src='".base_url()."images/pictures/".$value['id']."/".$value['name']."' alt='".$value['caption']."' width='100%''>";
					echo "</figure>";
				}
				

			?>
	 </div>
</div>


<script>

	$(document).ready(function() {
		var opts = {
            //auto-advancing slides? accepts boolean (true/false) or object
            auto : { 
                // speed to advance slides at. accepts number of milliseconds
                speed : 14000, 
                // pause advancing on mouseover? accepts boolean
                pauseOnHover : false 
            },
            // show fullscreen toggle? accepts boolean
            fullScreen : false, 
            // support swiping on touch devices? accepts boolean, requires hammer.js
            swipe : false 
        };
		makeBSS('.bss-slides', opts);
	});
	
	$(document).ready(function() {
     var $social_box = $('#social_box');
     
     $social_box.delay(2500).animate({left: '+=60'}, 300);
    });


</script>

<div class="social_box" id="social_box">
	<?php 

        if ($property_facebook != 'N') {
        			$property_facebook = prep_url($property_facebook);
        			echo '<a href="'.$property_facebook.'">';

					echo '<svg version="1.1" id="facebook_logo" class="facebook_logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 width="55px" height="55px" viewBox="0 0 55 55" enable-background="new 0 0 55 55" xml:space="preserve">
						<path fill="#939598" d="M0.112,0v54.889H55V0H0.112z M37.347,27.445h-6.755c0,10.191,0,22.756,0,22.756h-9.104
							c0,0,0-12.441,0-22.756h-4.552v-9.104h4.514v-4.115c0-3.724,1.773-9.54,9.579-9.54l7.032,0.029v7.8c0,0-4.276,0-5.106,0
							c-0.831,0-2.012,0.412-2.012,2.185v3.64h7.233L37.347,27.445z"/>
						<g id="Layer_1_1_">
						</g>
						</svg>';
					echo "</a>";
					}
		echo "&nbsp;";
		if ($property_twitter != 'N') {
			$property_twitter = prep_url($property_twitter);
		        	echo '<a href="'.$property_twitter.'">';
					echo '<svg version="1.1" id="twitter_logo" class="twitter_logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 width="55px" height="55px" viewBox="0 0 55 55" enable-background="new 0 0 55 55" xml:space="preserve">
							<g id="Layer_1_1_">
							</g>
							<path fill="#939598" d="M0.112,0v54.889H55V0H0.112z M45.889,18.918c0.018,0.37,0.023,0.744,0.023,1.118
								c0,11.409-8.822,24.563-24.956,24.563c-4.952,0-9.561-1.43-13.446-3.879c0.688,0.08,1.383,0.12,2.093,0.12
								c4.112,0,7.893-1.381,10.894-3.695c-3.838-0.07-7.076-2.567-8.193-5.994c0.537,0.1,1.086,0.153,1.65,0.153
								c0.803,0,1.576-0.104,2.313-0.301c-4.012-0.797-7.036-4.286-7.036-8.469c0-0.036,0-0.071,0-0.107
								c1.18,0.646,2.534,1.033,3.972,1.078c-2.352-1.545-3.906-4.19-3.906-7.183c0-1.583,0.437-3.068,1.189-4.341
								c4.328,5.224,10.79,8.661,18.08,9.022c-0.147-0.635-0.229-1.292-0.229-1.968c0-4.767,3.928-8.634,8.771-8.634
								c2.522,0,4.803,1.051,6.401,2.729c1.997-0.387,3.877-1.109,5.57-2.097c-0.654,2.017-2.045,3.709-3.856,4.776
								c1.777-0.209,3.468-0.67,5.037-1.36C49.091,16.18,47.6,17.701,45.889,18.918z"/>
							<g id="Layer_1_2_">
							</g>
							</svg>


							';

					echo "</a>";
					}
		echo "";
		if ($property_instagram != 'N') {
			$property_instagram = prep_url($property_instagram);
		        	echo '<a href="'.$property_instagram.'">';

					echo '<svg version="1.1" id="instagram_logo" class="instagram_logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 width="55px" height="55px" viewBox="0 0 55 55" enable-background="new 0 0 55 55" xml:space="preserve">
						<g id="Layer_1_1_">
						</g>
						<g id="Layer_1_2_">
						</g>
						<g>
							<path fill="#939598" d="M27.875,34.783c3.976,0,7.217-3.238,7.217-7.214c0-1.566-0.512-3.021-1.365-4.207
								c-1.314-1.817-3.442-3.006-5.852-3.006s-4.538,1.189-5.851,3.006c-0.854,1.186-1.367,2.641-1.367,4.207
								C20.657,31.545,23.895,34.783,27.875,34.783z"/>
							<polygon fill="#939598" points="43.63,18.739 43.63,12.696 43.63,11.791 42.725,11.797 36.682,11.814 36.705,18.763 	"/>
							<path fill="#939598" d="M0.112,0v54.889H55V0H0.112z M48.375,23.362v16.785c0,4.368-3.555,7.922-7.927,7.922h-25.15
								c-4.37,0-7.923-3.554-7.923-7.922V23.362v-8.37c0-4.37,3.553-7.923,7.923-7.923H40.45c4.37,0,7.925,3.553,7.925,7.923V23.362z"/>
							<path fill="#939598" d="M39.086,27.569c0,6.18-5.031,11.211-11.211,11.211c-6.18,0-11.211-5.031-11.211-11.211
								c0-1.486,0.295-2.908,0.825-4.207h-6.121v16.785c0,2.166,1.762,3.928,3.93,3.928h25.15c2.17,0,3.933-1.762,3.933-3.928V23.362
								h-6.122C38.787,24.661,39.086,26.083,39.086,27.569z"/>
						</g>
						<g id="Layer_1_3_">
						</g>
						</svg>
						';
					echo "</a>";
					}
			if ($property_google_plus != 'N') {
			$property_google_plus = prep_url($property_google_plus);
		        	echo '<a href="'.$property_google_plus.'">';

					echo '<svg version="1.1" id="google_logo" class="google_logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 width="55px" height="55px" viewBox="0 0 55 55" enable-background="new 0 0 55 55" xml:space="preserve">
						<g id="Layer_1_1_">
						</g>
						<g id="Layer_1_2_">
						</g>
						<g>
							<path fill="#939598" d="M23.267,32.282c-0.707-0.216-1.455-0.33-2.225-0.339l-0.094-0.001c-3.532,0-6.632,2.145-6.632,4.589
								c0,2.658,2.65,4.74,6.039,4.74c4.469,0,6.736-1.544,6.736-4.587c0-0.288-0.036-0.587-0.105-0.883
								c-0.302-1.184-1.381-1.923-3.015-3.038C23.743,32.608,23.511,32.449,23.267,32.282z"/>
							<path fill="#939598" d="M21.466,23.482c0.001,0,0.001,0,0.001,0c0.846,0,1.558-0.332,2.112-0.966
								c0.864-0.989,1.247-2.609,1.019-4.335c-0.403-3.075-2.595-5.636-4.889-5.703l-0.094-0.002c-0.811,0-1.532,0.333-2.086,0.966
								c-0.855,0.976-1.214,2.52-0.99,4.239c0.404,3.074,2.645,5.736,4.889,5.802H21.466z"/>
						</g>
						<g id="Layer_1_3_">
						</g>
						<path fill="#939598" d="M0.112,0v54.889H55V0H0.112z M31.879,10.851l-2.318,1.685c-0.139,0.098-0.305,0.15-0.48,0.15h-0.831
							c1.075,1.288,1.703,3.123,1.703,5.187c0,2.277-1.15,4.434-3.241,6.07c-1.616,1.263-1.681,1.609-1.681,2.33
							c0.02,0.399,1.149,1.688,2.389,2.567c2.893,2.053,3.97,4.062,3.97,7.423c0,3.502-2.659,6.535-6.771,7.729
							c-1.32,0.38-2.746,0.578-4.241,0.578c-1.666,0-3.271-0.191-4.762-0.574c-2.889-0.729-5.027-2.114-6.025-3.898
							c-0.428-0.775-0.648-1.598-0.648-2.451c0-0.878,0.208-1.768,0.624-2.646c1.585-3.386,5.76-5.659,10.385-5.659
							c0.049,0,0.089,0,0.134-0.002c-0.377-0.662-0.561-1.346-0.561-2.07c0-0.36,0.047-0.727,0.141-1.097
							c-4.852-0.114-8.48-3.671-8.48-8.362c0-3.318,2.642-6.545,6.423-7.849c1.132-0.391,2.285-0.59,3.422-0.59h10.372
							c0.354,0,0.668,0.228,0.776,0.566C32.291,10.275,32.168,10.645,31.879,10.851z M48.955,27.811c0,0.451-0.366,0.819-0.814,0.819h-5.9
							v5.909c0,0.45-0.362,0.814-0.814,0.814h-1.678c-0.45,0-0.816-0.364-0.818-0.814V28.63h-5.896c-0.447,0-0.814-0.368-0.814-0.819
							v-1.68c0-0.453,0.367-0.819,0.814-0.819h5.896v-5.909c0-0.448,0.366-0.817,0.818-0.817h1.678c0.452,0,0.814,0.369,0.814,0.817v5.909
							h5.9c0.448,0,0.814,0.367,0.814,0.819V27.811z"/>
						</svg>
						';

					echo "</a>";
					}
         ?>
</div>


<footer>
        <div id="footer_info_right" style="color:#<?php echo $property_color_3; ?>;">
        <div class="badges_box">
			<svg version="1.1" id="equal_housing" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 width="30px" height="30px" viewBox="0 0 198 198" enable-background="new 0 0 198 198" xml:space="preserve">
				<g>
					<path fill="#<?php echo $property_color_3; ?>" d="M100.774,6.3L3.002,65.958v13.258h16.572v62.972h159.088V79.216h16.572V65.958L100.774,6.3z M157.12,127.273H39.459V60.987
						l59.659-33.145l58.001,33.145V127.273z"/>
					<rect fill="#<?php echo $property_color_3; ?>" x="65.975" y="67.247" width="62.973" height="16.571"/>
					<polygon fill="#<?php echo $property_color_3; ?>" points="65.975,94.13 128.947,93.762 128.947,110.702 65.975,110.702 	"/>
				</g>
			</svg>
			<svg version="1.1" id="handicap" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 width="35px" height="35px" viewBox="0 0 190 210" enable-background="new 0 0 198 198" xml:space="preserve">
			<path fill="#<?php echo $property_color_3; ?>" d="M126.779,129.137c-2.383,21.26-20.578,37.758-42.518,37.758c-23.639,0-42.857-19.218-42.857-42.856
				c0-16.836,9.864-31.463,24.148-38.435l1.191,9.013c-10.034,5.953-16.837,16.837-16.837,29.422c0,19.047,15.307,34.355,34.355,34.355
				c17.176,0,31.461-12.759,34.014-29.257H126.779L126.779,129.137z M74.229,95.806c-3.062-19.386-3.404-21.937-3.404-24.149
				c0-7.141,5.273-11.904,11.225-11.904c10.035,0,11.396,8.504,12.586,17.518l0.51,3.742h27.213c0,10.543-5.954,11.563-14.966,11.563
				c-3.912,0-7.315-0.169-10.546-0.511l2.212,14.286h37.753l18.201,49.149c0.677,2.041,1.02,3.742,1.02,4.591
				c0,1.53-0.851,2.212-4.255,2.212c-6.458,0-8.162-2.382-9.864-6.803l-12.414-33.504H78.309L74.229,95.806L74.229,95.806z
				 M86.643,31.861c6.631,0,11.904,5.271,11.904,11.904s-5.273,11.905-11.904,11.905c-6.633,0-11.906-5.272-11.906-11.905
				S80.01,31.861,86.643,31.861L86.643,31.861z"/>
			</svg>
        </div>
        	<div class="footer_address_box">
		        <?php echo "<span class='footer_address'>".$property_name; ?><br>
		        <?php echo $property_phone; ?>&nbsp; &nbsp; 
		        <?php echo $property_address; ?>
		        <?php echo $property_city.", ".$property_state." ".$property_zip."</span>"; ?>
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
        
</footer>
</body>
</html>