  <?php
    $data1 = new DateTime( '2015-12-11' );
    $data2 = new DateTime( 'NOW' );
    $intervalo = $data1->diff( $data2 );
    //echo "Intervalo é de {$intervalo->y} anos, {$intervalo->m} meses e {$intervalo->d} dias"; 
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hoje é dia <?php echo $intervalo->d; ?> do mês <?php echo $intervalo->m; ?> do ano <?php echo $intervalo->y; ?>, depois do M1to AC-DC Antes de CENI, depois de CENI #M1TO #SPFC</title>
    <meta name="description" content="Antes de CENI, depois de CENI #M1TO #SPFC - Data depois do M1to" />
    <meta name="keywords" content="antescenidepoisceni, acdc, rogerio ceni, ceni, aposentadoria, mito, m1to, spfc, sao paulo, sao paulofc" />
    <meta http-equiv="Content-Language" content="pt-br" />
    <meta http-equiv="Cache-Control" content="" />
    <meta http-equiv="Pragma" content="" />
    <meta http-equiv="expires" content="1 day" />
    <meta name="robots" content="index,follow" />
    <meta name="copyright" content="Copyright © 2015 - http://antescenidepoisceni.com.br/ - Todos os Direitos" />
    <meta name="organization" content="antescenidepoisceni.com.br" />
    <meta name="location" content="Sao Paulo, Brazil" />
    <link href="img/favicon.ico" rel="icon" />
    <link rel="stylesheet" href="estilo.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <![endif]-->

    <!--Metas Facebook-->
    <meta property="og:locale" content="pt_BR">
    <meta property="og:url" content="http://antescenidepoisceni.com.br/">
    <meta property="og:title" id="compartilha" content="Hoje é dia <?php echo $intervalo->d; ?> do mês <?php echo $intervalo->m; ?> do ano <?php echo $intervalo->y; ?>, depois do M1to AC-DC Antes de CENI, depois de CENI #M1TO #SPFC">
    <meta property="og:site_name" content="http://antescenidepoisceni.com.br/">
    <meta property="og:description" content="Antes de CENI, depois de CENI #M1TO #SPFC - Data depois do M1to">
    <meta property="og:image" content="img/rc.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:type" content="website">
    <meta property="article:author" content="http://antescenidepoisceni.com.br/">
    <meta property="article:publisher" content="https://www.facebook.com/antescenidepoisceni">
    <meta property="article:section" content="Entretenimento">
    <meta property="article:tag" content="antescenidepoisceni, acdc, rogerio ceni, ceni, aposentadoria, mito, m1to, spfc, sao paulo, sao paulofc">
    <!--Metas Facebook-->

  </head>

  <body>

  <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId      : '1514477688846912',
        xfbml      : true,
        version    : 'v2.5'
      });
    };

    (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       js.src = "//connect.facebook.net/en_US/sdk.js";
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));
  </script>

  <div id="container">

    <div id="hashtag">
      <h1>#AntesDeCENIdepoisDeCENI</h1>
      <h2>#M1TO #RC #SPFC</h2> 
    </div>

    <div id="contador">
      <div id="dia">
        <span class="data">0<?php echo $intervalo->d; ?> /</span>
        <span class="nome">DIA</span>
      </div> 
      <div id="dia">
        <span class="data">00 /</span>
        <span class="nome">MÊS</span>
      </div> 
      <div id="dia">
        <span class="data">0000</span>
        <span class="nome">ANO</span>
      </div> 
    </div>

    <hr>
    <a href="http://www.facebook.com/sharer/sharer.php?u=http://antescenidepoisceni.com.br/" class="share-popup" target="_blank"><img src="img/face.png"></a>

    <hr>
    <div
      class="fb-like"
      data-share="true"
      data-width="450"
      data-show-faces="true">
    </div>


  </div>

  </body>

  <script src="script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-23230606-9', 'auto');
  ga('send', 'pageview');

</script>

</html>

