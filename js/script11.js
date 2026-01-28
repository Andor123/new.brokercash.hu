function calendarForm() {
    var selectedDate = $('.selected').attr('data-date');
    var form = new FormData($('#calendar')[0]);
    form.append('selectedDate', selectedDate);
    $.ajax({
        method: "POST",
        url: "index.php?pg=kapcsolat&ajax=2",
        dataType: "json",
        data: form,
        cache: false,
        contentType: false,
        processData: false,
        success: function (response) {
            console.log(response);
            $('#calendarSubmit').fadeOut(400, function() {
                $('#calendarSubmit').html(response.html).fadeIn();
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}