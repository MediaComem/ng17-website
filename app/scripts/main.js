


// Youtube
function onYouTubeIframeAPIReady() {
  var player;
  var ytid = 'JwEc75T8s2E';

  player = new YT.Player('youtube', {
    videoId: ytid, // YouTube Video ID
    suggestedQuality: 'hd1080',
    width: 1920, // Player width (in px)
    height: 1080, // Player height (in px)
    playerVars: {
      autoplay: 1, // Auto-play the video on load
      rel:0,
      controls: 0, // Show pause/play buttons in player
      showinfo: 0, // Hide the video title
      modestbranding: 1, // Hide the Youtube Logo
      enablejsapi : 1,
      fs: 0, // Hide the full screen button
      cc_load_policy: 0, // Hide closed captions
      iv_load_policy: 3, // Hide the Video Annotations
      autohide: 0 // Hide video controls when playing
    },
    events: {

      onReady: function(e) {
        e.target.mute();
        $('#youtube').fadeIn(3000,function() {
            e.target.playVideo();
        });
        //player.seekTo(2400);
      },
      onStateChange: function(e) {
        if (e.data === YT.PlayerState.ENDED) {
          player.playVideo();
        }
      }
    }
  });
}


// Tabs
$('ul.tabs').each(function(){
  // For each set of tabs, we want to keep track of
  // which tab is active and its associated content
  var $active, $content, $links = $(this).find('a');

  // If the location.hash matches one of the links, use that as the active tab.
  // If no match is found, use the first link as the initial active tab.
  $active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
  $active.addClass('active');

  $content = $($active[0].hash);

  // Hide the remaining content
  $links.not($active).each(function () {
    $(this.hash).hide();
  });

  // Bind the click event handler
  $(this).on('click', 'a', function(e){
    // Prevent the anchor's default click action
    e.preventDefault();
    // Make the old tab inactive.
    $active.removeClass('active');
    $content.fadeOut(0, function() {

    });

    // Update the variables with the new link and content
    $active = $(this);
    $content = $(this.hash);

    // Make the tab active.
    $active.addClass('active');
    $content.fadeIn(0);

  });
});



// Smooth Scroll
$(function() {
  $('a[href*="#"]:not([href="#"]):not(.tablink)')
    .click(function() {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html, body')
            .animate({
              scrollTop: target.offset()
                .top
            }, 200);
          return false;
        }
      }
    });
});

// mail manager
$(function() {
    // Get the form.
    var form = $('#ajax-contact');

    // Get the messages div.
    var formMessages = $('#form-message');

	// Set up an event listener for the contact form.
	$(form).submit(function(event) {
	    // Stop the browser from submitting the form.
	    event.preventDefault();
	
	    // Serialize the form data.
		var formData = $(form).serialize();
		
		// Submit the form using AJAX.
		$.ajax({
		    type: 'POST',
		    url: $(form).attr('action'),
		    data: formData
		}).done(function(response) {
		    // Make sure that the formMessages div has the 'success' class.
		    $(formMessages).removeClass('error');
		    $(formMessages).addClass('success');
		
		    // Set the message text.
		    $(formMessages).text(response);
		
		    // Clear the form.
		    $('#name').val('');
		    $('#email').val('');
		    $('#message').val('');
		}).fail(function(data) {
		    // Make sure that the formMessages div has the 'error' class.
		    $(formMessages).removeClass('success');
		    $(formMessages).addClass('error');
		
		    // Set the message text.
		    if (data.responseText !== '') {
		        $(formMessages).text(data.responseText);
		    } else {
		        $(formMessages).text('Oops! An error occured and your message could not be sent.');
		    }
		});
	});
});


