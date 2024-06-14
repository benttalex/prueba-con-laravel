$('form').submit(function (e) {
    e.preventDefault();
    $('strong').empty();

    var url_to = $(this).attr('action');

    var datos = new FormData(document.getElementById("form"));

    $.ajax({
        type: "POST",
        data: datos,
        url: url_to,
        dataType: 'json',
        contentType: false,
        processData: false,
        beforeSend: function(){
            $('.spinner-border').removeClass('d-none');
        },
        error: function (data) {
            var errors = JSON.parse(data.responseText);
            errors = errors.errors;
            for (let error in errors) {
                $('.spinner-border').addClass('d-none');
                $('#' + error).addClass('is-invalid');
                var id = "#" + error.replace(/(:|\.|\[|\]|,|=)/g, "\\$1") + "_error";
                $(id).html(errors[error]);
            }
        },
        success: function (data) {
            $('.spinner-border').addClass('d-none');
            if (data.state) {
                window.location.href = '/' + data.url;
            }

            if (data.message){
                console.log(data.message)
                alert(data.message);

                $('form')[0].reset();
            }
        }
    });
});
