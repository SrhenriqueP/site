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


<!doctype html>
<html lang="pt-BR">

<head>
        <!-- Required Meta Tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/whatsapp.css">
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

       
       
        <!-- Title -->
        <title>Contato - PriMAX - Gestao & Tecnologica</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/images/logos/icon-PriMax.ico">
    </head>

    <body>
        <!-- Preloader Start -->
        <div class="preloader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="spinner">
                        <div class="double-bounce1"></div>
                        <div class="double-bounce2"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader End -->
        
        <!-- Top Header Start -->
        <header class="top-header top-header-bg">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-sm-7">
                        <div class="header-left">
                            <ul>
                                <li>
                                    <i class='flaticon-phone-call'></i>
                                    <a href="tel:+551632319194">+55 (16) 3231-9194</a>
                                </li>
                                <li>
                                    <i class='flaticon-email'></i>
                                    <a href="mailto:atendimento@primaxonline.com.br">atendimento@primaxonline.com.br</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-5">
                        <div class="header-right">
                            <ul>
                                <li>
                                    <a href="index.php" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php" target="_blank">
                                        <i class='bx bxl-instagram'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php" target="_blank">
                                        <i class='bx bxl-twitter' ></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php" target="_blank">
                                        <i class='bx bxl-youtube'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Top Header End -->


        <div class="navbar-area">
            <div class="mobile-responsive-nav">
                <div class="container-fluid">
                    <div class="mobile-responsive-menu">
                        <div class="logo">
                            <a href="index.php">
                                <img src="assets/images/logos/Logo_Primax.png" class="logo-one" alt="Logo">
                                <img src="assets/images/logos/Logo_PrimaxTWO.png" class="logo-two" alt="Logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        
             <!-- Menu For Desktop Device -->
        <div class="desktop-nav nav-area">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light ">
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/images/logos/Logo_Primax_desk.png" class="logo-one" alt="Logo">
                        <img src="assets/images/logos/Logo_PrimaxTWO _desk.png" class="logo-two" alt="Logo">
                    </a>
    
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">

                            <br>
                            <div style="margin-left: auto;">
                                <div class="nav-btn mobile">
                                    <a href="https://www.primaxonline.com.br/logon/index.php" class="default-btn border-radius-5" target="_blank">Acesso ao sistema</a>
                                </div>
                            </div>
                            
                            <br>

                            <li class="nav-item">
                                <a href="index.php" class="nav-link active">
                                    <i class="fa fa-home"></i>
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="quemsomos.php" class="nav-link">
                                    Quem Somos
                                </a>
                            </li>
                            
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    <i class="fa fa-folder-open"></i>
                                    Sistemas
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="arrecadação.php" class="nav-link">Arrecadação</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="bI.php" class="nav-link">BI - Inteligência empresarial</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="controle.php" class="nav-link">Controle interno</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="desenvolvimento.php" class="nav-link">Desenvolvimento Social</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="fiscal.php" class="nav-link">Fiscal</a>
                                    </li>
                                    <li class="nav-item">
                                        <li><a href="Jurídico.php" class="nav-link">Jurídico</a></li>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ouvidoria.php" class="nav-link">Ouvidoria</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="download.php" class="nav-link">
                                   Download
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="treinamento.php" class="nav-link">
                                    Treinamento
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.php" class="nav-link">
                                    <i class="material-icons align-middle">phone</i>
                                    Contato
                                </a>
                            </li>

                        </ul>
                                <div style="margin-left: auto;">
                                <div class="nav-btn desktop">
                                    <a href="https://www.primaxonline.com.br/logon/index.php" class="default-btn border-radius-5" target="_blank">Acesso ao sistema</a>
                                </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
        
        <!-- Menu Para Voltar a pagina inicial -->
        <div class="inner-banner inner-bg1" style="background: url('images/inner-banner12.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="inner-title" style="text-align: center; display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <h3 style="margin: 0;">CONTATO</h3>
                    </div>
                    <ul class="menu" style="margin: 0;">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li><span class="contact-menu">Contato</span></li>
                    </ul>
                </div>
            </div>
        </div>
        
        
    
