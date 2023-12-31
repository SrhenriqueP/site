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
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Theme Dark CSS -->
        <link rel="stylesheet" href="assets/css/theme-dark.css">
        <!--icon-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

       
       <!-- Title -->
        <title> Treinamento - PriMax - Gestão & Tecnologia</title>

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
                        <h3 style="margin: 0;">Treinamento</h3>
                    </div>
                    <ul class="menu" style="margin: 0;">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li><span class="contact-menu">Treinamento</span></li>
                    </ul>
                </div>
            </div>
        </div>
    
<!-- Menu Para Voltar a pagina inicial End -->

        <!-- Banner Area Three -->
        <div class="banner-area-three">
            <div class="container-fluid">
                <div class="row align-items-center justify-align-center">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <h1 class="wow animate__animated animate__fadeInDown" data-wow-delay="00ms" data-wow-duration="1000ms">Serviço de treinamento</h1>
                            <p class="wow animate__animated animate__fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms">Nosso treinamento em gestão tecnológica é um mergulho profundo no mundo da inovação, capacitando os profissionais a liderar com excelência, dominar as mais recentes ferramentas e estratégias e impulsionar o sucesso da organização por meio do uso inteligente e eficaz da tecnologia.</p>
                            <div class="banner-btn wow animate__animated animate__fadeInDown" data-wow-delay="200ms" data-wow-duration="1000ms">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 pe-0">
                        <div class="banner-img-three wow animate__animated animate__fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms" data-speed="0.08">
                            <img src="assets/images/home-three/home-three-img3.jpg" alt="Banner Images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area Three End -->

        <!-- Pricing Area Start -->
