$(document).ready(function () {
    $('#header').removeClass('opacity-0')
    setTimeout(() => {
        $('#section-sala').fadeIn(500)
    }, 700);

    ajustarUnidadeHeader()
});