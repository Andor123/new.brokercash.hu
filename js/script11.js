function calendarForm() {
    var form = $('calendar');
    $.ajax({
        method: "POST",
        url: "index.php?pg=kapcsolat&ajax=2",
        dataType: "json",
        data: form.serializeArray(),
        success: function (response) {
            console.log(response);
            $('calendarSubmit').fadeOut(400, function() {
                $('calendarSubmit').html(response.html).fadeIn();
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}