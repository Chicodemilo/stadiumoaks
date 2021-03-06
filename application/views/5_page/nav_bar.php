<!-- TEST -->
<div id="nav_bar">
    <div class="mobile_hamburger" id="mobile_hamburger">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="25px" height="25px" viewBox="0 0 25 25" enable-background="new 0 0 25 25" xml:space="preserve">
        <rect x="0.419" y="0.706" fill="#<?php echo $property_color_2; ?>" width="24.12" height="5.486"/>
        <rect x="0.419" y="9.874" fill="#<?php echo $property_color_2; ?>" width="24.12" height="5.487"/>
        <rect x="0.419" y="19.041" fill="#<?php echo $property_color_2; ?>" width="24.12" height="5.486"/>
        </svg>
    </div>

    <div id="nav_bar_inner">
        
        <div class="logo_box">
            <a href="<?php echo base_url() ?>home/">
                


                <?php 
                    if($logo_name != 'N'){
                        echo '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="350px" height="35px" viewBox="0 0 350 35" enable-background="new 0 0 350 35" xml:space="preserve">
                                <rect x="167.43" y="10.84" transform="matrix(0.7071 -0.7071 0.7071 0.7071 38.6242 128.1837)" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="13.251" height="13.25"/>
                                <g>
                                    <g>
                                        
                                            <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" x1="183.425" y1="17.464" x2="338.017" y2="17.464"/>
                                        <g>
                                            <path fill="#FFFFFF" d="M336.408,7.351c2.498,4.219,6.387,7.535,10.523,10.113c-4.176,2.54-7.902,5.977-10.523,10.114h-2.496
                                                c2.619-4.01,5.771-7.492,9.662-10.114c-3.892-2.66-7.166-6.184-9.703-10.113H336.408z"/>
                                            <path fill="#FFFFFF" d="M330.391,7.351c2.498,4.219,6.387,7.535,10.521,10.113c-4.176,2.54-7.9,5.977-10.521,10.114h-2.496
                                                c2.618-4.01,5.771-7.492,9.66-10.114c-3.889-2.66-7.164-6.184-9.701-10.113H330.391z"/>
                                        </g>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        
                                            <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" x1="10.093" y1="17.464" x2="164.685" y2="17.464"/>
                                        <g>
                                            <path fill="#FFFFFF" d="M11.701,7.351C9.203,11.57,5.314,14.886,1.178,17.464c4.176,2.54,7.902,5.977,10.523,10.114h2.496
                                                c-2.619-4.01-5.771-7.492-9.662-10.114c3.892-2.66,7.166-6.184,9.703-10.113H11.701z"/>
                                            <path fill="#FFFFFF" d="M17.719,7.351c-2.498,4.219-6.387,7.535-10.521,10.113c4.176,2.54,7.9,5.977,10.521,10.114h2.496
                                                c-2.618-4.01-5.771-7.492-9.66-10.114c3.889-2.66,7.164-6.184,9.701-10.113H17.719z"/>
                                        </g>
                                    </g>
                                </g>
                                </svg>';
                        echo "<img id='logo' src='".base_url()."images/logos/property/".$logo_name."' alt='".$logo_name."'>";

                    }else{
                        $exp_name = explode(" ", $property_name);
                        if ($exp_name[0] == "The" || $exp_name[0] === "the") {

                            echo '
                                <svg version="1.1" id="top_the_arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         width="350px" height="71.25px" viewBox="0 0 350 71.25" enable-background="new 0 0 350 71.25" xml:space="preserve">
                                    <g>
                                        <g>
                                            
                                                <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" x1="223.75" y1="31.766" x2="338.237" y2="31.766"/>
                                            <g>
                                                <path fill="#FFFFFF" d="M336.629,21.652c2.498,4.219,6.387,7.535,10.523,10.113c-4.176,2.539-7.902,5.977-10.523,10.113h-2.496
                                                    c2.619-4.01,5.771-7.492,9.662-10.113c-3.892-2.66-7.166-6.184-9.703-10.113H336.629z"/>
                                                <path fill="#FFFFFF" d="M330.611,21.652c2.498,4.219,6.387,7.535,10.521,10.113c-4.176,2.539-7.9,5.977-10.521,10.113h-2.496
                                                    c2.618-4.01,5.771-7.492,9.66-10.113c-3.889-2.66-7.164-6.184-9.701-10.113H330.611z"/>
                                            </g>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            
                                                <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" x1="11.271" y1="31.766" x2="126.5" y2="31.766"/>
                                            <g>
                                                <path fill="#FFFFFF" d="M12.879,21.652c-2.498,4.219-6.387,7.535-10.523,10.113c4.176,2.539,7.902,5.977,10.523,10.113h2.496
                                                    c-2.619-4.01-5.771-7.492-9.662-10.113c3.892-2.66,7.166-6.184,9.703-10.113H12.879z"/>
                                                <path fill="#FFFFFF" d="M18.896,21.652c-2.498,4.219-6.387,7.535-10.521,10.113c4.176,2.539,7.9,5.977,10.521,10.113h2.496
                                                    c-2.618-4.01-5.771-7.492-9.66-10.113c3.889-2.66,7.164-6.184,9.701-10.113H18.896z"/>
                                            </g>
                                        </g>
                                    </g>
                                    <filter id="dropshadow" height="130%">
                                      <feGaussianBlur in="SourceAlpha" stdDeviation="3"/> <!-- stdDeviation is how much to blur -->
                                      <feOffset dx="2" dy="2" result="offsetblur"/> <!-- how much to offset -->
                                      <feMerge> 
                                        <feMergeNode/> <!-- this contains the offset blurred image -->
                                        <feMergeNode in="SourceGraphic"/> <!-- this contains the element that the filter is applied to -->
                                      </feMerge>
                                    </filter>
                                    <path fill="#'.$property_color_2.'" style="filter:url(#dropshadow)" d="M210.235,43.791c-1.148,1.076-2.304,2.14-3.474,3.191c-1.168,1.053-2.383,1.988-3.646,2.804
                                        c-1.262,0.82-2.575,1.484-3.943,1.999c-1.369,0.515-2.821,0.771-4.364,0.771c-0.863,0-1.454-0.128-1.771-0.383
                                        c-0.317-0.26-0.476-0.749-0.476-1.475c0-0.536,0.034-1.087,0.108-1.646c2.054-0.912,3.936-1.817,5.642-2.718
                                        c1.706-0.899,3.168-1.783,4.383-2.647c1.217-0.863,2.157-1.711,2.825-2.541c0.664-0.829,0.997-1.643,0.997-2.438
                                        c0-0.491-0.18-1.071-0.543-1.733c-0.362-0.666-0.835-1.303-1.42-1.913c-0.584-0.608-1.233-1.121-1.946-1.54
                                        c-0.712-0.422-1.431-0.634-2.155-0.634c-1.007,0-2.104,0.166-3.294,0.491c-1.195,0.328-2.394,0.819-3.596,1.473
                                        c-1.204,0.654-2.361,1.474-3.47,2.454c-1.112,0.981-2.101,2.117-2.963,3.403c-0.865,1.283-1.562,2.727-2.086,4.327
                                        c-0.131,0.399-0.197,0.837-0.297,1.252c-0.02,0.019-0.034,0.031-0.056,0.047c-0.688,0.549-1.407,1.108-2.154,1.682
                                        c-0.748,0.575-1.48,1.094-2.191,1.562c-0.713,0.468-1.363,0.854-1.947,1.157c-0.584,0.303-1.052,0.455-1.4,0.455
                                        c-0.143,0-0.211-0.069-0.211-0.21c0-0.236,0.083-0.65,0.245-1.246c0.162-0.594,0.372-1.284,0.632-2.069
                                        c0.255-0.781,0.547-1.64,0.876-2.575c0.326-0.935,0.66-1.862,0.999-2.786c0.337-0.923,0.653-1.802,0.944-2.631
                                        c0.296-0.83,0.546-1.561,0.757-2.188c0.046-0.119,0.093-0.277,0.14-0.476c0.047-0.199,0.047-0.357,0-0.475
                                        c-0.117-0.256-0.421-0.582-0.912-0.981c-0.491-0.396-1.027-0.782-1.612-1.155c-0.585-0.376-1.145-0.694-1.683-0.965
                                        c-0.538-0.268-0.913-0.402-1.124-0.402c-0.304,0-0.741,0.111-1.313,0.333c-0.575,0.221-1.269,0.596-2.086,1.121
                                        s-1.751,1.232-2.804,2.12c-1.053,0.889-2.209,1.988-3.471,3.297c0.374-1.193,0.794-2.417,1.262-3.681
                                        c1.846-1.778,3.616-3.612,5.312-5.506c1.694-1.893,3.273-3.769,4.734-5.627c1.46-1.858,2.791-3.67,3.997-5.435
                                        c1.202-1.764,2.227-3.418,3.066-4.961c0.843-1.542,1.496-2.933,1.962-4.171c0.468-1.239,0.702-2.279,0.702-3.12
                                        c0-0.117-0.023-0.304-0.07-0.562c-0.049-0.257-0.141-0.479-0.279-0.667c-0.212-0.281-0.509-0.618-0.896-1.016
                                        c-0.386-0.397-0.824-0.806-1.314-1.227c-0.491-0.422-1.01-0.806-1.56-1.158c-0.55-0.351-1.095-0.608-1.631-0.771
                                        c-1.1,0.071-2.31,0.683-3.628,1.841c-1.321,1.157-2.7,2.688-4.138,4.592c-1.438,1.906-2.899,4.103-4.383,6.592
                                        c-1.483,2.489-2.911,5.113-4.278,7.87c-0.534,1.079-0.997,2.203-1.507,3.298c-0.043-0.032-0.077-0.073-0.158-0.073l-8.413,0.316
                                        c0.7-1.683,1.384-3.277,2.051-4.786c0.666-1.508,1.274-2.852,1.821-4.032c0.551-1.18,1.012-2.161,1.387-2.945
                                        c0.374-0.783,0.629-1.291,0.77-1.524c0.047-0.094,0.07-0.152,0.07-0.176v-0.07c0-0.094-0.117-0.141-0.35-0.141
                                        c-0.258,0-0.677,0.088-1.262,0.263c-0.585,0.176-1.235,0.393-1.946,0.65c-0.712,0.257-1.437,0.537-2.174,0.84
                                        c-0.737,0.303-1.361,0.585-1.875,0.842c-0.703,0.327-1.258,0.648-1.666,0.964c-0.409,0.315-0.737,0.619-0.981,0.912
                                        c-0.248,0.292-0.433,0.584-0.562,0.876c-0.129,0.292-0.252,0.567-0.369,0.823c-0.465,0.959-1,2.11-1.593,3.454
                                        c-0.599,1.345-1.221,2.81-1.875,4.401l-4.558,0.209c-0.188,0.07-0.38,0.228-0.581,0.473c-0.197,0.246-0.372,0.515-0.525,0.807
                                        c-0.152,0.292-0.28,0.573-0.385,0.841c-0.107,0.269-0.157,0.473-0.157,0.614c0,0.047,0.013,0.069,0.033,0.069h0.034h4.947
                                        c-0.82,2.128-1.631,4.301-2.439,6.522c-0.805,2.223-1.524,4.307-2.155,6.258c-0.63,1.952-1.138,3.689-1.526,5.206
                                        c-0.385,1.52-0.577,2.63-0.577,3.332c0,0.396,0.222,0.876,0.666,1.436c0.444,0.562,0.97,1.105,1.576,1.633
                                        c0.609,0.525,1.235,0.968,1.875,1.33c0.645,0.363,1.164,0.543,1.561,0.543c0.538,0,1.203-0.186,2-0.562
                                        c0.794-0.372,1.654-0.863,2.578-1.47c0.923-0.61,1.869-1.298,2.838-2.07c0.97-0.771,1.905-1.542,2.805-2.312
                                        c0.405-0.349,0.751-0.679,1.131-1.021c-0.273,1.496-0.411,2.808-0.411,3.929c0,0.283,0.047,0.491,0.138,0.634
                                        c0.095,0.139,0.212,0.291,0.353,0.453c0.28,0.258,0.656,0.549,1.123,0.879c0.467,0.327,0.947,0.635,1.436,0.93
                                        c0.491,0.29,0.96,0.542,1.404,0.753c0.444,0.21,0.771,0.314,0.982,0.314c0.303,0,0.519-0.058,0.647-0.176
                                        c0.128-0.117,0.229-0.305,0.297-0.56c0.539-1.8,1.205-3.512,2-5.135c0.794-1.627,1.632-3.141,2.507-4.543
                                        c0.875-1.401,1.765-2.671,2.665-3.803c0.897-1.134,1.73-2.104,2.488-2.912c0.759-0.804,1.408-1.441,1.946-1.907
                                        c0.538-0.468,0.901-0.728,1.086-0.775c-0.468,1.077-0.976,2.3-1.524,3.666c-0.549,1.367-1.064,2.751-1.544,4.153
                                        c-0.479,1.403-0.894,2.77-1.243,4.104c-0.351,1.332-0.539,2.501-0.56,3.506c0,0.397,0.192,0.799,0.577,1.211
                                        c0.383,0.407,0.854,0.781,1.402,1.119c0.549,0.339,1.122,0.619,1.718,0.843c0.597,0.221,1.118,0.333,1.561,0.333
                                        c0.537,0,1.202-0.175,1.999-0.525c0.794-0.354,1.646-0.819,2.56-1.402c0.91-0.585,1.847-1.24,2.804-1.964
                                        c0.736-0.554,1.429-1.123,2.122-1.691c0,0.088-0.019,0.166-0.019,0.254c0,0.515,0.224,1.134,0.668,1.859
                                        c0.442,0.722,0.999,1.42,1.663,2.084c0.666,0.666,1.386,1.232,2.158,1.702c0.77,0.466,1.47,0.7,2.104,0.7
                                        c1.494,0,3.032-0.188,4.609-0.563c1.578-0.372,3.23-0.991,4.96-1.857c1.729-0.865,3.549-2.008,5.453-3.434
                                        c1.904-1.427,3.932-3.19,6.081-5.295L210.235,43.791z M194.771,42.303c0.515-1.063,1.053-2.007,1.613-2.823
                                        c0.562-0.819,1.123-1.478,1.683-1.98c0.562-0.502,1.076-0.754,1.544-0.754c0.256,0,0.448,0.081,0.576,0.247
                                        c0.129,0.16,0.194,0.349,0.194,0.56c0,0.726-0.198,1.448-0.596,2.172c-0.399,0.728-0.926,1.435-1.577,2.12
                                        c-0.656,0.691-1.398,1.352-2.226,1.983c-0.834,0.63-1.68,1.226-2.545,1.787C193.812,44.47,194.257,43.364,194.771,42.303z
                                         M172.282,24.596c0.525-1.18,1.067-2.367,1.628-3.559c1.028-2.173,2.017-4.183,2.964-6.03c0.946-1.846,1.817-3.436,2.612-4.768
                                        c0.794-1.332,1.479-2.378,2.051-3.138c0.573-0.758,1-1.139,1.281-1.139c0.184,0,0.278,0.257,0.278,0.771
                                        c0,1.099-0.351,2.454-1.051,4.067c-0.7,1.611-1.632,3.372-2.788,5.276c-1.157,1.904-2.471,3.891-3.944,5.96
                                        c-1.473,2.068-2.993,4.108-4.558,6.118C171.247,26.963,171.756,25.777,172.282,24.596z M161.376,31.329
                                        c-1.203,2.862-2.256,5.608-3.155,8.238c-0.583,1.702-1.054,3.295-1.476,4.839c-0.154,0.132-0.303,0.26-0.487,0.422
                                        c-0.525,0.453-1.117,0.957-1.771,1.506c-0.655,0.549-1.343,1.105-2.07,1.665c-0.723,0.562-1.407,1.076-2.05,1.544
                                        c-0.643,0.468-1.222,0.844-1.735,1.14c-0.517,0.291-0.901,0.438-1.156,0.438c-0.142,0-0.21-0.072-0.21-0.211
                                        c0-1.006,0.18-2.291,0.542-3.858c0.364-1.564,0.846-3.281,1.455-5.153c0.609-1.867,1.297-3.842,2.07-5.923
                                        c0.769-2.082,1.576-4.139,2.418-6.172h6.94c0.211,0,0.387-0.022,0.526-0.069c0.141-0.047,0.235-0.094,0.281-0.141
                                        c0.236-0.21,0.521-0.514,0.858-0.911c0.213-0.25,0.381-0.486,0.562-0.728C162.414,29.084,161.858,30.183,161.376,31.329z"/>
                                    </svg>';

                                echo "<span class='no_logo_header' style='color:#".$property_color_2."'>";

                                $i = 1;
                                while($i <= count($exp_name)){
                                    echo $exp_name[$i]." ";
                                    $i++;
                                }

                                echo "</span>";

                        }else{

                            echo '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="350px" height="35px" viewBox="0 0 350 35" enable-background="new 0 0 350 35" xml:space="preserve">
                                <rect x="167.43" y="10.84" transform="matrix(0.7071 -0.7071 0.7071 0.7071 38.6242 128.1837)" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="13.251" height="13.25"/>
                                <g>
                                    <g>
                                        
                                            <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" x1="183.425" y1="17.464" x2="338.017" y2="17.464"/>
                                        <g>
                                            <path fill="#FFFFFF" d="M336.408,7.351c2.498,4.219,6.387,7.535,10.523,10.113c-4.176,2.54-7.902,5.977-10.523,10.114h-2.496
                                                c2.619-4.01,5.771-7.492,9.662-10.114c-3.892-2.66-7.166-6.184-9.703-10.113H336.408z"/>
                                            <path fill="#FFFFFF" d="M330.391,7.351c2.498,4.219,6.387,7.535,10.521,10.113c-4.176,2.54-7.9,5.977-10.521,10.114h-2.496
                                                c2.618-4.01,5.771-7.492,9.66-10.114c-3.889-2.66-7.164-6.184-9.701-10.113H330.391z"/>
                                        </g>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        
                                            <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" x1="10.093" y1="17.464" x2="164.685" y2="17.464"/>
                                        <g>
                                            <path fill="#FFFFFF" d="M11.701,7.351C9.203,11.57,5.314,14.886,1.178,17.464c4.176,2.54,7.902,5.977,10.523,10.114h2.496
                                                c-2.619-4.01-5.771-7.492-9.662-10.114c3.892-2.66,7.166-6.184,9.703-10.113H11.701z"/>
                                            <path fill="#FFFFFF" d="M17.719,7.351c-2.498,4.219-6.387,7.535-10.521,10.113c4.176,2.54,7.9,5.977,10.521,10.114h2.496
                                                c-2.618-4.01-5.771-7.492-9.66-10.114c3.889-2.66,7.164-6.184,9.701-10.113H17.719z"/>
                                        </g>
                                    </g>
                                </g>
                                </svg>';

                                echo "<span class='no_logo_header' style='color:#".$property_color_2."'>";

                                $i = 0;
                                while($i <= count($exp_name)){
                                    echo $exp_name[$i]." ";
                                    $i++;
                                }

                                echo "</span>";


                        }
                    }
                 ?>
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="350px" height="35px" viewBox="0 0 350 35" enable-background="new 0 0 350 35" xml:space="preserve">
                    <g>
                        <g>
                            <polyline fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" points="11.394,17.625 
                                145.529,17.625 204.223,17.625 338.36,17.625         "/>
                            <g>
                                <path fill="#FFFFFF" d="M13.002,7.512c-2.498,4.219-6.387,7.535-10.523,10.113c4.176,2.539,7.902,5.977,10.523,10.113h2.496
                                    c-2.619-4.01-5.771-7.492-9.662-10.113c3.892-2.66,7.166-6.184,9.703-10.113H13.002z"/>
                                <path fill="#FFFFFF" d="M19.02,7.512c-2.498,4.219-6.387,7.535-10.521,10.113c4.176,2.539,7.9,5.977,10.521,10.113h2.496
                                    c-2.618-4.01-5.771-7.492-9.66-10.113c3.889-2.66,7.164-6.184,9.701-10.113H19.02z"/>
                            </g>
                            <g>
                                <path fill="#FFFFFF" d="M336.752,7.512c2.498,4.219,6.387,7.535,10.523,10.113c-4.176,2.539-7.902,5.977-10.523,10.113h-2.496
                                    c2.619-4.01,5.771-7.492,9.662-10.113c-3.892-2.66-7.166-6.184-9.703-10.113H336.752z"/>
                                <path fill="#FFFFFF" d="M330.734,7.512c2.498,4.219,6.387,7.535,10.521,10.113c-4.176,2.539-7.9,5.977-10.521,10.113h-2.496
                                    c2.618-4.01,5.771-7.492,9.66-10.113c-3.889-2.66-7.164-6.184-9.701-10.113H330.734z"/>
                            </g>
                        </g>
                    </g>
                    <g>
                        
                            <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="174.877" y1="9.25" x2="174.877" y2="26"/>
                        
                            <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="185.877" y1="9.25" x2="185.877" y2="26"/>
                        
                            <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="163.877" y1="9.25" x2="163.877" y2="26"/>
                    </g>
                    </svg>

                </a>

                <div class="big_phone">
                    <p style="color:#<?php echo $property_color_1; ?>"><?php echo $property_phone ?></p>
                
                </div>
                <div class="address_bar_inner" style="color:#<?php echo $property_color_2; ?>"><?php echo $property_address."<br><span class='address_city'>".$property_city.", ".$property_state ?>
                </div>
                <svg version="1.1" id="lower_logo_line" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="350px" height="35px" viewBox="0 0 350 35" enable-background="new 0 0 350 35" xml:space="preserve">
                <rect x="167.43" y="10.84" transform="matrix(0.7071 -0.7071 0.7071 0.7071 38.6242 128.1837)" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="13.251" height="13.25"/>
                <g>
                    <g>
                        
                            <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" x1="183.425" y1="17.464" x2="338.017" y2="17.464"/>
                        <g>
                            <path fill="#FFFFFF" d="M336.408,7.351c2.498,4.219,6.387,7.535,10.523,10.113c-4.176,2.54-7.902,5.977-10.523,10.114h-2.496
                                c2.619-4.01,5.771-7.492,9.662-10.114c-3.892-2.66-7.166-6.184-9.703-10.113H336.408z"/>
                            <path fill="#FFFFFF" d="M330.391,7.351c2.498,4.219,6.387,7.535,10.521,10.113c-4.176,2.54-7.9,5.977-10.521,10.114h-2.496
                                c2.618-4.01,5.771-7.492,9.66-10.114c-3.889-2.66-7.164-6.184-9.701-10.113H330.391z"/>
                        </g>
                    </g>
                </g>
                <g>
                    <g>
                        
                            <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" x1="10.093" y1="17.464" x2="164.685" y2="17.464"/>
                        <g>
                            <path fill="#FFFFFF" d="M11.701,7.351C9.203,11.57,5.314,14.886,1.178,17.464c4.176,2.54,7.902,5.977,10.523,10.114h2.496
                                c-2.619-4.01-5.771-7.492-9.662-10.114c3.892-2.66,7.166-6.184,9.703-10.113H11.701z"/>
                            <path fill="#FFFFFF" d="M17.719,7.351c-2.498,4.219-6.387,7.535-10.521,10.113c4.176,2.54,7.9,5.977,10.521,10.114h2.496
                                c-2.618-4.01-5.771-7.492-9.66-10.114c3.889-2.66,7.164-6.184,9.701-10.113H17.719z"/>
                        </g>
                    </g>
                </g>
                </svg>
            </div>
        


    </div>
    <div class="logo_box_mobile">
            <a href="<?php echo base_url() ?>home/">
                

                
                    <?php 
                        echo "<span class='no_logo_header_small' style='color:#".$property_color_2."'>";
                        echo $property_name;
                        echo "</span>";
                    ?>
                </span>
                </a>
                <br>
                <?php 
                    echo "<span class='no_logo_header_small_phone' style='color:#".$property_color_1."'>";
                    echo $property_phone;
                    echo "</span>";
                ?>


    </div>

    <div class="nav_bar_links_button" id="nav_bar_links_button">
            <svg version="1.1" id="nav_bar_links_svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="55px" height="55px" viewBox="0 0 35 35" enable-background="new 0 0 35 35" xml:space="preserve">
            <rect x="20.738" y="31.991" width="13.271" height="2.004" fill="<?php echo "#".$property_color_3; ?>"/>
            <rect x="14.811" y="21.643" width="19.199" height="2.004" fill="<?php echo "#".$property_color_3; ?>"/>
            <rect x="0.902" y="0.946" width="33.107" height="2.004" fill="<?php echo "#".$property_color_3; ?>"/>
            <rect x="7.466" y="11.294" width="26.544" height="2.004" fill="<?php echo "#".$property_color_3; ?>"/>
            </svg>

    </div>
     <div id="nav_bar_links_mobile" class="nav_bar_links_mobile">
             <div class="mobile_nav_bar_closer">
                        <svg version="1.1" id="mobile_x" class="mobile_x" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="35px" height="35px" viewBox="0 0 198 198" enable-background="new 0 0 198 198" xml:space="preserve">
                            <polygon fill="#890E0E" points="171.25,19.941 100.535,90.655 29.82,19.941 20.111,29.651 90.825,100.365 20.112,171.078 29.822,180.789 
                                100.535,110.075 171.248,180.787 180.957,171.078 110.244,100.365 180.957,29.651 "/>
                        </svg>
            </div>
            <span>
                <a href="<?php echo base_url() ?>home/floorplans" class="front_page_link">
                    <div class="fp_and_prices">FLOORPLANS<br><span class="amp_word_one">&amp;</span> <span class="price_word">PRICES</span>
                    </div>
                </a>

                <a href="<?php echo base_url() ?>home/pictures" class="front_page_link">
                    <div class="pics_link">
                        PICTURES
                    </div>
                </a>
                
                <a href="<?php echo base_url() ?>home/amenities" class="front_page_link">
                    <div class="amen_link">
                        AMENITIES
                    </div>
                </a>
                
                <a href="<?php echo base_url() ?>home/contact" class="front_page_link">
                    <div class="contac_and_loc_link">
                        CONTACT<br><span class="amp_word_two">&amp;</span> <span class="loc_word">LOCATION</span>
                    </div>
                </a>
                
            </span>
            
    </div>



    
</div>


<script type="text/javascript" >
    $(document).ready(function() {
        $('#mobile_hamburger').click(function(event) {
            $('#nav_bar_links_mobile').animate({right: '+=280'}, 300);
        });

        $('#mobile_x').click(function(){
            $('#nav_bar_links_mobile').animate({right: '-=280'}, 150);
        });
    });
</script>