<div class="pricing-area pricing-bg2 pt-100 pb-70">
    <div class="container">
      <div class="section-title text-center">
        <span class="sp-title2">Treinamento</span>
        <h2>Nosso treinamento em gestão é o impulso que você precisa para conquistar o sucesso profissional</h2>
      </div>
  
      <div class="row pt-45 justify-content-center">
        <div class="col-lg-4 col-sm-6">
          <div class="pricing-card">
            <div class="top">
            </div>
            <div class="price-icon">
              <img src="assets/images/price/coin.png" alt="Images">
            </div>
            <h3>Arrecadação</h3>
            <ul>
              <li><i class='bx bx-check-circle'></i> CIDADE ONLINE</li>
              <li><i class='bx bx-check-circle'></i> VAF - VALOR ADICIONADO FISCAL</li>
              <li><i class='bx bx-check-circle'></i> IPTU</li>
              <li><i class='bx bx-check-circle'></i> ALVARÁ ELETRÔNICO</li>
              <li><i class='bx bx-check-circle'></i> GERENCIAMENTO DE CEMITÉRIOS</li>
              <li><i class='bx bx-check-circle'></i> FISCALIZAÇÃO</li>
              <li><i class='bx bx-check-circle'></i> ISSQN - NFE</li>
              <li><i class='bx bx-check-circle'></i> ITBI</li>
              <li><i class='bx bx-check-circle'></i> PROTOCOLO</li>
              <li><i class='bx bx-check-circle'></i> TAXA</li>
              <li><i class='bx bx-check-circle'></i> ÁGUA ELETRÔNICA</li>
            </ul>
            <div class="price-btn-area text-center">
              <a href="arrecadação.php" class="price-btn">Veja mais informações</a>
            </div>
          </div>
        </div>
  
        <div class="col-lg-4 col-sm-6">
            <div class="pricing-card">
              <div class="top">
              </div>
              <div class="price-icon">
                <img src="assets/images/price/Fiscal.png" alt="Images">
              </div>
              <h3>Fiscal</h3>
              <ul>
                <li><i class='bx bx-check-circle'></i> PLANEJAMENTO (LDO, PPA E LOA)</li>
                <li><i class='bx bx-check-circle'></i> TESOURARIA</li>
                <li><i class='bx bx-check-circle'></i> ALMOXARIFADO</li>
                <li><i class='bx bx-check-circle'></i> CONTROLE DE FROTA DE VEÍCULOS</li>
                <li><i class='bx bx-check-circle'></i> ATIVO FIXO</li>
                <li><i class='bx bx-check-circle'></i> CONTABILIDADE</li>
                <li><i class='bx bx-check-circle'></i> RECURSOS HUMANOS</li>
                <li><i class='bx bx-check-circle'></i> FOLHA DE PAGAMENTO</li>
                <li><i class='bx bx-check-circle'></i> COMPRAS E LICITAÇÕES</li>
              </ul>
              <div class="price-btn-area text-center">
                <a href="fiscal.php" class="price-btn">Veja mais informações</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6">
            <div class="pricing-card">
              <div class="top">
              </div>
              <div class="price-icon">
                <img src="assets/images/price/Desenvolvimento social.png" alt="Images">
              </div>
              <h3>Desenvolvimento Social</h3>
              <ul>
                <li><i class='bx bx-check-circle'></i> EDUCAÇÃO</li>
                <li><i class='bx bx-check-circle'></i> ASSISTÊNCIA SOCIAL</li>
                <li><i class='bx bx-check-circle'></i> SAÚDE</li>
              </ul>
              <div class="price-btn-area text-center">
                <a href="desenvolvimento.php" class="price-btn">Veja mais informações</a>
              </div>
            </div>
          </div>

        <div class="col-lg-4 col-sm-6">
          <div class="pricing-card">
            <div class="top">
            </div>
            <div class="price-icon">
              <img src="assets/images/price/BI.png" alt="Images">
            </div>
            <h3>BI - Inteligência empresarial</h3>
            <ul>
              <li><i class='bx bx-check-circle'></i> BI - INTELIGÊNCIA EMPRESARIAL</li>
            </ul>
            <div class="price-btn-area text-center">
              <a href="bI.php" class="price-btn">Veja mais informações</a>
            </div>

            
          </div>
        </div>
  
        <div class="col-lg-4 col-sm-6">
          <div class="pricing-card">
            <div class="top">
            </div>
            <div class="price-icon">
              <img src="assets/images/price/Controle - interno.png" alt="Images">
            </div>
            <h3>Controle interno</h3>
            <ul>
              <li><i class='bx bx-check-circle'></i> CONTROLE INTERNO</li>
            </ul>
            <div class="price-btn-area text-center">
              <a href="controle.php" class="price-btn">Veja mais informações</a>
            </div>
          </div>
        </div>
  
  
        <div class="col-lg-4 col-sm-6">
          <div class="pricing-card">
            <div class="top">
            </div>
            <div class="price-icon">
              <img src="assets/images/price/Ouvidoria.png" alt="Images">
            </div>
            <h3>Jurídico</h3>
            <ul>
              <li><i class='bx bx-check-circle'></i> CONTROLE DE PROCESSOS JURIDICOS</li>
            </ul>
            <div class="price-btn-area text-center">
              <a href="Jurídico.php" class="price-btn">Veja mais informações</a>
            </div>
          </div>
        </div>
  
        <div class="col-lg-4 col-sm-6">
          <div class="pricing-card">
            <div class="top">
            </div>
            <div class="price-icon">
              <img src="assets/images/price/Juridico.png" alt="Images">
            </div>
            <h3>OUVIDORIA</h3>
            <ul>
              <li><i class='bx bx-check-circle'></i> OUVIDORIA</li>
            </ul>
            <div class="price-btn-area text-center">
              <a href="ouvidoria.php" class="price-btn">Veja mais informações</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Pricing Area End -->
  
      

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
                
                    
                    

                    <!-- Footer Links -->
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-links">
                            <h6 class="title">NOSSOS SERVIÇOS</h6>
                            <ul class="p-0">
                                <li><a href="arrecadação.php" class="links">Arrecadação</a></li>
                                <li><a href="bI.php" class="links">BI - Inteligência empresarial</a></li>
                                <li><a href="controle.php" class="links">Controle interno</a></li>
                                <li><a href="desenvolvimento.php" class="links">Desenvolvimento Social</a></li>
                                <li><a href="fiscal.php" class="links">Fiscal</a></li>
                                <li><a href="Jurídico.php" class="links">Jurídico</a></li>
                                <li><a href="ouvidoria.php" class="links">Ouvidoria</a></li>
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
                <a href="https://api.whatsapp.com/send?phone=551632319194&text=+SUPORTE%20ONLINE" target="_blank" class="float" aria-label="Botão para contato no WhatsApp">
                    <svg class="icon">
                        <path d="M.33,48.33,3.06,35.62A23.67,23.67,0,0,1,0,24,24.06,24.06,0,0,1,24.12,0h0a23.95,23.95,0,1,1,0,47.89,24.33,24.33,0,0,1-11-2.61ZM13.7,41.08l.67.36a20.3,20.3,0,0,0,9.74,2.49A20,20,0,1,0,4,24a19.78,19.78,0,0,0,2.89,10.3l.41.68L5.52,43Z" />
                        <path d="M34.67,31.75C34.22,33,32,34.21,31,34.31S30,35.12,24.5,33s-9-7.77-9.27-8.13S13,21.92,13,19.27a6.08,6.08,0,0,1,1.89-4.5,2,2,0,0,1,1.45-.67c.36,0,.72.05,1,.05s.77-.18,1.22.9,1.54,3.72,1.67,4a1,1,0,0,1,.05.95,3.53,3.53,0,0,1-.54.89c-.28.32-.58.71-.82.95s-.55.56-.24,1.09a16.48,16.48,0,0,0,3,3.73,14.93,14.93,0,0,0,4.37,2.68c.54.26.86.22,1.17-.14s1.36-1.58,1.72-2.12.72-.45,1.22-.26,3.17,1.47,3.71,1.74.9.41,1,.63A4.4,4.4,0,0,1,34.67,31.75Z" />
                    </svg>
                    <style>
                        .tooltip {
                            position: relative;
                            display: inline-block;
                        }
                    
                        .tooltip .tooltip-text {
                            visibility: hidden;
                            width: 200px;
                            background-color: #555;
                            color: #fff;
                            text-align: center;
                            border-radius: 5px;
                            padding: 5px;
                            position: absolute;
                            z-index: 1;
                            bottom: 125%;
                            left: 50%;
                            transform: translateX(-50%);
                            opacity: 0;
                            transition: opacity 0.3s;
                        }
                    
                        .tooltip:hover .tooltip-text {
                            visibility: visible;
                            opacity: 1;
                        }
                    
                        .tooltip::after {
                            content: "";
                            position: absolute;
                            top: 100%;
                            left: 50%;
                            margin-left: -5px;
                            border-width: 5px;
                            border-style: solid;
                            border-color: #555 transparent transparent transparent;
                        }
                    </style>
                    
                    <span class="tooltip">Clique aqui para falar conosco!
                    </span>
            
                </a>
                
                <style>
                    :root {
                        --icon-color: #fff;
                        --icon-hover: #fff;
                        --background-color: #00c800;
                        --background-hover: #009600;
                    }
                
                    .icon {
                        width: 50px;
                        height: 50px;
                        transform: scale(0.6) translate(-20%, 20%);
                        fill: var(--icon-color);
                    }
                
                    .float {
                        position: fixed;
                        cursor: pointer;
                        width: 60px;
                        height: 60px;
                        bottom: 120px;
                        right: 30px;
                        transition: 1s;
                        background-color: var(--background-color);
                        border-radius: 50px;
                        animation: pulse 3s infinite;
                        z-index: 9000;
                    }
                
                    .float:hover {
                        background-color: var(--background-hover);
                    }
                
                    .float:hover .icon {
                        fill: var(--icon-hover);
                    }
                
                    .tooltip {
                        position: absolute;
                        bottom: 10px;
                        left: -120%;
                        transform: translateX(-50%);
                        background-color: #000;
                        color: #fff;
                        padding: 4px 15px;
                        border-radius: 10px;
                        font-size: 14px;
                        opacity: 0;
                        transition: opacity 0.3s ease;
                    }
                
                    .float:hover .tooltip {
                        opacity: 3;
                    }
                </style>
			
			<!-- Google tag (gtag.js) -->
<script async src="../www.googletagmanager.com/gtag/jsd7d2?id=G-30TN3W6HEX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-30TN3W6HEX');
</script>
											
	</div>

       <!-- Jquery Min JS -->
       <script src="assets/js/jquery.min.js"></script>
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

    </body>
</html>