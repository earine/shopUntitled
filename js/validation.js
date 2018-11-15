$().ready(function () {
    $('#email').inputmask('€ 999.999.999,99', {numericInput: true});
    $('#phone').inputmask("mask", {"mask": "(999) 999-9999"});
});