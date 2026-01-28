function kapcsolatForm() {
    var file = $('#dokumentum').prop('files')[0];
    var form = new FormData($('#kapcsolat')[0]);
    form.append('dokumentum', file);
    $.ajax({
        method: "POST",
        url: "index.php?pg=kapcsolat&ajax=1",
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