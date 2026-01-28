function gyorskolcsonForm() {
    var file = $('#dokumentum').prop('files')[0];
    var form = new FormData($('#gyorskolcson')[0]);
    form.append('dokumentum', file);
    $.ajax({
        method: "POST",
        url: "index.php?pg=gyorskolcson&ajax=1",
        dataType: "json",
        data: form,
        cache: false,
        contentType: false,
        processData: false,
        success: function (response) {
            console.log(response);
            $('#msgSubmit').fadeOut(400, function () {
                $('#msgSubmit').html(response.html).fadeIn();
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}