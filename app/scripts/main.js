

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
        console.log(target);
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
	$('ul.tabs').on('click', 'a.tablink', function() {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $('#details');
			if(target.offset().top > $(window).scrollTop()) {
				if (target.length) {
					$('html, body')
					.animate({
				  scrollTop: target.offset()
				    .top
				  }, 200);
				  return false;
				}
			}
			
      }

	});
});

jQuery.extend(jQuery.validator.messages, {
	required: $(".gtm_form").attr('val-req'),
    email: $(".gtm_form").attr('val-email')
});

$(function() {
    
    // Form validation via plugin
    var submitMessageContact     = $('#submit-message-contact'),
        messageContainerContact  = submitMessageContact.find('span'),
        loadingContact 			 = $('#loading-contact')
        
    $('#contact-form').validate({     
        // Override to submit the form via ajax
        submitHandler: function(form) {
            var options = {
                beforeSubmit: function() {
                    loadingContact.show();
                },
                success: function() {
	                dataLayer.push({
			            'event':'formSubmit',
			            'formName': form.id,
			            'formClass': 'gtm_form',
						'eventCategory': 'AJAX',
						'eventAction': 'actuib',
						'eventLabel': 'label'
					});
					toastr.success($('#submit-message-contact').attr("success"), {
						"closeButton": false,
						"debug": false,
						"newestOnTop": false,
						"progressBar": false,
						"positionClass": "toast-bottom-full-width",
						"preventDuplicates": false,
						"onclick": null,
						"showDuration": "300",
						"hideDuration": "1000",
						"timeOut": "5000",
						"extendedTimeOut": "1000",
						"showEasing": "swing",
						"hideEasing": "linear",
						"showMethod": "fadeIn",
						"hideMethod": "fadeOut"
					});
                    form.reset();
                    loadingContact.hide();
                },
                error: function() {
                    toastr.warning($('#submit-message-contact').attr("retry"), {
						"closeButton": false,
						"debug": false,
						"newestOnTop": false,
						"progressBar": false,
						"positionClass": "toast-bottom-full-width",
						"preventDuplicates": false,
						"onclick": null,
						"showDuration": "300",
						"hideDuration": "1000",
						"timeOut": "5000",
						"extendedTimeOut": "1000",
						"showEasing": "swing",
						"hideEasing": "linear",
						"showMethod": "fadeIn",
						"hideMethod": "fadeOut"
					})
                    loadingContact.hide();
                }
            };
			dataLayer.push({'event':'formSubmit'});
            $(form).ajaxSubmit(options);
        },
        invalidHandler: function() {
            toastr.error($('#submit-message-contact').attr("failed"), {
				"closeButton": false,
				"debug": false,
				"newestOnTop": false,
				"progressBar": false,
				"positionClass": "toast-bottom-full-width",
				"preventDuplicates": false,
				"onclick": null,
				"showDuration": "300",
				"hideDuration": "1000",
				"timeOut": "5000",
				"extendedTimeOut": "1000",
				"showEasing": "swing",
				"hideEasing": "linear",
				"showMethod": "fadeIn",
				"hideMethod": "fadeOut"
			})
        },
        errorPlacement: function(error, element) {
			toastr.error($(error).html(), {
				"closeButton": false,
				"debug": false,
				"newestOnTop": false,
				"progressBar": false,
				"positionClass": "toast-bottom-full-width",
				"preventDuplicates": false,
				"onclick": null,
				"showDuration": "300",
				"hideDuration": "1000",
				"timeOut": "5000",
				"extendedTimeOut": "1000",
				"showEasing": "swing",
				"hideEasing": "linear",
				"showMethod": "fadeIn",
				"hideMethod": "fadeOut"
			})
	   	}

    });
        
     // Form validation via plugin
    var submitMessageParticipation     = $('#submit-message-participation'),
        messageContainerParticipation  = submitMessageParticipation.find('span'),
        loadingParticipation = $('#loading-participation');
        
    $('#participation-form').validate({     
	    
        // Override to submit the form via ajax
        submitHandler: function(form) {
            var options = {
                beforeSubmit: function() {
                    loadingParticipation.show();
                },
                success: function() {
	                dataLayer.push({
			            'event':'formSubmit',
			            'formName': 'gtm_participate',
						'formClass': 'gtm_form',
						'eventCategory': 'AJAX',
						'eventAction': 'actuib',
						'eventLabel': 'label'
					});
                    //showMessageParticipation('Merci! Votre email est envoyé.', 'success');
                    toastr.success($('#submit-message-participation').attr("success"), {
						"closeButton": false,
						"debug": false,
						"newestOnTop": false,
						"progressBar": false,
						"positionClass": "toast-bottom-full-width",
						"preventDuplicates": false,
						"onclick": null,
						"showDuration": "300",
						"hideDuration": "1000",
						"timeOut": "5000",
						"extendedTimeOut": "1000",
						"showEasing": "swing",
						"hideEasing": "linear",
						"showMethod": "fadeIn",
						"hideMethod": "fadeOut"
					});
					form.reset();
                    loadingParticipation.hide();
                },
                error: function() {
	                toastr.warning($('#submit-message-participation').attr("retry"), {
						"closeButton": false,
						"debug": false,
						"newestOnTop": false,
						"progressBar": false,
						"positionClass": "toast-bottom-full-width",
						"preventDuplicates": false,
						"onclick": null,
						"showDuration": "300",
						"hideDuration": "1000",
						"timeOut": "5000",
						"extendedTimeOut": "1000",
						"showEasing": "swing",
						"hideEasing": "linear",
						"showMethod": "fadeIn",
						"hideMethod": "fadeOut"
					})
                    //showMessageParticipation('Désolé, votre email n\'a pas pu être envoyé. Veuillez essayer plus tard.', 'failure');
                    loadingParticipation.hide();
                }
            };
            $(form).ajaxSubmit(options);
        },
        invalidHandler: function() {
            //showMessageParticipation();
            toastr.error($('#submit-message-participation').attr("failed"), {
				"closeButton": false,
				"debug": false,
				"newestOnTop": false,
				"progressBar": false,
				"positionClass": "toast-bottom-full-width",
				"preventDuplicates": false,
				"onclick": null,
				"showDuration": "300",
				"hideDuration": "1000",
				"timeOut": "5000",
				"extendedTimeOut": "1000",
				"showEasing": "swing",
				"hideEasing": "linear",
				"showMethod": "fadeIn",
				"hideMethod": "fadeOut"
			})
        },
        errorPlacement: function(error, element) {
			toastr.error($(error).html(), {
				"closeButton": false,
				"debug": false,
				"newestOnTop": false,
				"progressBar": false,
				"positionClass": "toast-bottom-full-width",
				"preventDuplicates": false,
				"onclick": null,
				"showDuration": "300",
				"hideDuration": "1000",
				"timeOut": "5000",
				"extendedTimeOut": "1000",
				"showEasing": "swing",
				"hideEasing": "linear",
				"showMethod": "fadeIn",
				"hideMethod": "fadeOut"
			})
	   	}
    });


});


	/**
	*
	*	tooltips
	*
	*/
	
$(document).ready(function() {
	if($('#gtm_model_las').length > 0) {
		$('#gtm_model_las').tipsy({
			gravity: 's',
			fade: true
		});	
	}
});
	



