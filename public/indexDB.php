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
      <li data-tab="0"><a href="#tabs-0">Welcome</a></li>
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
				<a href="intro/index.html" class="overlay cboxElement">
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
		    <p style="padding-bottom:20px">Long the home of Capitol staff and the Minnesota press, the basement has been gutted, its tenants relocated, and its tunnels rearranged to allow for mechanical work. By the end of the project, the basement area will be opened up to become a show space for visitors: adding an underground rotunda to serve as a public event space, restoring long-closed areas and exposing long painted-over stonework.  The basement is home to the public Rathskeller cafeteria, which has been restored to again show off German phrases along its walls, which will have additional seating added. Many are drinking themed, including "Ein frischer Trank, der Arbeit Dank" translated as "Enjoy a glass after a duty well performed."</p>
		  

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
			<p style="padding-bottom:20px">The ground floor, like much of the Capitol, will have its walls and ceilings cleaned and restored. The work may uncover original decorative paint in the north hall and elsewhere. Throughout the building, the restoration will add new directional signs because, as one report on the restoration noted, the current sparse signage means visiting the Capitol has become "prohibitively complex and inaccessible" for visitors and regulars alike. The East side of the floor will be opened, allowing for extended public space and a classroom.</p>


			<div id="g-staircases">
				<a href="ground-floor/staircases.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

			<div id="g-halls">
				<a href="ground-floor/halls-ceilings.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

		</div>           
    </div>


    <div id="tabs-3">
         <div class="cardItems">
                 
			<h3>First Floor</h3>
			<p style="padding-bottom:20px">This is the premier visitors' space at the Capitol, home of the rotunda where thousands of Minnesotans gather each year to make their voices heard. Both the governor and the attorney general's office on this now  on this floor will be moved during some parts of the restoration. This floor will become home to a new public information center to ease visitors trip to the Capitol. The Capitol's current elevators get new glass-front doors and a new service elevator will be added.</p>


			<div id="one-reception">
				<a href="first-floor/receptionRoom.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

			<div id="one-interiors">
				<a href="first-floor/interiors.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

		</div>           
    </div>


	<div id="tabs-4">
		<div class="cardItems">
                 
			<h3>Second Floor</h3>
			<p style="padding-bottom:20px">The second floor of the Capitol houses the House and Senate chambers, where lawmakers meet in session to debate the issues of the day and vote on measures to deliver to the governor. It is also home to the state Supreme Court historic chambers, directly across the rotunda from the Senate, which could allow the Supreme Court chief justice and the Senate president to stare into each other's eyes. With construction, the second floor will get a thorough cleaning, decorative paint will be restored and an outdoor balcony will be repaired. The restoration will allow the addition of a lunch counter that will be open whenever lawmakers are meeting in session.</p>

			<div id="two-supreme">
				<a href="second-floor/supremeCourt.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

			<div id="two-house">
				<a href="second-floor/house.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

			<div id="two-senate">
				<a href="second-floor/senate.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

			<div id="two-rotunda">
				<a href="second-floor/rotunda.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

			<div id="two-hallways">
				<a href="second-floor/hallways.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

			<div id="two-terrace">
				<a href="second-floor/terrace.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

		</div>           
    </div>





    <div id="tabs-5">
		<div class="cardItems">
		 
		    <h3>Third floor</h3>
		    <p style="padding-bottom:20px">The decorative paint on this floor, which provides access to the House and Senate galleries, has largely been refurbished to its Easter egg original pallet. From the third floor, visitors can look down to the rotunda below and up to the slightly damaged but still vibrant paint that rings the inside of the dome. The water-damaged dome is in the process of being repaired. Murals on this floor include one that shows a six-toed man, a small mouse and an animal skull. This floor, like others, will get new restrooms.</p>
		  

			<div id="three-domeInterior">
				<a href="third-floor/domeInterior.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

			<div id="three-artwork">
				<a href="third-floor/artwork.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

			<div id="three-gophers">
				<a href="third-floor/gophers.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

		</div>           
    </div>




    <div id="tabs-6">
		<div class="cardItems">
                 
			<h3>ON THE OUTSIDE</h3>
			<p style="padding-bottom:20px">Specialists are going through the painstaking process of cleaning and replacing the crumbling Georgia marble. Before renovation began in 2013, the deteriorating stone was sloughing off the building and causing safety problems and water damage. The Capitol grounds have also undergone renovation-related changes as temporary parking lots have been built into the mall to allow other work to be done. Eventually, the roof will be restored and repaired.</p>


			<div id="exteriorStone">
				<a href="dome-exterior/exterior.html" class="overlay cboxElement">
					<img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
				</a>
			</div>

			<div id="lionsHead">
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

