<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="js/fluxslider.js" type="text/javascript"></script>
<script src="js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>
<script src="js/view.js" type="text/javascript"></script>
<script src="js/jquery.validate.min.js" type="text/javascript"></script>

<script>

$(window).load(function() {

    $("#main ul li a").filter(function(){
    return this.href === location.href.replace(/#.*/, "");
}).addClass("active");

  $('#carousel').carouFredSel({
        items               : 1,
        direction           : "up",
        scroll : {
            items           : 1,
            easing          : "linear",
            duration        : 1000,                         
            pauseOnHover    : true
        }                   
    });

$(function(){
    // if browser not support transitions at all - we will display some warn message
    if (! flux.browser.supportsTransitions) {
        $('#warn').text('Flux Slider requires a browser that supports CSS3 transitions').show();
    }

    window.mf = new flux.slider('#slider', {
        autoplay: true,
        pagination: false,
        delay: 5000,
        transitions: ['blocks'],
        width:921,//$(window).width(),
        height:303//$(window).height()
        
        
    });

    // binding onclick events for our transitions
    $('.transitions').bind('click', function(event) {
        event.preventDefault();

        // we will inform member is any 3D transform not supported by browser
        if ($(event.target).closest('ul').is('ul#trans3d') && ! flux.browser.supports3d) {
            $('#warn').text("The '"+event.target.innerHTML+"' transition requires a browser that supports 3D transforms");
            $('#warn').animate({
              opacity: 'show'
            }, 1000, '', function() {
                $(this).animate({opacity: 'hide'}, 1000);
            });
            return;
        }

        // using custom transition effect
        window.mf.next(event.target.id);
    });

    $('#controls').bind('click', function(event) {
        event.preventDefault();

        var command = 'window.mf.'+event.target.id+'();';
        eval(command);
    });
});
    
});
</script>
