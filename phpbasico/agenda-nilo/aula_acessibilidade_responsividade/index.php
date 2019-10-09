<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Testando medias e acessibilidades</title>
<meta name="keywords" content="Acessível, responsivo, html5, css3">
<meta name="autor" content="técnico em informática para internet">
<meta name="description" content="Site exemplo de responsividade e acessibilidade">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="folha.css" type="text/css" title="default" />
<link rel="alternate stylesheet" type="text/css" href="contraste.css" title="contraste" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="acessibili.js"></script>
</head>
<body>
<div class="acessibilidade">
  <ul>
    <li><a href="#conteudo">Ir para o conteúdo</a></li>
    <li><a href="#" onclick="setActiveStyleSheet('contraste'); return false;" >Contraste</a></li>    <li><a href="#" onclick="setActiveStyleSheet('default'); return false;" >Normal</a></li>
    <li><a class="inc-font" title="Aumentar fonte" href="#"> Aumentar fonte</a></li>
    <li><a class="res-font" title="Tamanho normal da fonte" href="#"> Tamanho original</a></li>
    <li><a class="dec-font" title="Diminuir fonte" href="#"> Diminuir fonte</a></li>
  </ul>
</div>
<header>topo</header>
<nav>
  <ul>
    <li1><a href="index.php">home</a></li1>
    <li2><a href="empresa.php">empresa</a></li2>
    <li3><a href="localiza.php">localização</a></li3>
    <li4><a href="fale.php">fale conosco</a></li4>
  </ul>
</nav>
<main>
  <article><a name="conteudo"></a>conteudo principal</article>
  <aside>
    <h1>link's</h1>
  </aside>
  <div class="quebra"></div>
</main>
<footer>
  <section class="rodape"></section>
  <section class="rodape"></section>
</footer>
</body>
</html>