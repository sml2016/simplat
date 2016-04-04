$(document).ready(function() {

    // The height of the content block when it's not expanded
    var adjustheight = 180;

    $('.more-less').each(function() {
        var collapsedHeight = $(this).attr('collapsed-height');

        if (collapsedHeight) { 
            adjustheight = collapsedHeight; 
        }

        $(this).css('height', adjustheight).css('overflow', 'hidden');
        $(this).find('.more-block').css('height', adjustheight).css('overflow', 'hidden');
//        $(this).append('<span class="dotdotdot">...</span>');
        // Sets the .more-block div to the specified height and hides any content that overflows
//        $(".more-less .more-block").css('height', adjustheight).css('overflow', 'hidden');

    });

    // The section added to the bottom of the "more-less" div


    $('.readMoreButton').click(function () {

        $(this).parent().parent().find('.more-less').css('height', 'auto').css('overflow', 'visible');
        $(this).parent().parent().find('.more-block').css('height', 'auto').css('overflow', 'visible');
        $(this).parent().parent().find(".dotdotdot").css('display', 'none');

        $(this).toggle();
        $(this).parent().children('.readLessButton').toggle();
        return false;
    });

    $('.readLessButton').click(function () {
        var collapsedHeight = $(this).parent().parent().find('.more-less').attr('collapsed-height');
        collapsedHeight = collapsedHeight ? collapsedHeight : adjustheight;
        $(this).parent().parent().find('.more-block').css('height', collapsedHeight).css('overflow', 'hidden');
        $(this).parent().parent().find(".dotdotdot").css('display', 'block');

        $(this).toggle();
        $(this).parent().children('.readMoreButton').toggle();
        return false;
    });

    $(".adjust").toggle(function() {
/*            $(this).parents("div:first").find(".more-block").css('height', 'auto').css('overflow', 'visible');
            // Hide the [...] when expanded
            $(this).parents("div:first").find("p.continued").css('display', 'none');
            $(this).text(lessText);
        }, function() {
            $(this).parents("div:first").find(".more-block").css('height', adjustheight).css('overflow', 'hidden');
            $(this).parents("div:first").find("p.continued").css('display', 'block');
            $(this).text(moreText);
            */
    });

    /*
    var showlength = 100;
    
    $('.readMore').each(function() {
        var content = $.trim($(this).html());
        var showlengthTmp = $(this).attr('showlength');
        if (showlengthTmp) showlength = showlengthTmp;
 
        if(content.length > showlength) {
            var shortText = content.substr(0, showlength);
            var extraText = content.substr(showlength, content.length - showlength);
 
            var html = shortText + '<span class="extraText" style="display: none">' + extraText + '<span>';
 
            $(this).html(html);
        }
 
    });

    $('.readMoreLessButton').click(function () {
        $(this).parent().parent().children('.readMore').children('.extraText').toggle();
        $(this).parent().children('.readMoreButton').toggle();
        $(this).parent().children('.readLessButton').toggle();
        return false;
    });

    $('.readLessButton').click(function () {
        $(this).parent().parent().children('.readMore').children('.extraText').toggle();
        return false;
    });
*/
});