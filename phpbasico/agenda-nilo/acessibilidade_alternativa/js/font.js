var $btnAumentar = $("#btnAumentar");
var $btnDiminuir = $("#btnDiminuir");
var $btnPadrao = $("#btnPadrao");
var $elemento = $("html");
var $padrao = obterTamnhoFonte();

function obterTamnhoFonte() {
  return parseFloat($elemento.css('font-size'));
}

$btnAumentar.on('click', function() {
  $elemento.css('font-size', obterTamnhoFonte() + 1);
});

$btnDiminuir.on('click', function() {
  $elemento.css('font-size', obterTamnhoFonte() - 1);
});

$btnPadrao.on('click', function() {
  $elemento.css('font-size', $padrao);
});