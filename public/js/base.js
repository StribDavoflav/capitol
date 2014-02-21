
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

