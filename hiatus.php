<!DOCTYPE HTML>

<html>
    <head>
        <title>Brad & Denise Wish You & Yours a Very Merry Christmas!!!</title>        
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <link rel="stylesheet" type="text/css" href="stylesheets/stylesheet.css">
        <link rel="stylesheet" type="text/css" href="stylesheets/hiatus.css">
        <link href="stylesheets/style.css" rel="stylesheet">

	<script src="js/modernizr-1.5.min.js"></script>
    </head>
    
    <body>

<?php
// Set Array for anchor links
$link = array("<a href=\"flash/christmas_card.swf\" target=\"_blank\">", "<a href=\"video/nightBeforeXmas.html\" target=\"_blank\">", "<a href=\"pdf/yesVirginia.pdf\" target=\"_blank\">", "<a href=\"http://thechristmascancan.com/\" target=\"_blank\">", "<a href=\"flash/white_christmas.swf\" target=\"_blank\">", "<a href=\"video/fifties.html\" target=\"_blank\">", "<a href=\"flash/snow_line_game.swf\" target=\"_blank\">", "<a href=\"video/westinghouse.html\" target=\"_blank\">", "<a href=\"video/jingleBombs.html\" target=\"_blank\">", "<a href=\"flash/snow_blitz.swf\" target=\"_blank\">", "<a href=\"flash/merry_christmas.swf\" target=\"_blank\">", "<a href=\"video/luckyStrike.html\" target=\"_blank\">", "<a href=\"flash/north_pole_slide.swf\" target=\"_blank\">", "<a href=\"flash/buildSnowman.swf\" target=\"_blank\">", "<a href=\"video/coke.html\" target=\"_blank\">", "<a href=\"video/whiteChristmas.html\" target=\"_blank\">", "<a href=\"video/marshmallowWorld.html\" target=\"_blank\">", "<a href=\"flash/memory_game.swf\" target=\"_blank\">", "<a href=\"flash/spin_around_the_north_pole.swf\" target=\"_blank\">", "<a href=\"video/xmasLights.html\" target=\"_blank\">", "<a href=\"flash/jigsaw.swf\" target=\"_blank\">", "<a href=\"video/silverGold.html\" target=\"_blank\">", "<a href=\"flash/xmas_star.swf\" target=\"_blank\">", "<a href=\"video/holyNight.html\" target=\"_blank\">", "<a href=\"video/still.html\" target=\"_blank\">");

// Populate array for today's date
$date=date("d");
for ($i=0; $i<=24; $i++)
{
    if ($i<$date)
    {
        $shutter[$i] = $link[$i];
    }
    else
    {
        $shutter[$i] = "<a href=\"#\">";
    }
}
  
