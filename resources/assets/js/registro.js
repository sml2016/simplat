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
