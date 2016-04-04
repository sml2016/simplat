/*
  Google maps
*/

function initialize()
{
  var mapProp = {
    center: new google.maps.LatLng(51.508742,-0.120850),
    zoom:7,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}

function loadScript()
{
  var script = document.createElement("script");
  script.type = "text/javascript";
  script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false&callback=initialize";
  document.body.appendChild(script);
}

$( document ).ready(function() {
  loadScript();
});
function RegistroInit() {

    $(document).ready(function() {

        (function setupNeedDayCareRadioButton () {
            var dayCareRadioChecked = $('input:radio[name=needsdaycare]:checked').val();
            if (dayCareRadioChecked == undefined) {
                $('#opciones_2').prop('checked', true);
                UpdateNeedsDayCare('no');
            } else {
                UpdateNeedsDayCare(dayCareRadioChecked);
            }
        })();

        $('input[type=radio][name=needsdaycare]').change(function() {
            UpdateNeedsDayCare(this.value);
        });

        $('#daycarenumber').change(function () {
            DayCareNumberUpdate(this.value);
        });

        function UpdateNeedsDayCare(value) {
            if(value == 'si') {
                DayCareNumberUpdate($('#daycarenumber').val());
            } else {
                $('.section3R').hide();
                $('.section4R').hide();
                $('.section5R').hide();
            }
        }

        function DayCareNumberUpdate(value) {
            $('.section3R').show();
            if (value == 0) {
                $('.section4R').hide();
                $('.section5R').hide();
            } else if (value == 1) {
                $('.section4R').show();
                $('.section5R').hide();
            } else if (value == 2) {
                $('.section4R').show();
                $('.section5R').show();
            }
        }
    });
}

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
//# sourceMappingURL=all.js.map