?>  
        <div id="container3">
            <div id="container2">
                <div id="container1">
                    <div id="col_left">
                        <div id="left_column"></div>
                    </div>
                    <div id="col_middle">
                        <h1 style="padding-top: 25px;">Daily Distractions from the Hustle and Bustle</h1>
                        <h5 class="center" style="padding: 25px 0px;">
                            <a href="index.html">&raquo;&nbsp;Go Back to Main Page&nbsp;&laquo;</a>
                        </h5>
                        <!-- BEGIN ADVENT CALENDAR CODE -->
                        <div id="calendarContain">
                            <ul id="garagedoor">
                                <li id="shutter1"><? echo $shutter[0] ?>Link 1</a></li>
                                <li id="shutter2"><? echo $shutter[1] ?><!--<a href="video/nightBeforeXmas.html" target="_blank">-->Link 2</a></li>
                                <li id="shutter3"><? echo $shutter[2] ?>Link 3</a></li>
                                <li id="shutter4"><? echo $shutter[3] ?>Link 4</a></li>
                                <li id="shutter5"><? echo $shutter[4] ?>Link 5</a></li>
                            </ul>

                            <!-- SECOND ROW -->
                            <ul id="garagedoor2">
                                    <li id="shutter6"><? echo $shutter[5] ?>Link 6</a></li>
                                    <li id="shutter7"><? echo $shutter[6] ?>Link 7</a></li>
                                    <li id="shutter8"><? echo $shutter[7] ?>Link 8</a></li>
                                    <li id="shutter9"><? echo $shutter[8] ?>Link 9</a></li>
                                    <li id="shutter10"><? echo $shutter[9] ?>Link 10</a></li>
                            </ul>    
                            <!-- END OF SECOND ROW -->

                            <!-- THIRD ROW -->
                            <ul id="garagedoor3">
                                    <li id="shutter11"><? echo $shutter[10] ?>Link 11</a></li>
                                    <li id="shutter12"><? echo $shutter[11] ?>Link 12</a></li>
                                    <li id="shutter13"><? echo $shutter[12] ?>Link 13</a></li>
                                    <li id="shutter14"><? echo $shutter[13] ?>Link 14</a></li>
                                    <li id="shutter15"><? echo $shutter[14] ?>Link 15</a></li>
                            </ul>    
                            <!-- END OF THIRD ROW -->

                            <!-- FOURTH ROW -->
                            <ul id="garagedoor4">
                                    <li id="shutter16"><? echo $shutter[15] ?>Link 16</a></li>
                                    <li id="shutter17"><? echo $shutter[16] ?>Link 17</a></li>
                                    <li id="shutter18"><? echo $shutter[17] ?>Link 18</a></li>
                                    <li id="shutter19"><? echo $shutter[18] ?>Link 19</a></li>
                                    <li id="shutter20"><? echo $shutter[19] ?>Link 20</a></li>
                            </ul>    
                            <!-- END OF FOURTH ROW -->

                            <!-- FIFTH ROW -->
                            <ul id="garagedoor5">
                                    <li id="shutter21"><? echo $shutter[20] ?>Link 21</a></li>
                                    <li id="shutter22"><? echo $shutter[21] ?>Link 22</a></li>
                                    <li id="shutter23"><? echo $shutter[22] ?>Link 23</a></li>
                                    <li id="shutter24"><? echo $shutter[23] ?>Link 24</a></li>
                                    <li id="shutter25"><? echo $shutter[24] ?>Link 25</a></li>
                            </ul>    
                            <!-- END OF FIFTH ROW -->
                            <!-- END ADVENT CALENDAR CODE -->
                        </div>
                    </div>
                    <div id="col_right">
                        <div id="right_column"></div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            // SCRIPT FOR OPENING ADVENT CALENDAR SHUTTERS (DATE DEPENDENT)
            var today = new Date()     // Set variable to today's date
	
		var jQueryScriptOutputted = false;
		
		function initJQuery() {
		    
		    if (typeof(jQuery) == 'undefined') {
		    
		        if (!jQueryScriptOutputted) {
		            jQueryScriptOutputted = true;
		            
		            // Primitive way of loading scripts (no library yet)
		            document.write("<scr" + "ipt src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js\"></scr" + "ipt>");
		        }
		        setTimeout("initJQuery()", 50);
		        
		    } else {
		    	
		    	// jQuery way of loading scripts
		    	$.getScript('js/jquery.backgroundPosition.js', function() {
		    				    		
		    		$("html").removeClass("csstransitions");
		         
		            // Set CSS in Firefox (Required to use the backgroundPosition js)
					$('#shutter1').css({backgroundPosition: '0px 0px'});
					$('#shutter2').css({backgroundPosition: '0px 0px'});
					$('#shutter3').css({backgroundPosition: '0px 0px'});
					$('#shutter4').css({backgroundPosition: '0px 0px'});
                                        $('#shutter5').css({backgroundPosition: '0px 0px'});
                                        // SECOND ROW
                                        $('#shutter8').css({backgroundPosition: '0px 0px'});
					$('#shutter7').css({backgroundPosition: '0px 0px'});
					$('#shutter8').css({backgroundPosition: '0px 0px'});
					$('#shutter9').css({backgroundPosition: '0px 0px'});
                                        $('#shutter10').css({backgroundPosition: '0px 0px'});
                                        // END OF SECOND ROW
                                        // THIRD ROW
                                        $('#shutter11').css({backgroundPosition: '0px 0px'});
					$('#shutter12').css({backgroundPosition: '0px 0px'});
					$('#shutter13').css({backgroundPosition: '0px 0px'});
					$('#shutter14').css({backgroundPosition: '0px 0px'});
                                        $('#shutter15').css({backgroundPosition: '0px 0px'});
                                        // END OF THIRD ROW
                                        // FOURTH ROW
                                        $('#shutter16').css({backgroundPosition: '0px 0px'});
					$('#shutter17').css({backgroundPosition: '0px 0px'});
					$('#shutter18').css({backgroundPosition: '0px 0px'});
					$('#shutter19').css({backgroundPosition: '0px 0px'});
                                        $('#shutter20').css({backgroundPosition: '0px 0px'});
                                        // END OF FOURTH ROW
                                        // FIFTH ROW
                                        $('#shutter21').css({backgroundPosition: '0px 0px'});
					$('#shutter22').css({backgroundPosition: '0px 0px'});
					$('#shutter23').css({backgroundPosition: '0px 0px'});
					$('#shutter24').css({backgroundPosition: '0px 0px'});
                                        $('#shutter25').css({backgroundPosition: '0px 0px'});
                                        // END OF FIFTH ROW
		
					// Animate the Shutter
                                        // FIRST ROW (SHUTTER 1 THROUGH 5 DATE SENSITIVE)
					var thisDate = new Date(2014,11,1);
                                        if (today>=thisDate)
                                        {
                                        
                                        $("li#shutter1 a").hover(function() {	
					      $(this).parent().stop().animate({backgroundPosition: '(0px -100px)'}, 500);
					    }, function() {
					      $(this).parent().stop().animate({backgroundPosition: '(0px 0px)'}, 500);
					});
                                        }
                                        
                                        var thisDate = new Date(2014,11,2);
                                        if (today>=thisDate)
                                        {
                                        
                                        $("li#shutter2 a").hover(function() {	
					      $(this).parent().stop().animate({backgroundPosition: '(0px -100px)'}, 500);
					    }, function() {
					      $(this).parent().stop().animate({backgroundPosition: '(0px 0px)'}, 500);
					});
                                        }var thisDate = new Date(2014,11,3);
                                        if (today>=thisDate)
                                        {
                                        
                                        $("li#shutter3 a").hover(function() {	
					      $(this).parent().stop().animate({backgroundPosition: '(0px -100px)'}, 500);
					    }, function() {
					      $(this).parent().stop().animate({backgroundPosition: '(0px 0px)'}, 500);
					});
                                        }
                                        
                                        var thisDate = new Date(2014,11,4);
                                        if (today>=thisDate)
                                        {
                                        
                                        $("li#shutter4 a").hover(function() {	
					      $(this).parent().stop().animate({backgroundPosition: '(0px -100px)'}, 500);
					    }, function() {
					      $(this).parent().stop().animate({backgroundPosition: '(0px 0px)'}, 500);
					});
                                        }
                                        
                                        var thisDate = new Date(2014,11,5);
                                        if (today>=thisDate)
                                        {
                                        
                                        $("li#shutter5 a").hover(function() {	
					      $(this).parent().stop().animate({backgroundPosition: '(0px -100px)'}, 500);
					    }, function() {
					      $(this).parent().stop().animate({backgroundPosition: '(0px 0px)'}, 500);
					});
                                        }
                                        
                                        
                                        
                                        // SECOND ROW (SHUTTER 6 THROUGH 10 DATE SENSITIVE)
                                        var thisDate = new Date(2014,11,6);
                                        if (today>=thisDate)
                                        {
                                        
                                        $("li#shutter6 a").hover(function() {	
					      $(this).parent().stop().animate({backgroundPosition: '(0px -100px)'}, 500);
					    }, function() {
					      $(this).parent().stop().animate({backgroundPosition: '(0px 0px)'}, 500);
					});
                                        }
                                        
                                        var thisDate = new Date(2014,11,7);
                                        if (today>=thisDate)
                                        {
                                        
                                        $("li#shutter7 a").hover(function() {	
					      $(this).parent().stop().animate({backgroundPosition: '(0px -100px)'}, 500);
					    }, function() {
					      $(this).parent().stop().animate({backgroundPosition: '(0px 0px)'}, 500);
					});
                                        }
                                        
                                        var thisDate = new Date(2014,11,8);
                                        if (today>=thisDate)
                                        {
                                        
                                        $("li#shutter8 a").hover(function() {	
					      $(this).parent().stop().animate({backgroundPosition: '(0px -100px)'}, 500);
					    }, function() {
					      $(this).parent().stop().animate({backgroundPosition: '(0px 0px)'}, 500);
					});
                                        }
                                        
                                        var thisDate = new Date(2014,11,9);
                                        if (today>=thisDate)
                                        {
                                        
                                        $("li#shutter9 a").hover(function() {	
					      $(this).parent().stop().animate({backgroundPosition: '(0px -100px)'}, 500);
					    }, function() {
					      $(this).parent().stop().animate({backgroundPosition: '(0px 0px)'}, 500);
					});
                                        }
                                        
                                        var thisDate = new Date(2014,11,10);
                                        if (today>=thisDate)
                                        {
                                        
                                        $("li#shutter10 a").hover(function() {	
					      $(this).parent().stop().animate({backgroundPosition: '(0px -100px)'}, 500);
					    }, function() {
					      $(this).parent().stop().animate({backgroundPosition: '(0px 0px)'}, 500);
					});
                                        }
                                        
                                        //END SECOND ROW
                                        
                                        // THIRD ROW (SHUTTER 11 THROUGH 15 DATE SENSITIVE)
                                        var thisDate = new Date(2014,11,11);
                                        if (today>=thisDate)
                                        {
                                        
                                        $("li#shutter11 a").hover(function() {	
					      $(this).parent().stop().animate({backgroundPosition: '(0px -100px)'}, 500);
					    }, function() {
					      $(this).parent().stop().animate({backgroundPosition: '(0px 0px)'}, 500);
					});
                                        }
                                        
                                        var thisDate = new Date(2014,11,12);
                                        if (today>=thisDate)
                                        {
                                        
                                        $("li#shutter12 a").hover(function() {	
					      $(this).parent().stop().animate({backgroundPosition: '(0px -100px)'}, 500);
					    }, function() {
					      $(this).parent().stop().animate({backgroundPosition: '(0px 0px)'}, 500);
					});
                                        }
                                        
                                        var thisDate = new Date(2014,11,13);
                                        if (today>=thisDate)
                                        {
                                        
                                        $("li#shutter13 a").hover(function() {	
					      $(this).parent().stop().animate({backgroundPosition: '(0px -100px)'}, 500);
					    }, function() {
					      $(this).parent().stop().animate({backgroundPosition: '(0px 0px)'}, 500);
					});
                                        }
                                        
                                        var thisDate = new Date(2014,11,14);
                                        if (today>=thisDate)
                                        {
                                        
                                        $("li#shutter14 a").hover(function() {	
					      $(this).parent().stop().animate({backgroundPosition: '(0px -100px)'}, 500);
					    }, function() {
					      $(this).parent().stop().animate({backgroundPosition: '(0px 0px)'}, 500);
					});
                                        }
                                        
                                        var thisDate = new Date(2014,11,15);
                                        if (today>=thisDate)
                                        {
                                        
                                        $("li#shutter15 a").hover(function() {	
					      $(this).parent().stop().animate({backgroundPosition: '(0px -100px)'}, 500);
					    }, function() {
					      $(this).parent().stop().animate({backgroundPosition: '(0px 0px)'}, 500);
					});
                                        }
                                        //END THIRD ROW
                                        
                                        // FOURTH ROW (SHUTTER 16 THROUGH 20 DATE SENSITIVE)
                                        var thisDate = new Date(2014,11,16);
                                        if (today>=thisDate)
                                        {
                                        
                                        $("li#shutter16 a").hover(function() {	
					      $(this).parent().stop().animate({backgroundPosition: '(0px -100px)'}, 500);
					    }, function() {
					      $(this).parent().stop().animate({backgroundPosition: '(0px 0px)'}, 500);
					});
                                        }
                                        
                                        var thisDate = new Date(2014,11,17);
                                        if (today>=thisDate)
                                        {
                                        
                                        $("li#shutter17 a").hover(function() {	
					      $(this).parent().stop().animate({backgroundPosition: '(0px -100px)'}, 500);
					    }, function() {
					      $(this).parent().stop().animate({backgroundPosition: '(0px 0px)'}, 500);
					});
                                        }
                                        
                                        var thisDate = new Date(2014,11,18);
                                        if (today>=thisDate)
                                        {
                                        
                                        $("li#shutter18 a").hover(function() {	
					      $(this).parent().stop().animate({backgroundPosition: '(0px -100px)'}, 500);
					    }, function() {
					      $(this).parent().stop().animate({backgroundPosition: '(0px 0px)'}, 500);
					});
                                        }
                                        
                                        var thisDate = new Date(2014,11,19);
                                        if (today>=thisDate)
                                        {
                                        
                                        $("li#shutter19 a").hover(function() {	
					      $(this).parent().stop().animate({backgroundPosition: '(0px -100px)'}, 500);
					    }, function() {
					      $(this).parent().stop().animate({backgroundPosition: '(0px 0px)'}, 500);
					});
                                        }
                                        
                                        var thisDate = new Date(2014,11,20);
                                        if (today>=thisDate)
                                        {
                                        
                                        $("li#shutter20 a").hover(function() {	
					      $(this).parent().stop().animate({backgroundPosition: '(0px -100px)'}, 500);
					    }, function() {
					      $(this).parent().stop().animate({backgroundPosition: '(0px 0px)'}, 500);
					});
                                        }
                                        //END FOURTH ROW
                                        
                                        // FIFTH ROW (SHUTTER 21 THROUGH 25 DATE SENSITIVE)
                                        var thisDate = new Date(2014,11,21);
                                        if (today>=thisDate)
                                        {
                                        
                                        $("li#shutter21 a").hover(function() {	
					      $(this).parent().stop().animate({backgroundPosition: '(0px -100px)'}, 500);
					    }, function() {
					      $(this).parent().stop().animate({backgroundPosition: '(0px 0px)'}, 500);
					});
                                        }
                                        
                                        var thisDate = new Date(2014,11,22);
                                        if (today>=thisDate)
                                        {
                                        
                                        $("li#shutter22 a").hover(function() {	
					      $(this).parent().stop().animate({backgroundPosition: '(0px -100px)'}, 500);
					    }, function() {
					      $(this).parent().stop().animate({backgroundPosition: '(0px 0px)'}, 500);
					});
                                        }
                                        
                                        var thisDate = new Date(2014,11,23);
                                        if (today>=thisDate)
                                        {
                                        
                                        $("li#shutter23 a").hover(function() {	
					      $(this).parent().stop().animate({backgroundPosition: '(0px -100px)'}, 500);
					    }, function() {
					      $(this).parent().stop().animate({backgroundPosition: '(0px 0px)'}, 500);
					});
                                        }
                                        
                                        var thisDate = new Date(2014,11,24);
                                        if (today>=thisDate)
                                        {
                                        
                                        $("li#shutter24 a").hover(function() {	
					      $(this).parent().stop().animate({backgroundPosition: '(0px -100px)'}, 500);
					    }, function() {
					      $(this).parent().stop().animate({backgroundPosition: '(0px 0px)'}, 500);
					});
                                        }
                                        
                                        var thisDate = new Date(2014,11,25);
                                        if (today>=thisDate)
                                        {
                                        
                                        $("li#shutter25 a").hover(function() {	
					      $(this).parent().stop().animate({backgroundPosition: '(0px -100px)'}, 500);
					    }, function() {
					      $(this).parent().stop().animate({backgroundPosition: '(0px 0px)'}, 500);
					});
                                        }
                                        //END FIFTH ROW
					
		    	});
		
		    }
		            
		}
		
		if (!Modernizr.csstransitions) {
			initJQuery();
		}
	</script>

    </body>
    
</html>