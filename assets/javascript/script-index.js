var UNIDADE_SELECIONADA;

function selecionarUnidade(){
    UNIDADE_SELECIONADA = $('#unidade').val()
    $('#section-select-unidade').fadeOut(function() {
        $('#section-main').fadeIn()
        $('#header').removeClass('opacity-0')
    })
}