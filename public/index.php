<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>MAIN INDEX</title>
  
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
<link rel="stylesheet" href="http://www.startribune.com/includes/style.css?607" type="text/css" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script src="http://www.startribune.com/includes/globalJquery.js?20140204" type="text/javascript" language="javascript"></script>
<script src="http://www.startribune.com/includes/jquery.colorbox-1.4.6-min.js" type="text/javascript" language="javascript"></script>
<style>
#cboxClose {
	/*background: url(http://stmedia.startribune.com/designimages/btn_close_invert.png)*/
	}

	background
</style>

<script type='text/javascript'>

var duration = 600;
var imageHeight = 327;
var oldState = 0;
var capitolImages = [];

jQuery(window).load(function(){
  jQuery("#tabs").tabs({
      activate: function( evt, ui ) {
          var tab = ui.newTab.data("tab");
          switchCapitolImage(tab);
          jQuery(".overlay").colorbox({iframe:true, innerWidth:1024, innerHeight:620, scrolling: false});
      }
  })
  jQuery(".overlay").colorbox({iframe:true, innerWidth:1024, innerHeight:620, scrolling: false});

  // From 0 to 6, save the jQuery image object in the `capitolImages` array
  for (var i = 0; i <= 6; i++) {
    capitolImages[i] = $('.capitol-image-' + i);
  }
  // Set the initial image to full opacity
  capitolImages[oldState].css({
    opacity: 1
  });
});

function switchCapitolImage(newState) {
  // Set the height of the new image to `0`, and make it full opacity
  capitolImages[newState].css({
    height: 0,
    opacity: 1
  });

  // Animate the new image's height to the full height of the image
  capitolImages[newState].animate({
    height: imageHeight
  }, duration, 'linear');

  // Animate the old image's opacity to `0`.
  capitolImages[oldState].animate({
    opacity: 0
  }, duration / 2, 'linear');

  // Save the new state as the old state
  oldState = newState;
}

</script>

  <link rel="stylesheet" href="css/base.css" />
</head>
<body>

<h1>2014-2-17-capitol-restoration</h1>

<div id="capitol-image-wrapper">
  <img class='capitol-image-0' src="http://stmedia.startribune.com/images/tabs-0.png">
  <img class='capitol-image-1' src="http://stmedia.startribune.com/images/tabs-1.png">
  <img class='capitol-image-2' src="http://stmedia.startribune.com/images/tabs-2.png">
  <img class='capitol-image-3' src="http://stmedia.startribune.com/images/tabs-3.png">
  <img class='capitol-image-4' src="http://stmedia.startribune.com/images/tabs-4.png">
  <img class='capitol-image-5' src="http://stmedia.startribune.com/images/tabs-5.png">
  <img class='capitol-image-6' src="http://stmedia.startribune.com/images/tabs-6.png">
  <div class='clear'></div>
</div>

<div id="tabs">
    <ul>
      <li data-tab="0"><a href="#tabs-0">intro</a></li>
      <li data-tab="1"><a href="#tabs-1">Basement</a></li>
      <li data-tab="2"><a href="#tabs-2">Ground Floor</a></li>
      <li data-tab="3"><a href="#tabs-3">1st Floor</a></li>
      <li data-tab="4"><a href="#tabs-4">2nd Floor</a></li>
      <li data-tab="5"><a href="#tabs-5">3rd Floor</a></li>
      <li data-tab="6"><a href="#tabs-6">Dome/Exterior</a></li>
    </ul>


    <div id="tabs-0">
		<div class="cardItems">
			<div id="intro">
				<a href="http://www.startribune.com/components/242933061.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

			<div id="floorText">
				<h3>INTRO </h3>
				<p>Welcome to the project, here is why you are going to like it.</p>
			</div>
		</div>
    </div>




    <div id="tabs-1">              
		<div class="cardItems">
		 
		    <h3>Starting at the bottom</h3>
		    <p style="padding-bottom:20px">The floor has been under reconstruction since 2010 and is about 45% completed. An estimated $12 million has already been spent and another $10 million is budgeted for completion.</p>
		  

			<div id="rathskellar">
				<a href="basement/rathskeller.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

			<div id="supremeCourt">
				<a href="basement/supremeCourtDining.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

			<div id="hallways">
				<a href="basement/hallways.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

			<div id="pressOffices">
				<a href="basement/pressOffices.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

		</div>           
    </div>

    <div id="tabs-2">
        <div class="cardItems">
                 
			<h3>Ground Floor</h3>
			<p style="padding-bottom:20px">The floor has been under reconstruction since 2010 and is about 45% completed. An estimated $12 million has already been spent and another $10 million is budgeted for completion.</p>


			<div id="rathskellar">
				<a href="ground-floor/staircases.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

			<div id="supremeCourt">
				<a href="ground-floor/halls-ceilings.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

		</div>           
    </div>


    <div id="tabs-3">
         <div class="cardItems">
                 
			<h3>First Floor</h3>
			<p style="padding-bottom:20px">The floor has been under reconstruction since 2010 and is about 45% completed. An estimated $12 million has already been spent and another $10 million is budgeted for completion.</p>


			<div id="rathskellar">
				<a href="first-floor/receptionRoom.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

			<div id="supremeCourt">
				<a href="first-floor/interiors.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

		</div>           
    </div>


	<div id="tabs-4">
		<div class="cardItems">
                 
			<h3>Second Floor</h3>
			<p style="padding-bottom:20px">The floor has been under reconstruction since 2010 and is about 45% completed. An estimated $12 million has already been spent and another $10 million is budgeted for completion.</p>

			<div id="rathskellar">
				<a href="second-floor/supremeCourt.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

			<div id="supremeCourt">
				<a href="second-floor/house.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

			<div id="hallways">
				<a href="second-floor/senate.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

			<div id="pressOffices">
				<a href="second-floor/rotunda.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

			<div id="hallways">
				<a href="second-floor/hallways.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

			<div id="terrace">
				<a href="second-floor/terrace.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

		</div>           
    </div>





    <div id="tabs-5">
		<div class="cardItems">
		 
		    <h3>Third floor</h3>
		    <p style="padding-bottom:20px">The floor has been under reconstruction since 2010 and is about 45% completed. An estimated $12 million has already been spent and another $10 million is budgeted for completion.</p>
		  

			<div id="rathskellar">
				<a href="third-floor/domeInterior.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

			<div id="supremeCourt">
				<a href="third-floor/artwork.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

			<div id="hallways">
				<a href="third-floor/gophers.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

		</div>           
    </div>




    <div id="tabs-6">
		<div class="cardItems">
                 
			<h3>ON THE OUTSIDE</h3>
			<p style="padding-bottom:20px">The floor has been under reconstruction since 2010 and is about 45% completed. An estimated $12 million has already been spent and another $10 million is budgeted for completion.</p>


			<div id="rathskellar">
				<a href="dome-exterior/exterior.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

			<div id="supremeCourt">
				<a href="dome-exterior/lion.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

		</div>           
    </div>
</div>
  




<script src="js/base.js" type="text/javascript" charset="utf-8"></script>

<?php readfile('http://www.startribune.com/templates/vf?vid=245841741&sosp=/politics'); ?>

</body>
</html>

