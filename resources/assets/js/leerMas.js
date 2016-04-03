$(document).ready(function() {
    var showlength = 100;
    
    $('.readMore').each(function() {
        var content = $(this).html();
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
});