<!-- Menu Para Voltar a pagina inicial End -->

        <!-- Banner Area -->
        <div class="banner-area">
            <div class="container-fluid">
                <div class="row align-items-center justify-align-center">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <br>
                            <h1 class="wow animate__animated animate__fadeInLeft" data-wow-delay="00ms" data-wow-duration="1000ms">Mande sua mensagem!</h1>
                            <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">Estamos dedicados a oferecer atendimento de qualidade, seja por telefone, e-mail ou chat. Se preferir uma abordagem mais pessoal, podemos agendar uma reunião com um de nossos consultores.
                            </p>
                            <br>
                            <div class="banner-btn wow animate__animated animate__fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms">
                                <a href="#" class="default-btn border-radius-5">Digite suas informaçoes de contato</a>
                    
                            </div>
                        </div>
                    </div>        
                         
                    <div class="container">
                        <div class="row">
                          <div class="grid-8" data-aos="fade-right">

                          <!-- FORMULÁRIO -->
                          <form id="form-contato" action="index.php" method="post" class="form-validation form-contato wow animate__animated animate__fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms">
                            
                            <br><br>
                                             <!-- Nome -->
                            <div class="row">
                              <div class="grid-6 grid-m-12 grid-s-12 campo-container">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" id="nome" maxlength="255" class="campo" placeholder="Digite seu nome" required>
                              </div>
                      
                              <div class="grid-6 grid-m-12 grid-s-12 campo-container">
                                <label for="email">E-mail</label>
                                <input type="email" name="email" id="email" maxlength="255" class="campo" placeholder="Digite seu e-mail" required>
                              </div>
                            </div>

                                                      <!-- telefone -->

                            <div class="row">
                                <div class="grid-6 grid-m-12 grid-s-12 campo-container">
                                        <label for="telefone">Telefone</label>
                                        <input type="tel" name="telefone" id="telefone" class="campo telefone" placeholder="Digite seu telefone" oninput="limitarTelefone(this)" required>
            
                                    </div>

                                                <!-- Assunto -->

                              <div class="grid-6 grid-m-12 grid-s-12 campo-container">
                                <label for="assunto">Assunto</label>
                                <input type="text" name="assunto" id="assunto" maxlength="255" class="campo" placeholder="Digite um assunto" required>
                              </div>
                            </div>
                      
                                            <!-- Mensagem -->

                            <div class="campo-container">
                                <label for="mensagem">Mensagem</label>
                                <textarea name="mensagem" id="mensagem" maxlength="1000" class="campo" rows="4" placeholder="Digite sua mensagem" required></textarea>
                                <div id="mensagem-count">0/1000</div>
                              </div>
                              
                      
                            <div class="recaptcha-container">
                              <div class="recaptcha-el" data-form="form-contato" data-key="6LfW3FkcAAAAAKjT7dn6CKdxtzz3rtL20qyZ5AsY"></div>
                            </div>
                      
                            <div class="banner-btn wow animate__animated animate__fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms">
                                <button type="submit" id="enviar" class="default-btn border-radius-5">Enviar</button>
                              </div>
                              
                          </form>
                          <!-- //FORMULÁRIO -->
                        </div>


                        <div class="grid-4 contato-lateral" data-aos="fade-left">
                            <!-- CONTATO -->
                            <div class="contato-container wow animate__animated animate__fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms">
                              <div class="row contato-item">
                                <div class="grid-2 contato-item-icon">
                                </div>
                                <div class="grid-10">
                                  <h3><i class="fa fa-phone"></i> Telefone para Contato</h3>
                                  <p class="telefone wow animate__animated animate__fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">(16) 3231-9194</p>
                                </div>
                              </div>

                              <br>

                              <div class="row contato-item">
                                <div class="grid-2 contato-item-icon">
                                </div>
                                <div class="grid-10">
                                  <h3><i class='bx bxl-whatsapp'></i> WhatsApp</h3>
                                  <p class="telefone wow animate__animated animate__fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">(16) 99103-8606</p>
                                </div>
                              </div>

                              <br>

                              <div class="row contato-item">
                                <div class="grid-2 contato-item-icon">
                                </div>
                                <div class="grid-10">
                                  <h3><i class="fa fa-envelope"></i> E-mail</h3>
                                  <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">suporte@primaxonline.com.br</p>
                                </div>
                              </div>

                              <br>

                              <div class="row contato-item">
                                <div class="grid-2 contato-item-icon">
                                </div>
                                <div class="grid-10">
                                  <h3><i class='bx bx-map'></i> Endereço</h3>
                                  <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">R. Siqueira Campos, 535 - Centro
                                    Guariba/SP CEP: 14842-034</p>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                                                <!-- //CONTATO END -->

          <!----------- Footer ----------->
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <!-- Footer Box -->
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-box text-center">
                            <!-- Logo -->
                            <a href="index.php" class="logo">
                                <div class="img-box">
                                    <img src="./assets/images/logos/Logo_PrimaxTWO.png" alt="logo" class="w-100">
                                </div>
                                <br>
                            </a>
                            <div class="text-hight" style="text-align: left;">
                                <h3 style="color: white;">INFORMAÇÕES DE CONTATO</h3>
                                <br>
                                <strong>Telefone:</strong>
                                <br> 
                                (16) 3231-9194
                                <br>
                                <br>
                                <strong>WhatsApp:</strong>
                                <br> 
                                (16) 99103-8606
                                <br>
                                <br>
                                <strong>Endereço:</strong> 
                                <br>
                                R. Siqueira Campos, 535 - Centro - Guariba/SP CEP: 14842-034
                                <br>
                                <br>
                                <strong>Email:</strong>
                                <br> 
                                <span>suporte@primaxonline.com.br</span>
                                <br>
                                <br>
                                <strong>Horário atendimento:</strong>
                                <br> 
                                <span>Seg à Sex: 08:00 - 17:00</span>
                            </div>
                            
                            
                        </div>
                    </div>
                    

                            
                    <!-- Footer Links -->
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-links">
                            <h6 class="title">Acesso rápido</h6>
                            <ul class="p-0">
                                <li>
                                    <a href="index.php" class="links">
                                        <i class="fa fa-home"></i> Home
                                    </a>
                                </li>
                                <li>
                                    <a href="quemsomos.php" class="links">Sobre nós</a>
                                </li>

                                
                                <li class="nav-link-footer custom-dropdown-parent">
                                    <a href="javascript:void(0);">
                                        <i class="fa fa-folder-open"></i> Sistemas <i class="bx bx-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu custom-dropdown-menu">
                                        <li class="nav-item">
                                            <a href="arrecadação.php" class="nav-link">Arrecadação</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="bI.php" class="nav-link">BI - Inteligência empresarial</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="controle.php" class="nav-link">Controle interno</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="desenvolvimento.php" class="nav-link">Desenvolvimento Social</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="fiscal.php" class="nav-link">Fiscal</a>
                                        </li>
                                        <li class="nav-item">
                                            <li><a href="Jurídico.php" class="nav-link">Jurídico</a></li>
                                        </li>
                                        <li class="nav-item">
                                            <a href="ouvidoria.php" class="nav-link">Ouvidoria</a>
                                        </li>
                                    </ul>
                                </li>
                                
                            <br>
                                
                                <li>
                                    <a href="download.php" class="links">Download</a>
                                </li>
                                <li>
                                    <a href="treinamento.php" class="links">Treinamento</a>
                                </li>
                                <li>
                                    <a href="contact.php" class="links">
                                        <i class="fa fa-phone"></i> Contato
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>


       <!-- Footer Area -->
        <footer class="footer-area footer-area-bg">
            <div class="container">
              

            <div class="copyright-area">
                <div class="container">
                    <div class="copy-right-text text-center">
                        <p>
                            Copyright @<script>document.write(new Date().getFullYear())</script>  PriMAX Online. All Rights Reserved by 
                            <a href="https://www.primaxonline.com.br/logon/index.php" target="_blank">PriMAX Online</a> 
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->

									<!--whatsapp - Icon-->

            <div id="whatsappButton" class="whatsapp-button"></div>

											
			
