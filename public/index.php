<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>2014-2-17-capitol-restoration</title>
  
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
<link rel="stylesheet" href="http://www.startribune.com/includes/style.css?607" type="text/css" />




<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

<script src="http://www.startribune.com/includes/globalJquery.js?20140204" type="text/javascript" language="javascript"></script>
   
<script src="http://www.startribune.com/includes/jquery.colorbox-1.4.6-min.js" type="text/javascript" language="javascript"></script>

 <!--  <link rel="stylesheet" type="text/css" href="http://jsfiddle.net//css/result-light.css"> -->


    <!--<link rel="stylesheet" type="text/css" href="http://jsfiddle.net/css/normalize.css">
  
  <link rel="stylesheet" type="text/css" media="screen" href="http://dev.www.startribune.com/includes/RedesignadStyles011108.css?cache=2" />
  <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="http://www.startribune.com/includes/style.css?607" type="text/css" />

  <script type='text/javascript' src='http://code.jquery.com/jquery-1.9.1.js'></script>
  <script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
  <script type="text/javascript" src="scripts/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="http://www.startribune.com/includes/jquery.colorbox-min.js?v1.3.15&c=y"></script>
  <script src="http://www.startribune.com/includes/globalJquery.js?20140204" type="text/javascript" language="javascript"></script>-->
   



<script type='text/javascript'>
//<![CDATA[ 
jQuery(window).load(function(){
  var DBtabs = jQuery("#tabs").tabs({
      activate: function( evt, ui ) {        
          
          console.log(ui);
          var tab=ui.newTab.data("tab");
          var path="http://stmedia.startribune.com/images/";
          var imgsrc=path+tab+".png";
          console.log("HIT"+imgsrc);
          jQuery("#current").html('<img src="'+imgsrc+'">');
          jQuery(".overlay").colorbox({iframe:true, innerWidth:960, innerHeight:600, scrolling: false});
      }
  })
  jQuery(".overlay").colorbox({iframe:true, innerWidth:960, innerHeight:600, scrolling: false});
});
//]]>  

</script>

  
  <link rel="stylesheet" href="css/base.css" />
</head>
<body>



<h1>2014-2-17-capitol-restoration</h1>

<span id="current"><img src="http://stmedia.startribune.com/images/tabs-0.png"></span>

<div id="tabs">
    <ul>
      <li data-tab="tabs-0"><a href="#tabs-0">intro</a></li>
      <li data-tab="tabs-1"><a href="#tabs-1">Basement</a></li>
      <li data-tab="tabs-2"><a href="#tabs-2">Ground Floor</a></li>
      <li data-tab="tabs-3"><a href="#tabs-3">1st Floor</a></li>
      <li data-tab="tabs-4"><a href="#tabs-4">2nd Floor</a></li>
      <li data-tab="tabs-5"><a href="#tabs-5">3rd Floor</a></li>
      <li data-tab="tabs-6"><a href="#tabs-6">Dome/Exterior</a></li>
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
                  <div id="intro">
                    <a href="http://www.startribune.com/components/242933061.html" class="overlay cboxElement">
                      <img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
                    </a>
                  </div>

                  <div id="floorText">
                    <h3>BASEMENT </h3>
                    <p>The floor has been under reconstruction since 2010 and is about 45% completed. An estimated $12 million has already been spent and another $10 million is budgeted for completion.</p>
                  </div>

                  <div id="rathskellar">
                    <a href="basement/index.html" class="overlay cboxElement">
                      <img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
                    </a>
                  </div>

                  <div id="supremeCourt">
                    <a href="http://www.startribune.com/components/242933061.html" class="overlay cboxElement">
                      <img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
                    </a>
                  </div>

                  <div id="hallways">
                    <a href="http://www.startribune.com/components/242933061.html" class="overlay cboxElement">
                      <img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
                    </a>
                  </div>

                  <div id="pressOffices">
                    <a href="http://www.startribune.com/components/242933061.html" class="overlay cboxElement">
                      <img src="http://stmedia.startribune.com/designimages/space.gif" width='304' height='168'>  
                    </a>
                  </div>
                </div>           
             

    </div>
    <div id="tabs-2">
        <p>Ground Floor<br>
        blah<br></p>
    </div>
    <div id="tabs-3">
        <p>First Floor</p>
    </div>
      <div id="tabs-4">
        <p>Second Floor</p>
    </div>
    <div id="tabs-5">
        <p>Third Floor</p>
    </div>
    <div id="tabs-6">
        <p>Dome / Exterior</p>
    </div>
</div>
  




<script src="js/base.js" type="text/javascript" charset="utf-8"></script>

<?php readfile('http://www.startribune.com/templates/vf?vid=245841741&sosp=/politics'); ?>

</body>
</html>

