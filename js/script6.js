function cegalapitasForm() {
    var forms = $('#alapito, #alapitando-ceg, #kapcsolattarto, #befejezes');
    $.ajax({
        method: "POST",
        url: "index.php?pg=cegalapitas-online&ajax=1",
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