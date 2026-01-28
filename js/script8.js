function questionForm() {
    var form = $('#question');
    $.ajax({
        method: "POST",
        url: "index.php?pg=home_page&ajax=1",
        dataType: "json",
        data: form.serializeArray(),
        success: function (response) {
            console.log(response);
            $('#msgSubmit2').fadeOut(400, function () {
                $('#msgSubmit2').html(response.html).fadeIn();
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}