$( document ).ready(function() {
    setTimeout(
        function() {
            $('#car').animate({
                top: '100px',
                easing: 'easeout'
            }, 1000,  function() {
                $('html').addClass('active');
            });
        }, 500
    )
    
});