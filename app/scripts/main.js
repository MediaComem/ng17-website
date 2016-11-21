// Smooth Scroll
$(function() {
  $('a[href*="#"]:not([href="#"])')
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


// Youtube
function onYouTubeIframeAPIReady() {
  var player;
  var ytid = 'pXf21A2RGKI';

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
