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
            var pictureframeWidth = jQuery('.pictureframe').width();
            jQuery('a.reveal').height(pictureframeWidth/2.42);

    }
    // Call it on DOM ready
    fixrevealHeight();

    //And call it when browser resizes
    $(window).resize(function() {
      fixrevealHeight();
    });

    // Change opacity of up arrow as user scrolls down
    jQuery(window).scroll(function () {
      var screenHeight = jQuery(window).height();
      var htmlHeight = jQuery(document).height();
      var currentPosition = window.pageYOffset;
      jQuery('#scroll-top span').css('opacity', currentPosition/htmlHeight);
    });

    // Function to add client login and subscribe to log links at end of list
    $('#menu-header-navigation').append('<li class="PD-mobile"><a href="http://eepurl.com/z1VSL" data-fancybox-type="iframe" class="iframe fancybox" rel="fancybox">Subscribe to Our Blog</a></li><li class="PD-mobile"><a href="http://studioissa.com/client-login/">Client Login</a></li>');

    // Add Menu button
    $('#header').prepend('<div class="PD-mobile"><a href="#" class="menu-button"><img src="http://studioissa.com/wp-content/uploads/2013/06/nav-expand-icon.png"></a></div>');

    // Expand menu on click of it
    jQuery(".menu-button").toggle(
      function () {
        jQuery('#header').animate({height: '426px'}, 800);
      },
      function () {
        jQuery('#header').animate({height: '140px'}, 800);
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