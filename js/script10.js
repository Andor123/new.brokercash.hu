function calculatorForm() {
    var form = $('#calculator');
    $.ajax({
        method: "POST",
        url: "index.php?pg=home_page&ajax=2",
        dataType: "json",
        data: form.serializeArray(),
        success: function (response) {
            console.log(response);
            $('#msgSubmit3').fadeOut(400, function () {
                $('#msgSubmit3').html(response.html).fadeIn();
            });
            $('#calculator-container').show(400, function () {
                $('#calculator-result').html(response.calculatorResult);
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}