const http        = window.location.protocol;
const domain_name = window.location.hostname;
const url         = `${http}//${domain_name}/`;
const log         = console.log;


$(document).ready(function() {
    $("[data-save]").keyup(function() {
        var local = $(this).attr('data-save');
        var valor = $(this).val();
        $.get(url + "ajax?local=" + local + "&valor=" + valor + "&save");
    });
    $("[add]").click(function() {
        var id = $(this).attr('add');
        $.get(url + "ajax?add=" + id);
        var itens = $('.itens_add').html();
        $('.itens_add').html(parseInt(itens) + 1);
        $('.alerta').slideDown(400).delay(1500).slideUp(400);
    });
    $("[cart-dell]").click(function() {
        var id = $(this).attr('cart-dell');
        $("." + id + "").fadeOut();
        var itens = $('.itens_add').html();
        $('.itens_add').html(parseInt(itens) - 1);
        $.get(url + "ajax?dell=" + id);
    });
    $("[data-save-cart]").keyup(function() {
        var id = $(this).attr('data-save-cart');
        var valor = $(this).val();
        $.get(url + "ajax?updata=" + id + "&valor=" + valor);
    });
});
$('.foto').click(function(event) {
    var url = $(this).attr('src');
    $('#photMuda').attr('src', url);
});
$('#send').click(function(event) {
    var recupera = $('#email').val();
    $.get(url + 'ajax?email=' + recupera);
    $('.enviado').html('<div class="col-md-6"><h6 class="participe">você ja esta participando :)</h6></div>')
});