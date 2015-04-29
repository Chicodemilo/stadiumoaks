
<footer style="background-color:#<?php echo $property_color_3 ;?>;">
        <div id="footer_info_right" style="color:#<?php echo $property_color_1 ?>;">
        <div class="badges_box">
			<svg version="1.1" id="equal_housing" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 width="30px" height="30px" viewBox="0 0 198 198" enable-background="new 0 0 198 198" xml:space="preserve">
				<g>
					<path fill="#<?php echo $property_color_1 ?>" d="M100.774,6.3L3.002,65.958v13.258h16.572v62.972h159.088V79.216h16.572V65.958L100.774,6.3z M157.12,127.273H39.459V60.987
						l59.659-33.145l58.001,33.145V127.273z"/>
					<rect fill="#<?php echo $property_color_1 ?>" x="65.975" y="67.247" width="62.973" height="16.571"/>
					<polygon fill="#<?php echo $property_color_1 ?>" points="65.975,94.13 128.947,93.762 128.947,110.702 65.975,110.702 	"/>
				</g>
			</svg>
			<svg version="1.1" id="handicap" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 width="35px" height="35px" viewBox="0 0 190 210" enable-background="new 0 0 198 198" xml:space="preserve">
			<path fill="#<?php echo $property_color_1 ?>" d="M126.779,129.137c-2.383,21.26-20.578,37.758-42.518,37.758c-23.639,0-42.857-19.218-42.857-42.856
				c0-16.836,9.864-31.463,24.148-38.435l1.191,9.013c-10.034,5.953-16.837,16.837-16.837,29.422c0,19.047,15.307,34.355,34.355,34.355
				c17.176,0,31.461-12.759,34.014-29.257H126.779L126.779,129.137z M74.229,95.806c-3.062-19.386-3.404-21.937-3.404-24.149
				c0-7.141,5.273-11.904,11.225-11.904c10.035,0,11.396,8.504,12.586,17.518l0.51,3.742h27.213c0,10.543-5.954,11.563-14.966,11.563
				c-3.912,0-7.315-0.169-10.546-0.511l2.212,14.286h37.753l18.201,49.149c0.677,2.041,1.02,3.742,1.02,4.591
				c0,1.53-0.851,2.212-4.255,2.212c-6.458,0-8.162-2.382-9.864-6.803l-12.414-33.504H78.309L74.229,95.806L74.229,95.806z
				 M86.643,31.861c6.631,0,11.904,5.271,11.904,11.904s-5.273,11.905-11.904,11.905c-6.633,0-11.906-5.272-11.906-11.905
				S80.01,31.861,86.643,31.861L86.643,31.861z"/>
			</svg>
        </div>
	        <?php echo "<span class='footer_address'>".$property_name; ?><br>
	        <?php echo $property_phone; ?><br>
	        <?php echo $property_address; ?><br>
	        <?php echo $property_city.", ".$property_state." ".$property_zip."</span>"; ?>
        </div>
      
        <div id="footer_info_left" style="color:#<?php echo $property_color_1 ?>;">
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
        <div class="social_box">
        	<?php 

		        if ($property_facebook != 'N') {
		        			$property_facebook = prep_url($property_facebook);
		        			echo '<a href="'.$property_facebook.'">';
			        		echo '<svg version="1.1" id="Layer_1" class="facebook_logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 width="30px" height="30px" viewBox="0 0 198 198" enable-background="new 0 0 198 198" xml:space="preserve">
								<path fill="#CFCFCF" d="M148.492,0h-99C22.155,0,0,22.155,0,49.5v99C0,175.836,22.155,198,49.492,198h99
									C175.836,198,198,175.836,198,148.5v-99C198,22.155,175.836,0,148.492,0z M125.619,99H107.25c0,27.712,0,61.875,0,61.875H82.5
									c0,0,0-33.829,0-61.875H70.125V74.25h12.272V63.063c0-10.123,4.822-25.938,26.044-25.938l19.119,0.078V58.41c0,0-11.627,0-13.885,0
									c-2.257,0-5.47,1.122-5.47,5.944v9.896h19.668L125.619,99z"/>
								<g id="Layer_1_1_">
								</g>
								</svg>';
							echo "</a>";
							}
				echo "&nbsp;";
				if ($property_twitter != 'N') {
					$property_twitter = prep_url($property_twitter);
				        	echo '<a href="'.$property_twitter.'">';
							echo '<svg version="1.1" id="Layer_1" class="twitter_logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 width="30px" height="30px" viewBox="0 0 198 198" enable-background="new 0 0 198 198" xml:space="preserve">
									<path fill="#CFCFCF" d="M148.574,0h-99C22.226,0,0,22.3,0,49.645v99C0,175.98,22.226,198,49.574,198h99
										C175.91,198,198,175.98,198,148.645v-99C198,22.3,175.91,0,148.574,0z M148.294,74.299c0.05,1.068,0.065,2.153,0.065,3.234
										c0,33.029-25.533,71.107-72.237,71.107c-14.334,0-27.683-4.134-38.927-11.225c1.992,0.23,4.005,0.351,6.06,0.351
										c11.9,0,22.844-3.997,31.536-10.7c-11.109-0.202-20.481-7.434-23.719-17.357c1.555,0.293,3.143,0.449,4.777,0.449
										c2.322,0,4.562-0.305,6.695-0.875c-11.616-2.301-20.37-12.403-20.37-24.51c0-0.103,0-0.21,0-0.313
										c3.424,1.869,7.343,2.991,11.5,3.123c-6.806-4.48-11.298-12.132-11.298-20.798c0-4.583,1.258-8.877,3.44-12.565
										c12.523,15.118,31.23,25.068,52.33,26.111c-0.425-1.832-0.652-3.733-0.652-5.692c0-13.802,11.369-24.993,25.385-24.993
										c7.307,0,13.906,3.036,18.53,7.895c5.783-1.122,11.224-3.205,16.129-6.072c-1.901,5.841-5.924,10.737-11.163,13.827
										c5.141-0.606,10.033-1.943,14.582-3.935C157.559,66.375,153.248,70.777,148.294,74.299z"/>
									<g id="Layer_1_1_">
									</g>
									</svg>
									';
							echo "</a>";
							}
				echo "";
				if ($property_instagram != 'N') {
					$property_instagram = prep_url($property_instagram);
				        	echo '<a href="'.$property_instagram.'">';
							echo '<svg version="1.1" id="Layer_1" class="instagram_logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 width="30px" height="30px" viewBox="0 0 198 198" enable-background="new 0 0 198 198" xml:space="preserve">
									<g>
										<polygon fill="#CFCFCF" points="146.549,72.349 146.549,54.107 146.549,51.377 143.818,51.394 125.577,51.447 125.652,72.418 	"/>
										<path fill="#CFCFCF" d="M132.838,99c0,18.657-15.181,33.838-33.838,33.838S65.163,117.657,65.163,99
											c0-4.488,0.891-8.774,2.487-12.697H49.178v50.66c0,6.541,5.317,11.859,11.859,11.859h75.917c6.542,0,11.868-5.318,11.868-11.859
											v-50.66h-18.48C131.934,90.226,132.838,94.512,132.838,99z"/>
										<path fill="#CFCFCF" d="M99,120.775c12.004,0,21.784-9.771,21.784-21.775c0-4.735-1.547-9.12-4.125-12.697
											c-3.964-5.486-10.392-9.079-17.659-9.079c-7.268,0-13.695,3.593-17.659,9.079C78.763,89.88,77.216,94.265,77.216,99
											C77.216,111.004,86.988,120.775,99,120.775z"/>
										<path fill="#CFCFCF" d="M148.5,0h-99C22.155,0,0,22.155,0,49.5v98.992C0,175.836,22.155,198,49.5,198h99
											c27.336,0,49.5-22.164,49.5-49.508V49.5C198,22.155,175.836,0,148.5,0z M160.875,86.303v50.66
											c0,13.188-10.733,23.912-23.921,23.912H61.038c-13.188,0-23.913-10.725-23.913-23.912v-50.66V61.038
											c0-13.188,10.725-23.913,23.913-23.913h75.917c13.188,0,23.921,10.725,23.921,23.913V86.303z"/>
									</g>
									<g id="Layer_1_1_">
									</g>
									</svg>
									';
							echo "</a>";
							}
					if ($property_google_plus != 'N') {
					$property_google_plus = prep_url($property_google_plus);
				        	echo '<a href="'.$property_google_plus.'">';
							echo '<svg version="1.1" id="Layer_1" class="google_logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 width="30px" height="30px" viewBox="0 0 198 198" enable-background="new 0 0 198 198" xml:space="preserve">
									<g>
										<path fill="#CFCFCF" d="M84.674,117.332c-0.718-0.487-1.456-0.994-2.223-1.519c-2.24-0.685-4.608-1.048-7.042-1.072l-0.297-0.009
											c-11.175,0-20.98,6.786-20.984,14.521c0,8.411,8.386,14.999,19.111,14.999c14.141,0,21.31-4.885,21.31-14.513
											c0-0.911-0.112-1.856-0.33-2.792C93.262,123.201,89.847,120.867,84.674,117.332z"/>
										<path fill="#CFCFCF" d="M148.5,0h-99C22.155,0,0,22.164,0,49.5v99C0,175.845,22.155,198,49.5,198h99
											c27.336,0,49.5-22.155,49.5-49.5v-99C198,22.164,175.836,0,148.5,0z M86.728,152.855c-4.174,1.209-8.687,1.832-13.423,1.832
											c-5.268,0-10.345-0.61-15.064-1.814c-9.145-2.311-15.91-6.695-19.07-12.343c-1.353-2.446-2.046-5.045-2.046-7.751
											c0-2.775,0.66-5.594,1.972-8.373c5.012-10.709,18.224-17.902,32.855-17.902c0.157,0,0.285,0,0.429-0.009
											c-1.192-2.091-1.774-4.261-1.774-6.546c0-1.139,0.153-2.298,0.45-3.478C55.7,96.117,44.22,84.859,44.22,70.014
											c0-10.494,8.365-20.704,20.328-24.837c3.577-1.233,7.227-1.864,10.82-1.864h32.823c1.122,0,2.112,0.726,2.454,1.794
											c0.352,1.068-0.033,2.236-0.944,2.892l-7.339,5.325c-0.433,0.313-0.965,0.483-1.514,0.483h-2.636
											c3.403,4.075,5.392,9.879,5.392,16.409c0,7.206-3.643,14.029-10.255,19.21c-5.115,3.997-5.317,5.086-5.317,7.372
											c0.062,1.262,3.634,5.337,7.557,8.123c9.154,6.488,12.561,12.849,12.561,23.479C108.149,139.482,99.738,149.078,86.728,152.855z
											 M160.871,96.442c0,1.427-1.159,2.591-2.578,2.591h-18.658v18.694c0,1.427-1.15,2.582-2.578,2.582h-5.316
											c-1.424,0-2.582-1.155-2.586-2.582V99.033h-18.658c-1.419,0-2.578-1.164-2.578-2.591v-5.321c0-1.427,1.159-2.59,2.578-2.59h18.658
											V69.836c0-1.419,1.158-2.583,2.586-2.583h5.316c1.428,0,2.578,1.163,2.578,2.583v18.694h18.658c1.419,0,2.578,1.163,2.578,2.59
											V96.442z"/>
										<path fill="#CFCFCF" d="M76.75,87.966c0.008,0,0.008,0,0.008,0c2.673,0,4.93-1.052,6.679-3.053
											c2.739-3.135,3.947-8.258,3.229-13.716c-1.283-9.739-8.217-17.836-15.469-18.047L70.9,53.143c-2.565,0-4.851,1.052-6.6,3.052
											c-2.71,3.09-3.844,7.974-3.135,13.415c1.274,9.727,8.366,18.146,15.473,18.356H76.75z"/>
									</g>
									<g id="Layer_1_1_">
									</g>
									</svg>
									';
							echo "</a>";
							}
		         ?>
        </div>
        
   
</footer>
<style type="text/css">
#footer_info_left a:link {color: #<?php echo $property_color_1; ?>;}
#footer_info_left a:hover {color: #<?php echo $property_color_1; ?>;}
#footer_info_left a:visited {color: #<?php echo $property_color_1; ?>;}
#footer_info_left a:active {color: #dedede;}

.facebook_logo path {transition: 0.5s;}
.facebook_logo:hover path {fill:#3C5B9B;}
.twitter_logo path {transition: 0.5s;}
.twitter_logo:hover path {fill:#2DAAE1;}
.instagram_logo path {transition: 0.5s;}
.instagram_logo:hover path {fill:#517FA4;}
.instagram_logo polygon {transition: 0.5s;}
.instagram_logo:hover polygon {fill:#517FA4;}
.google_logo path {transition: 0.5s;}
.google_logo:hover path {fill:#F63D27;}

</style>
</body>
</html>