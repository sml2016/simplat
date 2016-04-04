$(document).ready(function() {

    // The height of the content block when it's not expanded
    var adjustheight = 180;

    $('.collapsable').each(function() {
        var collapsedHeight = $(this).attr('collapsed-height');

        if (collapsedHeight) { 
            adjustheight = collapsedHeight; 
        }

        $(this).css('height', adjustheight).css('overflow', 'hidden');
    });

    $('.readMoreButton').click(function () {

        $(this).parent().parent().find('.collapsable').css('height', 'auto').css('overflow', 'visible');
        $(this).toggle();
        $(this).parent().children('.readLessButton').toggle();
        return false;
    });

    $('.readLessButton').click(function () {
        var collapsable = $(this).parent().parent().find('.collapsable');
        var collapsedHeight = collapsable.attr('collapsed-height');
        collapsedHeight = collapsedHeight ? collapsedHeight : adjustheight;
        collapsable.css('height', collapsedHeight).css('overflow', 'hidden');

        $(this).toggle();
        $(this).parent().children('.readMoreButton').toggle();
        return false;
    });
});