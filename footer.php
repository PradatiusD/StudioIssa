<!--<script src="http://studioissa.com/wp-content/themes/issa-studio/figmints.js"></script> -->


<script type="text/javascript">

var myDeck = jQuery('#slidedeck').slidedeck();

jQuery('a.goToSlide').click(function(event){
event.preventDefault();
var slideNumber = parseInt(jQuery(this).attr('href').replace(/.+#/, ''));
jQuery('dl.slidedeck-491').slidedeck().goTo(slideNumber);
});

jQuery('.processSort .processType > a').click(function() {
    jQuery(this).siblings('span').click();
  });

  jQuery('.processSort a').click(function() {
    var index = jQuery('.processSort span').index(this);
    
    jQuery('.processSort a').removeClass('active');
      jQuery(this).addClass('active');
    if(index > 1){
      index -= 4;
    }
    
      var element = jQuery('.processInfo');
      element.find('.processDetail').removeClass('active').eq(index).addClass('active'); 
    return false;
  });

</script>


<script>
  jQuery(document).ready(function($){
    //function to correctly provide height for panes
    function fixrevealHeight () {
            var pictureframeWidth = $('.pictureframe').width();
            $('a.reveal').height(pictureframeWidth/2.42);

    }
    // Call it on DOM ready
    fixrevealHeight();

    //And call it when browser resizes
    $(window).resize(function() {
      fixrevealHeight();
      // Also If browser width is greater than iphone size make sure 
      // that Services tab has the correct level of opacity
      if (document.body.clientWidth > 480) {
          $('#menu-item-508 a').css('opacity', 1);
          $('#header').css('height', '208px');
      } else {
          $('#menu-item-508 a').css('opacity', 0);
          $('#header').css('height','188px');
      }
    });

    // On the blog page, make the read more tags have title information
    // and below each post also have the correct meta data
    if (document.URL==="http://studioissa.com/blog/") {
      var postAmount = jQuery('.post').length;
      for (var i = 0; i < postAmount; i++) {
        var postObject = jQuery('.post').eq(i);
        var postinfoHTML = postObject.find('.post-info').html();
        postObject.find('.more-link').html('Read more...');
        postObject.find('.entry-content').append(postinfoHTML)
      };
    // Also place the blog title in the top, as pulled from the widget area
    var titleHTML = jQuery('#text-24').html();
    jQuery('#text-24').remove();
    jQuery('#inner').prepend(titleHTML);
    jQuery('#inner > .widget-wrap').eq(0).wrap('<div id="blogTitle">');

    }

    // Change section header colors when you click on their corresponding
    // text values on the services page
      var colorValues = ['#757f8c', '#5b544e', '#3a4341'];
      $('.goToSlide').click(function(){
          indexOf = $(this).parent().parent().index();
          $('.clipboard h3, .clipboard-first h3').css('color', colorValues[indexOf])
      })      

    // Turn opacity to zero on load
    $('#scroll-top span').css('opacity', 0)

    // Change opacity of up arrow as user scrolls down
    $(window).scroll(function () {
      var screenHeight = $(window).height();
      var htmlHeight = $(document).height();
      var currentPosition = window.pageYOffset;
      $('#scroll-top span').css('opacity', currentPosition/htmlHeight);
    });

    // Function to add client login and subscribe to log links at end of list
    $('#menu-header-navigation').append('<li class="PD-mobile"><a href="http://eepurl.com/z1VSL" data-fancybox-type="iframe" class="iframe fancybox" rel="fancybox">Subscribe to Our Blog</a></li><li class="PD-mobile"><a href="http://studioissa.com/client-login/">Client Login</a></li>');

    // Add Menu button
    $('#header').prepend('<div class="PD-mobile"><a href="#" class="menu-button"><img src="http://studioissa.com/wp-content/uploads/2013/06/nav-expand-icon.png"></a></div>');

    // Expand menu on click of it
    $(".menu-button").toggle(
      function () {
        $('#header').animate({height: '426px'}, 800);
        $('#menu-item-508 a').animate({opacity : 1}, 500);
      },
      function () {
        $('#header').animate({height: '188px'}, 800);
        $('#menu-item-508 a').animate({opacity : 0}, 500);
      }
    );
  });
</script>




<script>
  //<![CDATA[
    jQuery(document).ready(function() {
      
      jQuery('#yearbook li').each(function(){
        var jQuerya = jQuery(this).find('a');
        var jQueryinitial = jQuery(this).find('.initial');
        var jQueryhover = jQuery(this).find('.hover');
        jQuerya.hover(function(){
          jQueryinitial.hide();
          jQueryhover.show();
        }, function(){
          jQueryinitial.show();
          jQueryhover.hide();
        });
      });
    
      function mouseOverPortrait() {
        var jQueryportrait = jQuery(this);
        if (jQueryportrait.hasClass('kid')) {
          jQueryportrait.removeClass('kid').addClass('original');
        } else {
          jQueryportrait.mousemove(mouseMovePortrait);
        }
      }
      function mouseOutPortrait() {
        var jQueryportrait = jQuery(this);
        if (jQueryportrait.hasClass('original')) {
          jQueryportrait.removeClass('original').addClass('kid');
        } else {
          jQueryportrait.unbind("mousemove", mouseMovePortrait);
          removeDanceClasses(jQueryportrait);
        }
      }
      function removeDanceClasses(jQueryportrait) {
        jQueryportrait.removeClass('dance1').removeClass('dance2').removeClass('dance3');
      }
      function mouseMovePortrait(event) {
        var jQueryportrait = jQuery(this);
        var xOffset = event.pageX - jQueryportrait.offset().left;
        removeDanceClasses(jQueryportrait);
        var danceClass;
        if (xOffset >= 0) {
          danceClass = 'dance1';
        }
        if (xOffset >= 43) {
          danceClass = 'dance2';
        }
        if (xOffset >= 86) {
          danceClass = 'dance3';
        } 
        jQueryportrait.addClass(danceClass);
      }
      
      jQuery('.schoolportrait').hover(mouseOverPortrait, mouseOutPortrait);
      jQuery('#timemachine').click(function() {
        jQuery('.schoolportrait').each(function() {
          var jQueryportrait = jQuery(this);
          if (jQueryportrait.hasClass('kid')) {
            jQueryportrait.removeClass('kid');
          } else {
            jQueryportrait.addClass('kid');
          }
        });
      });
      
      
          jQuery('#timemachine').hover(mouseOverPortrait, mouseOutPortrait);
      jQuery('#timemachine').click(function() {
        jQuery('#timemachine').each(function() {
          var jQueryportrait = jQuery(this);
          if (jQueryportrait.hasClass('past')) {
            jQueryportrait.removeClass('past');
          } else {
            jQueryportrait.addClass('past');
          }
        });
      });
    
      
      setTimeout(function(){
        jQuery(".schoolportrait").each(function() {
          var danceTimeoutId;
          var jQueryschoolportrait = jQuery(this);
          function dance(jQueryportrait) {
            var randomDance = "dance" + (1 + Math.floor(Math.random() * 3));
            clearTimeout(danceTimeoutId);
            jQueryportrait.removeClass("dance1").removeClass("dance2").removeClass("dance3");
            jQueryportrait.addClass(randomDance);
            danceTimeoutId = setTimeout(function(){
              dance(jQueryportrait);
            },375 + Math.floor(Math.random()) * 375);
          }
          jQueryschoolportrait.bind("dance", function() {
            dance(jQueryschoolportrait);
          });
          jQueryschoolportrait.bind("stopdancing", function() {
            clearTimeout(danceTimeoutId);
            jQueryportrait.removeClass("dance1").removeClass("dance2").removeClass("dance3");
          });
        });
      }, 1550);
      
      var danceMode = false;
      var progress = [68, 65, 78, 67, 69];
      jQuery(document).bind('keydown',function(e){ 
        if (e.which == progress[0]) {
          progress.shift();
          if (progress.length == 0) {
            if (danceMode == false) {
              startParty();
            } else {
              stopParty();
            }
          }
        }
        setTimeout(function(){progress = [68, 65, 78, 67, 69]}, 2000);
      });
    

    
      var startParty = function(){
        danceMode = true;
        beats.play();
        jQuery('h3:contains("Customer Happiness")').last().text("i like turtles");
        setTimeout(function(){
          jQuery(".schoolportrait").trigger("dance");
        }, 1260);
      }
      var stopParty = function(){
        danceMode = false;
        jQuery(".schoolportrait").trigger("stopdancing");
      }
    });
  //]]>
</script>