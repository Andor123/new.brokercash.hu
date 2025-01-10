function lakastakarekForm() {
    var forms = $('#szerzodes, #igenylo, #kedvezmenyezett, #befejezes');
    $.ajax({
        method: "POST",
        url: "index.php?pg=lakastakarek-penztar-online-szerzodeskotes&ajax=1",
        dataType: "json",
        data: forms.serializeArray(),
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