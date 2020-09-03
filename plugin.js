(function ( $ ) {
 
    $.fn.hello = function( options ) {
 
        // Default options
        var settings = $.extend({
            name: 'Ashwin Panbude',
            color: 'blue'
        }, options );
 
        // Apply options
        return this.append('Hello ' + settings.name + '!').css({ color: settings.color });
 
    };
 
}( jQuery ));