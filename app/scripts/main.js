


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

$(function() {
    
    // Form validation via plugin
    var submitMessageContact     = $('#submit-message-contact'),
        messageContainerContact  = submitMessageContact.find('span'),
        loadingContact           = $('#loading-contact');
        
    function showMessageContact(message, classAttr) {
        messageContainerContact.text(message)
        messageContainerContact.attr('class', classAttr);
    }
        
    $('#contact-form').validate({     
	       
        // Override to submit the form via ajax
        submitHandler: function(form) {
            var options = {
                beforeSubmit: function() {
                    loadingContact.show();
                },
                success: function() {
                    showMessageContact('Merci! Votre email est envoyé.', 'success');
                    form.reset();
                    loadingContact.hide();
                },
                error: function() {
                    showMessageContact('Désolé, votre email n\'a pas pu être envoyé. Veuillez essayer plus tard.', 'failure');
                    loadingContact.hide();
                }
            };
            $(form).ajaxSubmit(options);
        },
        invalidHandler: function() {
            showMessageContact('Oups, il y a eu un problème.', 'failure');
        }
    });
        
     // Form validation via plugin
    var submitMessageParticipation     = $('#submit-message-participation'),
        messageContainerParticipation  = submitMessageParticipation.find('span'),
        loadingParticipation = $('#loading-participation');
        
    function showMessageParticipation(message, classAttr) {
        messageContainerParticipation.text(message)
        messageContainerParticipation.attr('class', classAttr);
    }
    $('#participation-form').validate({     
	       
        // Override to submit the form via ajax
        submitHandler: function(form) {
            var options = {
                beforeSubmit: function() {
                    loadingParticipation.show();
                },
                success: function() {
                    showMessageParticipation('Merci! Votre email est envoyé.', 'success');
                    form.reset();
                    loadingParticipation.hide();
                },
                error: function() {
                    showMessageParticipation('Désolé, votre email n\'a pas pu être envoyé. Veuillez essayer plus tard.', 'failure');
                    loadingParticipation.hide();
                }
            };
            $(form).ajaxSubmit(options);
        },
        invalidHandler: function() {
            showMessageParticipation('Oups, il y a eu un problème.', 'failure');
        }
    });

});