<!-- Google tag (gtag.js) -->
<script async src="../www.googletagmanager.com/gtag/jsd7d2?id=G-30TN3W6HEX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-30TN3W6HEX');
</script>			
			
											
	</div>

    <!-- Mensagem -->

    <script>
        const mensagemTextarea = document.getElementById('mensagem');
const mensagemCount = document.getElementById('mensagem-count');

mensagemTextarea.addEventListener('input', function () {
  const mensagemLength = mensagemTextarea.value.length;
  mensagemCount.textContent = mensagemLength + '/1000';

  if (mensagemLength > 1000) {
    mensagemTextarea.value = mensagemTextarea.value.slice(0, 1000);
    mensagemCount.textContent = '1000/1000';
  }
});
    </script>

    <!-- Telefone -->

    <script>
        function limitarTelefone(elemento) {
          const valor = elemento.value.replace(/[^0-9]/g, ''); // Remove caracteres não numéricos
          elemento.value = valor.slice(0, 11); // Limita o valor ao número máximo de dígitos (11)
        }
        </script>



       <!-- Jquery Min JS -->
       <script src="assets/js/jquery.min.js"></script>

       <!-- whatsap JS -->
       <script src="assets/js/whatsapp.js"></script>

       <!-- Bootstrap Bundle Min JS -->
       <script src="assets/js/bootstrap.bundle.min.js"></script>
       <!-- Magnific Popup JS -->
       <script src="assets/js/magnific-popup.min.js"></script>
       <!-- Odometer JS -->
       <script src="assets/js/odometer.min.js"></script>
       <!-- Appear Min JS -->
       <script src="assets/js/appear.min.js"></script>
       <!-- Meanmenu JS -->
       <script src="assets/js/meanmenu.min.js"></script>
       <!-- Owl Carousel JS -->
       <script src="assets/js/owl.carousel.min.js"></script>
       <!-- Owl Carousel Thumbs JS -->
       <script src="assets/js/carousel-thumbs.js"></script>
       <!-- Wow Min JS -->
       <script src="assets/js/wow.min.js"></script>
       <!-- Ajaxchimp Min JS -->
       <script src="assets/js/ajaxchimp.min.js"></script>
       <!-- Form Validator Min JS -->
       <script src="assets/js/form-validator.min.js"></script>
       <!-- Contact Form JS -->
       <script src="assets/js/contact-form-script.js"></script>
       <!-- Custom  JS -->
       <script src="assets/js/custom.js"></script>
        <!-- Barra  JS -->
        <script src="assets/js/barra.js"></script>
        <!-- codigo DD+ -->
        <script src="caminho/para/inputmask.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
              Inputmask({ 
                mask: '+99 (999) 99999-9999', 
                placeholder: '_', 
                clearMaskOnLostFocus: false 
              }).mask('.telefone');
            });
          </script>
          
    </body>
</html>