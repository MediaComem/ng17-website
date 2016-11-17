// Smooth Scroll
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 200);
        return false;
      }
    }
  });
});


// Youtube
function onYouTubeIframeAPIReady() {
 var player;
 player = new YT.Player('youtube', {
   videoId: 'AT9HjP0vCTQ', // YouTube Video ID
   width: 560,               // Player width (in px)
   height: 316,              // Player height (in px)
   playerVars: {
     autoplay: 1,        // Auto-play the video on load
     controls: 1,        // Show pause/play buttons in player
     showinfo: 0,        // Hide the video title
     modestbranding: 1,  // Hide the Youtube Logo
     loop: 1,            // Run the video in a loop
     fs: 0,              // Hide the full screen button
     cc_load_policy: 0, // Hide closed captions
     iv_load_policy: 3,  // Hide the Video Annotations
     autohide: 0         // Hide video controls when playing
   },
   events: {
     onReady: function(e) {
       e.target.mute();
       player.seekTo(2400);
     }
   }
 });
}
