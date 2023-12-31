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
       
        <!-- Title -->
        <title> Download - PriMAX - Gestao & Tecnologica</title>

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
                    <h3 style="margin: 0;">Download</h3>
                </div>
                <ul class="menu" style="margin: 0;">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li><span class="contact-menu">Download</span></li>
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
                            <h1 class="wow animate__animated animate__fadeInLeft" data-wow-delay="00ms" data-wow-duration="1000ms">Download, Videos e Arquivos para dúvidas rápidas</h1>
                        </div>
                        <br>
                    </div>

                    <div class="col-lg-6">
                        <div class="banner-img wow animate__animated animate__fadeInDown" data-wow-delay="1200ms" data-wow-duration="1200ms" data-speed="0.08">
                            <div class="banner-img-box">
                                
                            </div>
                            
                            <div class="circle1"></div>
                            <div class="circle2"></div>
                            <div class="banner-img-shape">
                                <img src="assets/images/home-one/shape2.png" alt="Images">
                                <img src="assets/images/home-one/shape3.png" alt="Images">
                                <img src="assets/images/home-one/shape4.png" alt="Images">
                                <img src="assets/images/home-one/shape5.png" alt="Images">
                                <img src="assets/images/home-one/shape6.png" alt="Images">
                                <img src="assets/images/home-one/shape7.png" alt="Images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-shape">
                <img src="assets/images/home-one/shape1.png" alt="Banner Shape">
            </div>
        </div>
        <!-- Banner Area End -->


        <!-- About Area -->
       

        <div class="col-lg-6">
            <div class="about-content pl-20">
                <div class="section-title">
                    <span class="sp-title">Serviço 100% web</span>
                    <br>
                    <h2>Nosso serviço é deixar sua vida mais Fácil &amp; Profissional.</h2>
                    <p>
                        Abaixo, você encontrará arquivos em PDF e vídeos para auxiliá-lo na resolução de suas dúvidas.
                    </p>
              </div-->
              
                <ul class="about-list">
                    <li>
                        <li>
                            <br>
                            <a href="#" onclick="toggleOptions(event)">
                              <i class="flaticon-arrow-pointing-to-right"></i> Vídeos explicativos sobre como emitir Nota Fiscal Eletrônica (NF-e) para esclarecer suas dúvidas!
                            </a>
                            <ul class="options" style="display: none;">
                              <li><a href="https://www.dropbox.com/s/nztti3cmhym9kdd/Emissao%20Nota%20RPA.mp4?dl=0" target="_blank">Prestador do Lucro Presumido ou Lucro Real</a></li>
                              <li><a href="https://www.dropbox.com/s/0q4oz09dvztkr9v/Emissao%20Nota%20Simples%20Nacional.mp4?dl=0" target="_blank">Prestador do Simples Nacional</a></li>
                              <li><a href="https://www.dropbox.com/s/x96it5ey2ovwwj7/Emissao%20Nota%20MEI.mp4?dl=0" target="_blank">Prestador do MEI</a></li>
                            </ul>
                          </li>
                        
                          <li>
                            <br>
                            <a href="https://www.dropbox.com/s/xzcm3acou2jggpi/Cancelar%20Nota%20Fiscal.mp4?dl=0" target="_blank">
                              <i class="flaticon-arrow-pointing-to-right"></i>Vídeo explicativo sobre como cancelar uma Nota Fiscal para esclarecer sua dúvidas!
                            </a>
                          </li>      

                      <li>
                        <br>
                        <a href="https://www.dropbox.com/s/iipyqx2wf4via4z/Carta%20de%20Corre%C3%A7%C3%A3o%20NFe.mp4?dl=0" target="_blank">
                          <i class="flaticon-arrow-pointing-to-right"></i> Vídeo explicativo sobre como emitir carta de correção de nota fiscal para esclarecer sua dúvidas!
                        </a>
                      </li>       

                      <li>
                        <br>
                        <a href="https://www.dropbox.com/s/7dhe8nc3c3slt2q/Cadastro%20Destinatario-tomador.mp4?dl=0" target="_blank">
                          <i class="flaticon-arrow-pointing-to-right"></i> Vídeo explicativo sobre como cadastrar um destinatário/tomador para esclarecer suas dúvidas!
                        </a>
                      </li>  
                      
                      <!--li>
                        <a href="https://wa.me/5516991038606" target="_blank">
                          <i class="flaticon-arrow-pointing-to-right"></i> Atualizar cadastro do Tomador
                        </a>
                      </li>  

                      <li>
                        <a href="https://wa.me/5516991038606" target="_blank">
                          <i class="flaticon-arrow-pointing-to-right"></i> Atualizar cadastro do Prestador
                        </a>
                      </li--->  

                      <li>
                        <br>
                        <a href="https://www.dropbox.com/s/tv2xm0aa1n5l4b7/Inserir%20Logomarca%20na%20Nota.mp4?dl=0" target="_blank">
                          <i class="flaticon-arrow-pointing-to-right"></i> Vídeo explicativo sobre como inserir logo da empresa na nota fiscal para esclarecer suas dúvidas!
                        </a>
                      <li>
                        <br>
                        <a href="https://www.dropbox.com/s/2jfi3bjnh9lhngq/Emiss%C3%A3o%20de%20Boleto.mp4?dl=0" target="_blank">
                          <i class="flaticon-arrow-pointing-to-right"></i> Vídeo explicativo sobre como imprimir Boleto de Pagamento para esclarecer suas dúvidas!
                        </a>
                      </li>  

                      <!---li>
                        <a href="https://wa.me/5516991038606" target="_blank">
                          <i class="flaticon-arrow-pointing-to-right"></i>  Senha Bloqueada
                        </a>
                      </li--->  

                      <li>
                        <br>
                        <a href="#" onclick="toggleOptions(event)">
                          <i class="flaticon-arrow-pointing-to-right"></i> Vídeos e arquivos explicativos sobre declaração de serviços tomados.
                        </a>
                        <ul class="options" style="display: none;">
                            <li><a href="https://www.dropbox.com/s/avg0asihhjgla7w/Declara%C3%A7%C3%A3o%20de%20Tomador.mp4?dl=0" target="_blank"> Quando o Prestador NÃO é do Simples Nacional</a></li>
                            
                            <li><a href="https://www.dropbox.com/s/u7ry7szuzy4628j/Declara%C3%A7%C3%A3o%20Tomador%20com%20Prest.%20S.N.mp4?dl=0" target="_blank">Quando o Prestador É do Simples Nacional</a></li>
                            <li><a href="https://www.dropbox.com/s/76fcqxzj2n904by/layout_cadastro_prestadores.txt?dl=0" target="_blank">Leiaute para importação de arquivo txt do cadastro de Prestadores</a></li>
                            <li><a href="https://www.dropbox.com/s/f6fz83f1nxln2r8/layout_tomador.txt?dl=0" target="_blank">Leiaute para importação de arquivo txt das notas de Serviços Tomados</a></li>
                            <li><a href="https://www.dropbox.com/s/42bg93ltw2xdiff/Importar%20Declara%C3%A7%C3%B5es%20de%20Servi%C3%A7os%20Tomados.mp4?dl=0" target="_blank">Como importar arquivo de declarações de serviços tomados</a></li>
                          </ul>
                      </li>  

                      <li>
                        <br>
                        <a href="https://www.dropbox.com/s/8x89cn8tpdrijob/Alterar%20Senha%20de%20Acesso.mp4?dl=0" target="_blank">
                          <i class="flaticon-arrow-pointing-to-right"></i> Vídeo explicativo sobre como "alterar minha senha" para esclarecer suas dúvidas!
                        </a>
                      </li>  

                      <li>
                        <br>
                        <a href="https://www.dropbox.com/s/a3z83txebzaaj5o/Faturamento%20Bruto%20Informado%20Errado%2C%20como%20corrigir.mp4?dl=0" target="_blank">
                          <i class="flaticon-arrow-pointing-to-right"></i> Vídeo explicativo sobre "faturamento bruto informado errado, como corrigir?"
                        </a>
                      </li>  


                      <li>
                        <br>
                        <a href="#" onclick="toggleOptions(event)">
                          <i class="flaticon-arrow-pointing-to-right"></i> Vídeos explicativos sobre como emitir Nota Fiscal via WEBSERVICE.
                        </a>
                        <ul class="options" style="display: none;">
                          <li>
                            <a href="javascript:void(0)" onclick="toggleSubOptions(event); event.stopPropagation();">Prestador do Estado de São Paulo click aqui!</a>
                            <ul class="sub-options" style="display: none;">
                              <li><a href="https://www.dropbox.com/s/pzpofcfo6kmtveu/LAYOUT%20WSNFSE-SP.pdf?dl=0" target="_blank">Link 01</a></li>
                              <li><a href="https://www.dropbox.com/s/g8kfomhghu4d4dk/C%C3%93DIGOS%20MUNIC%C3%8DPIOS.txt?dl=0" target="_blank">Link 02</a></li>
                              <li><a href="https://www.dropbox.com/s/efud1np4tgslwr7/modelo%20xml%20envio%20nfse-fora%20do%20simples%20nacional.xml?dl=0" target="_blank">Link 03</a></li>
                              <li><a href="https://www.dropbox.com/s/vexk3xd4ovpvfsf/Modelo%20xml%20Consulta%20e%20de%20Cancelamento.pdf?dl=0" target="_blank">Link 04</a></li>
                            </ul>
                          </li>

                          <li>
                            <br>
                            <a href="javascript:void(0)" onclick="toggleSubOptions(event); event.stopPropagation();">Prestador do Estado do Rio de Janeiro</a>
                            <ul class="sub-options" style="display: none;">
                              <li><a href="https://www.dropbox.com/s/syr4dqsq04xb9pu/LAYOUT%20WSNFSE-RJ.pdf?dl=0" target="_blank">Link 01</a></li>
                              <li><a href="https://www.dropbox.com/s/g8kfomhghu4d4dk/C%C3%93DIGOS%20MUNIC%C3%8DPIOS.txt?dl=0" target="_blank">Link 02</a></li>
                              <li><a href="https://www.dropbox.com/s/efud1np4tgslwr7/modelo%20xml%20envio%20nfse-fora%20do%20simples%20nacional.xml?dl=0" target="_blank">Link 03</a></li>
                              <li><a href="https://www.dropbox.com/s/vexk3xd4ovpvfsf/Modelo%20xml%20Consulta%20e%20de%20Cancelamento.pdf?dl=0" target="_blank">Link 04</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      
                      <script>
                      
                        function toggleSubOptions(event) {
                          const subOptions = event.target.nextElementSibling;
                          subOptions.style.display = subOptions.style.display === 'none' ? 'block' : 'none';
                        }
                      </script>
                      
                        

                      <li>
                        <br>
                        <a href="#" onclick="toggleOptions(event)">
                          <i class="flaticon-arrow-pointing-to-right"></i> Vídeo explicativo sobre "Declaração de Serviços Prestados" tirando sua dúvidas!
                        </a>
                        <ul class="options" style="display: none;">
                            <li><a href="https://www.dropbox.com/s/q2hjhu8prxp3qgf/Declara%C3%A7%C3%A3o%20de%20Prestador.mp4?dl=0" target="_blank">Prestador do Lucro Presumido ou Lucro Real</a></li>
                            <li><a href="https://www.dropbox.com/s/vj6zwj5yt561r8q/Declara%C3%A7%C3%A3o%20de%20Prestador%20Simples%20Nacional.mp4?dl=0" target="_blank">Prestador do Simples Nacional</a></li>
                          </ul>
                      </li>  

                      <li>
                        <br>
                        <a href="https://www.dropbox.com/s/mlsucvwmjyjb4qn/Cadastro%20de%20Tomador%20Estrangeiro.mp4?dl=0" target="_blank">
                          <i class="flaticon-arrow-pointing-to-right"></i>  Vídeo explicativo sobre como cadastrar um destinatário/tomador ESTRANGEIRO!
                        </a>
                      </li>  

                      <li>
                        <br>
                        <a href="https://www.dropbox.com/s/byqr18sllnljii0/Baixar%20XML%20das%20Notas%20Fiscais.mp4?dl=0" target="_blank">
                          <i class="flaticon-arrow-pointing-to-right"></i> Vídeo explicativo sobre como Baixar XML das Notas Fiscais!
                        </a>
                      </li>  

                      <li>
                        <br>
                        <a href="#" onclick="toggleOptions(event)">
                          <i class="flaticon-arrow-pointing-to-right"></i> Documento explicativo sobre Atendimento do VAF - Valor Adicionado Fiscal!
                        </a>
                        <ul class="options" style="display: none;">
                            <li><a href="https://www.dropbox.com/s/g3pwokeze0yi28z/Manual_VAF%20-%20Valor%20Adicionado%20Fiscal.pdf?dl=0" target="_blank">Baixar Manual do VAF - Valor Adicionado Fiscal</a></li>
                            <!--li><a href="https://wa.me/5516991038606">Falar com o Suporte do VAF - Valor Adicionado Fiscal</a></li--> 
                          </ul>
    
                          <!--li>
                            <a href="https://wa.me/5516996020437" target="_blank">
                              <i class="flaticon-arrow-pointing-to-right"></i>  Atendimento SOMENTE para Servidores da Prefeitura
                            </a>
                          </li>  

                          <li>
                            <a href="https://wa.me/5516991038606" target="_blank">
                              <i class="flaticon-arrow-pointing-to-right"></i> Para mais opções click aqui!
                            </a>
                          </li--->  
    
                      </li>  
                </ul>
                    <br>
                <a href="contact.php" class="default-btn border-radius-5">Para mais opções click aqui!</a>
            </div>
        </div>
    </div>
</div>
</div>
<!-- About Area End -->

       


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

        <!--Opção-->
        <script>
            function toggleOptions(event) {
              event.preventDefault();
              var options = event.target.nextElementSibling;
              if (options.style.display === 'none') {
                options.style.display = 'block';
              } else {
                options.style.display = 'none';
              }
            }
          </script>
                  <!--Opção END-->

    
        
<!--whatsapp - Icon-->
<a href="https://api.whatsapp.com/send?phone=551632319194&text=+SUPORTE%20ONLINE" class="float" target="_blank" aria-label="Botão para contato no WhatsApp">
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