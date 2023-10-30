<?php
session_start(); // Inicie a sessão para rastrear as visitas

$arquivo_log = 'log_visitas.txt'; // Arquivo de log para IP e data/hora

// Resto do código de rastreamento
$ip = $_SERVER['REMOTE_ADDR'];
$data_hora = date('Y-m-d H:i:s');
$visitas_detalhadas = "IP: $ip - Data/Hora: $data_hora - Página visitada: " . $_SERVER['REQUEST_URI'];

// Salva as informações no arquivo de log
file_put_contents($arquivo_log, $visitas_detalhadas . PHP_EOL, FILE_APPEND);

// Resto do conteúdo da página
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Flaticon CSS -->
  <link rel="stylesheet" href="assets/fonts/flaticon.css">
  <!-- BoxIcons Min CSS -->
  <link rel="stylesheet" href="assets/css/boxicons.min.css">
  <!-- Animate Min CSS -->
  <link rel="stylesheet" href="assets/css/animate.min.css">
  <!-- Owl Carousel Min CSS -->
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
  <!-- Magnific Popup CSS -->
  <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
  <!-- Odometer CSS -->
  <link rel="stylesheet" href="assets/css/odometer.min.css">
  <!-- Meanmenu CSS -->
  <link rel="stylesheet" href="assets/css/meanmenu.min.css">
  <!-- Style CSS -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <!-- Theme Dark CSS -->
  <link rel="stylesheet" href="assets/css/theme-dark.css">
  <!-- Theme Dark CSS -->
  <link rel="stylesheet" href="assets/css/theme-dark.css">
  <!--icon-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!--Aleatorio-->
  <link rel="stylesheet" href="../maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <title>Erro 404 - Página não encontrada</title>

    <!-- About CSS --> 
    <link rel="stylesheet" href="assets/css/pages-css/about.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/logos/icon-PriMax.ico">

</head>
<body>
    <div class="moon"></div>
<div class="moon__crater moon__crater1"></div>
<div class="moon__crater moon__crater2"></div>
<div class="moon__crater moon__crater3"></div>

<div class="star star1"></div>
<div class="star star2"></div>
<div class="star star3"></div>
<div class="star star4"></div>
<div class="star star5"></div>

<div class="error">
  <div class="error__title">404</div>
  <div class="error__subtitle">Hmmm... Página não encontrada</div>
  <div class="error__description">Verifique se digitou o endereço corretamente ou retorne à 
    <div></div>pagina inicial</div>

  <button class="error__button error__button--active" onclick="window.location.href='index.html'">Página inicial</button>
<button class="error__button" onclick="window.location.href='contact.html'">Contato</button>

</div>

<div class="astronaut">
  <div class="astronaut__backpack"></div>
  <div class="astronaut__body"></div>
  <div class="astronaut__body__chest"></div>
  <div class="astronaut__arm-left1"></div>
  <div class="astronaut__arm-left2"></div>
  <div class="astronaut__arm-right1"></div>
  <div class="astronaut__arm-right2"></div>
  <div class="astronaut__arm-thumb-left"></div>
  <div class="astronaut__arm-thumb-right"></div>
  <div class="astronaut__leg-left"></div>
  <div class="astronaut__leg-right"></div>
  <div class="astronaut__foot-left"></div>
  <div class="astronaut__foot-right"></div>
  <div class="astronaut__wrist-left"></div>
  <div class="astronaut__wrist-right"></div>
  
  <div class="astronaut__cord">
    <canvas id="cord" height="500px" width="500px"></canvas>
  </div>
  
  <div class="astronaut__head">
    <canvas id="visor" width="60px" height="60px"></canvas>
    <div class="astronaut__head-visor-flare1"></div>
    <div class="astronaut__head-visor-flare2"></div>
  </div>
</div>
    <h1>Erro 404</h1>
    <p>Página não encontrada</p>
    <p>Lamentamos, a página que você está procurando não foi encontrada.</p>
    <p>Verifique se digitou o endereço corretamente ou retorne à <a href="/">página inicial</a>.</p>

     <!-- About JS -->
     <script src="assets/js/about.js"></script>

</body>
</html>
