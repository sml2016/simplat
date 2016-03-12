$( document ).ready(function() {
    $('.confirmation').click(function(e) {
        e.stopPropagation();
        e.preventDefault(); // Prevent the href from redirecting directly
        var linkURL = $(this).attr("href");
        console.log(linkURL);
        swal({
            title: 'Are you sure?',   
            text: 'You will delete this user!',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Delete',
            cancelButtonText: 'Cancel',
            confirmButtonClass: 'confirm-class',
            cancelButtonClass: 'cancel-class',
            closeOnConfirm: false,
            closeOnCancel: true 
            }, function(isConfirm) {   
                if (isConfirm) {
                    window.location.href = linkURL;
                }
        });
    });

    $('.stopPropagation').click(function(e) {
        e.stopPropagation();
    });

    $('#daycarenumber').change(function() {
        if (this.value == 1)  {
            $('.childOneForm').show();
            $('.childTwoForm').hide();
        } else if (this.value == 2)  {
            $('.childOneForm').show();
            $('.childTwoForm').show();
        } else {
            $('.childOneForm').hide();
            $('.childTwoForm').hide();
        }
    });

    $('#chanePassword').change(function() {
        if (this.value == 0)  {
            $('#passwordFields').hide();
        } else {
            $('#passwordFields').show();
        }
    });
});
