$( "#gridRadios1" ).on( "click", function() {
    $('#cen1').css('display', 'block');
    $('#cen2').css('display', 'none');
    $('#cen3').css('display', 'none');
} );

$( "#gridRadios2" ).on( "click", function() {
    $('#cen1').css('display', 'none');
    $('#cen2').css('display', 'block');
    $('#cen3').css('display', 'none');
} );

$( "#gridRadios3" ).on( "click", function() {
    $('#cen1').css('display', 'none');
    $('#cen2').css('display', 'none');
    $('#cen3').css('display', 'block');
} );