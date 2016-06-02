<div class="test">This Is A TEST</div>
<div class="special_box" id="special_box">

	<div class="special_word">
		<svg version="1.1" id="special_word" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 width="70px" height="300px" viewBox="0 0 70 300" enable-background="new 0 0 70 300" xml:space="preserve">
		<g>
			<path d="M42.403,16.787c-1.589-1.324-3.618-2.207-5.737-2.207c-1.588,0-3.706,0.927-3.706,2.78c0,1.941,2.339,2.692,3.839,3.177
				l2.207,0.662c4.633,1.368,8.207,3.707,8.207,9.091c0,3.31-0.793,6.708-3.441,8.958c-2.604,2.207-6.09,3.133-9.443,3.133
				c-4.192,0-8.296-1.412-11.694-3.795l3.707-6.972c2.162,1.897,4.722,3.442,7.678,3.442c2.03,0,4.192-1.015,4.192-3.354
				c0-2.427-3.397-3.266-5.251-3.795c-5.428-1.545-9.002-2.957-9.002-9.399c0-6.752,4.81-11.165,11.474-11.165
				c3.354,0,7.458,1.059,10.415,2.736L42.403,16.787z"/>
			<path d="M23.141,50.143h13.238c7.15,0,12.092,3.31,12.092,10.944c0,7.855-4.236,11.297-11.782,11.297h-4.898v11.032h-8.649V50.143z
				 M31.791,65.411h1.456c3.132,0,6.222,0,6.222-4.06c0-4.192-2.869-4.236-6.222-4.236h-1.456V65.411z"/>
			<path d="M34.24,99.385v5.56h9.752v7.325H34.24v5.737h10.282v7.325H25.591V92.059h18.931v7.326H34.24z"/>
			<path d="M46.949,145.141c-1.766-2.383-4.634-3.663-7.59-3.663c-5.296,0-8.871,4.06-8.871,9.223c0,5.251,3.619,9.046,9.002,9.046
				c2.824,0,5.647-1.368,7.458-3.53v10.37c-2.869,0.883-4.943,1.545-7.635,1.545c-4.633,0-9.046-1.766-12.488-4.898
				c-3.663-3.31-5.339-7.635-5.339-12.576c0-4.546,1.721-8.915,4.898-12.18c3.266-3.354,7.987-5.384,12.665-5.384
				c2.78,0,5.339,0.618,7.899,1.677V145.141z"/>
			<path d="M39.225,209.166h-8.648v-33.272h8.648V209.166z"/>
			<path d="M28.967,245.302l-2.294,5.781h-9.179l12.797-33.272h9.444l12.533,33.272h-9.225l-2.162-5.781H28.967z M35.012,228.092
				h-0.088l-3.575,10.591h7.193L35.012,228.092z"/>
			<path d="M35.453,285.674h10.37v7.325H26.804v-33.272h8.649V285.674z"/>
		</g>
	</svg>
	</div>
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
			
<div class="special_burst">
	<svg version="1.1" id="special_burst" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 width="136.5px" height="136.5px" viewBox="0 0 136.5 136.5" enable-background="new 0 0 136.5 136.5" xml:space="preserve">
	<radialGradient id="SVGID_1_" cx="68.9131" cy="67.4521" r="65.2788" gradientUnits="userSpaceOnUse">
		<stop  offset="0" style="stop-color:#FCEE21"/>
		<stop  offset="1" style="stop-color:#FBB03B"/>
	</radialGradient>
	<polygon fill="url(#SVGID_1_)" points="68.914,21.408 80.336,2.675 84.661,24.185 101.801,10.488 98.511,32.18 119.301,25.172 
		108.787,44.43 130.722,44.955 114.258,59.457 134.689,67.452 114.258,75.447 130.722,89.948 108.787,90.474 119.301,109.732 
		98.509,102.723 101.801,124.416 84.661,110.719 80.336,132.229 68.914,113.496 57.491,132.229 53.166,110.719 36.025,124.416 
		39.317,102.723 18.526,109.732 29.039,90.474 7.104,89.948 23.57,75.447 3.137,67.452 23.57,59.457 7.104,44.955 29.039,44.43 
		18.526,25.172 39.317,32.18 36.025,10.488 53.166,24.185 57.491,2.675 "/>
	</svg>
</div>
	
	
</div>

<script type="text/javascript">
	$(document).ready(function() {
     var $special_box = $('#special_box');
     
     $special_box.delay(3500).animate({top: '+=365'}, 200).delay(7000).fadeTo('slow', .3).animate({left: '-=860'}, 200).promise().then(function() {
        $special_box.mouseenter(function() {
            $special_box.fadeTo('fast', 1).animate({left: '+=860'}, 200);
        });
        $special_box.mouseleave(function(){
            $special_box.fadeTo('fast', .3).animate({left: '-=860'}, 200);
        });
    });
});

</script>