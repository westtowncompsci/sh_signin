$( document ).ready(function load() {
        $('.half1').show();
        $('.half2').hide();
        $('.confirm').hide();
        $('.final').hide()
});

function test() {
    
    $('.half1 .button').on('click', e => {
        $('.half1').hide();
        $('.half2').show();
    });

    $('.half2 .button').on('click', e => {
        $('.half2').hide();
        $('.confirm').show();
    });

    $('.confirm .edit-button').on('click', e => {
        $('.confirm').hide();
        $('.half1').show();
    });

    $('.confirm .confirm-button').on('click', e => {
        $('.confirm').hide();
        $('.final').show();
    });

    $('.final .edit-button').on('click', e => {
        $('.final').hide();
        $('.half1').show();
    });
}