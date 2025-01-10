function lakossagiForm() {
    var form = $('#lakossagi-hiteligenyles');
    $.ajax({
        method: "POST",
        url: "index.php?pg=lakossagi-hiteligenyles&ajax=1",
        dataType: "json",
        data: form.serializeArray(),
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