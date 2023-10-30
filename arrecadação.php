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
        <title> Arrecadação - PriMAX - Gestao & Tecnologica</title>

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
        <header class="top-header top-header-bg-three">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-sm-7">
                        <div class="header-left header-left-color">
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
              <h3 style="margin: 0;">Arrecadação</h3>
          </div>
          <ul class="menu" style="margin: 0;">
              <li>
                  <a href="index.php">Home</a>
              </li>
              <li><span class="contact-menu">Arrecadação</span></li>
          </ul>
      </div>
  </div>
</div>

<!-- Menu Para Voltar a pagina inicial End -->
        <!-- Banner Area Two -->
        <div class="banner-area-two">
            <div class="banner-slider owl-carousel owl-theme">
                <div class="banner-item">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="banner-content-two">
                                    <h1>Arrecadação</h1>
                                    <p>Os sistemas integrados de gestão da arrecadação municipal permitem o gerenciamento e controle de cada tributo, desde o lançamento, geração de documentos de cobrança, fiscalização e controle financeiro. 

                                    </p>                                    
                                    <p>Soluções integradas para gestão do ISSQN e emissão das Nfes, IPTU On-line, Alvará Eletrônico, emissor de Guias e Taxas, ITBI on-line, Gestão de Cemitérios, Fiscalização de Bancos, Processos Administrativos e Judiciais, gestão do Valor Adicional fiscal do ICMS dentre outros sao os módulos de arrecadação. </p>
                                   
                                </div>
                            </div>
        
                            <div class="col-lg-6">
                                <div class="banner-img-two">
                                    <img src="assets/images/home-two/home-two-img11.jpg" alt="Home Images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area Two End -->

         <!-- Services Area -->
         <section class="services-area-two pt-100 pb-70">
            <div class="container">
              <div class="section-title text-center">
                <span class="sp-title">Serviços</span>
                <h2>Módulo de Arrecadação</h2>
              </div>
              <div class="tab services-tab pt-45">
                <div class="row">
                  <div class="col-lg-12">
                    <ul class="tabs">
                      <li>
                        <a href="#">VAF - VALOR ADICIONADO FISCAL</a>
                      </li>
                      <li>
                        <a href="#">IPTU</a>
                      </li>
                      <li>
                        <a href="#">ALVARÁ ELETRÔNICO</a>
                      </li>
                      <li>
                        <a href="#">GERENCIAMENTO DE CEMITÉRIOS</a>
                      </li>
                      <li>
                        <a href="#">FISCALIZAÇÃO</a>
                      </li>
                      <li>
                        <a href="#">ISSQN - Nfe</a>
                      </li>
                      <li>
                        <a href="#">ITBI</a>
                      </li>
                      <li>
                        <a href="#">PROTOCOLO</a>
                      </li>
                      <li>
                        <a href="#">TAXA</a>
                      </li>
                      <li>
                        <a href="#">ÁGUA ELETRÔNICA</a>
                      </li>
                      <li>
                        <a href="#"> AUDIBANK </a>
                      </li>
                    </ul>
                  </div>
                </div>
          
                <div class="col-lg-12 col-md-12">
                  <div class="tab_content current active pt-45">
                    <div class="tabs_item current">
                      <div class="row align-items-center">
                        <div class="col-lg-6">
                          <div class="services-tab-img">
                            <a href="index.php"><img src="assets/images/services/services-large21.jpg" alt="Imagem 1"></a>
                          </div>
                        </div>
          
                        <div class="col-lg-6">
                          <div class="services-tab-content pl-20">
                            <h2>VAF - VALOR ADICIONADO FISCAL</h2>
                            <p>Disponibilizamos um link de pagamento para seu paciente com as opções de PIX, Boleto ou cartão de crédito. O valor fica retido na sua conta e seu paciente recebe um comprovante após a confirmação.</p>
          
                            <ul class="services-tab-list">
                              <li><i class="flaticon-arrow-pointing-to-right"></i> Envio manual ou automático</li>
                              <li><i class="flaticon-arrow-pointing-to-right"></i> Importância do VAF na arrecadação de ICMS</li>
                              <li><i class="flaticon-arrow-pointing-to-right"></i> Relevância para o planejamento público</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Repita o bloco de código abaixo para cada serviço adicional -->
                    <div class="tabs_item">
                      <div class="row align-items-center">
                        <div class="col-lg-6">
                          <div class="services-tab-content pr-20">
                            <h2>IPTU</h2>
                            <p>IPTU é a sigla para Imposto Predial e Territorial Urbano, que é um imposto brasileiro cobrado das pessoas que possuem uma propriedade imobiliária urbana, como um apartamento, sala comercial, casa ou outro tipo de imóvel dentro de uma região urbanizada.</p>
          
                            <!---ul class="services-tab-list">
                              <li><i class="flaticon-arrow-pointing-to-right"></i> Lembretes automáticos</li>
                              <li><i class="flaticon-arrow-pointing-to-right"></i> Serasa</li>
                              <li><i class="flaticon-arrow-pointing-to-right"></i> Receitas Recorrentes</li>
                            </ul--->
                          </div>
                        </div>
          
                        <div class="col-lg-6">
                          <div class="services-tab-img">
                            <a href="index.php"><img src="assets/images/services/services-large22.jpg" alt="Imagem 2"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Fim do bloco de código repetido -->

                    <!-- Repita o bloco de código abaixo para cada serviço adicional -->
                    <div class="tabs_item">
                        <div class="row align-items-center">
                          <div class="col-lg-6">
                            <div class="services-tab-content pr-20">
                              <h2>ALVARÁ ELETRÔNICO</h2>
                              <p>Permite aos empreendedores do Município efetuarem a abertura de sua empresa via internet dentro das normas e controles estabelecidos pelo Plano Diretor do Município.</p>
            
                              <!---ul class="services-tab-list">
                                <li><i class="flaticon-arrow-pointing-to-right"></i> Lembretes automáticos</li>
                                <li><i class="flaticon-arrow-pointing-to-right"></i> Serasa</li>
                                <li><i class="flaticon-arrow-pointing-to-right"></i> Receitas Recorrentes</li>
                              </ul--->
                            </div>
                          </div>
            
                          <div class="col-lg-6">
                            <div class="services-tab-img">
                              <a href="index.php"><img src="assets/images/services/services-large11.jpg" alt="Imagem 2"></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Fim do bloco de código repetido -->

                       <!-- Repita o bloco de código abaixo para cada serviço adicional -->
                    <div class="tabs_item">
                        <div class="row align-items-center">
                          <div class="col-lg-6">
                            <div class="services-tab-content pr-20">
                              <h2>GERENCIAMENTO DE CEMITÉRIOS</h2>
                              <p>Gerencia e controla todas as atividades da administração de um cemitério, tais como: terrenos, óbitos, sepultamentos e exumações de cadáveres, transferências de ossadas, etc com geração de relatórios e livros.</p>
            
                              <!---ul class="services-tab-list">
                                <li><i class="flaticon-arrow-pointing-to-right"></i> Lembretes automáticos</li>
                                <li><i class="flaticon-arrow-pointing-to-right"></i> Serasa</li>
                                <li><i class="flaticon-arrow-pointing-to-right"></i> Receitas Recorrentes</li--->
                              </ul>
                            </div>
                          </div>
            
                          <div class="col-lg-6">
                            <div class="services-tab-img">
                              <a href="index.php"><img src="assets/images/services/services-large15.jpg" alt="Imagem 2"></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Fim do bloco de código repetido -->

                         <!-- Repita o bloco de código abaixo para cada serviço adicional -->
                    <div class="tabs_item">
                        <div class="row align-items-center">
                          <div class="col-lg-6">
                            <div class="services-tab-content pr-20">
                              <h2>FISCALIZAÇÃO</h2>
                              <p>Permite o controle das ações fiscais desde a abertura do TIAF, emissão e acompamento das notificações até o encerramento com a emissão do TEAF e do Auto de Infração bem como a inscrição em Dívida Ativa do Município.</p>
            
                              <!--ul class="services-tab-list">
                                <li><i class="flaticon-arrow-pointing-to-right"></i> Lembretes automáticos</li>
                                <li><i class="flaticon-arrow-pointing-to-right"></i> Serasa</li>
                                <li><i class="flaticon-arrow-pointing-to-right"></i> Receitas Recorrentes</li>
                              </ul--->
                            </div>
                          </div>
            
                          <div class="col-lg-6">
                            <div class="services-tab-img">
                              <a href="index.php"><img src="assets/images/services/services-large23.jpg" alt="Imagem 2"></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Fim do bloco de código repetido -->

                       <!-- Repita o bloco de código abaixo para cada serviço adicional -->
                    <div class="tabs_item">
                        <div class="row align-items-center">
                          <div class="col-lg-6">
                            <div class="services-tab-content pr-20">
                              <h2>ISSQN</h2>
                              <p>Opera totalmente via WEB controlando toda a arrecadação do ISS, tanto o fixo como o variável, disponibiliza a Nota Fiscal de Serviço Eletrônica autodeclarável, controla tomadores e prestadores de serviços, controla cartórios e pedágios, controla instituições financeiras e o Simples Nacional.</p>
            
                              <!---ul class="services-tab-list">
                                <li><i class="flaticon-arrow-pointing-to-right"></i> Lembretes automáticos</li>
                                <li><i class="flaticon-arrow-pointing-to-right"></i> Serasa</li>
                                <li><i class="flaticon-arrow-pointing-to-right"></i> Receitas Recorrentes</li--->
                              </ul>
                            </div>
                          </div>
            
                          <div class="col-lg-6">
                            <div class="services-tab-img">
                              <a href="index.php"><img src="assets/images/services/services-large43.jpg" alt="Imagem 2"></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Fim do bloco de código repetido -->

                      <!-- Repita o bloco de código abaixo para cada serviço adicional -->
                    <div class="tabs_item">
                         <div class="row align-items-center">
                            <div class="col-lg-6">
                            <div class="services-tab-content pr-20">
                            <h2>ITBI</h2>
                            <p>Possibilita que as transações imobiliárias sejam feitas totalmente nos cartórios sem a necessidade de deslocamento entre cartório e prefeitura e vice-versa, facilitando para o contribuinte.</p>

                            <!---ul class="services-tab-list">
                            <li><i class="flaticon-arrow-pointing-to-right"></i> Lembretes automáticos</li>
                            <li><i class="flaticon-arrow-pointing-to-right"></i> Serasa</li>
                            <li><i class="flaticon-arrow-pointing-to-right"></i> Receitas Recorrentes</li>
                            </ul---->
                         </div>
                        </div>
                     <div class="col-lg-6">
                         <div class="services-tab-img">
                            <a href="index.php"><img src="assets/images/services/services-large26.jpg" alt="Imagem 2"></a>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- Fim do bloco de código repetido -->

                    <!-- Repita o bloco de código abaixo para cada serviço adicional -->
                    <div class="tabs_item">
                        <div class="row align-items-center">
                          <div class="col-lg-6">
                            <div class="services-tab-content pr-20">
                              <h2>PROTOCOLO</h2>
                              <p>Controla a tramitação dos processos administrativos, desde a emissão do protocolo e em todas as etapas de tramitação dos processos, permitindo sua consulta via WEB.</p>
            
                              <!---ul class="services-tab-list">
                                <li><i class="flaticon-arrow-pointing-to-right"></i> Lembretes automáticos</li>
                                <li><i class="flaticon-arrow-pointing-to-right"></i> Serasa</li>
                                <li><i class="flaticon-arrow-pointing-to-right"></i> Receitas Recorrentes</li>
                              </ul--->
                            </div>
                          </div>
            
                          <div class="col-lg-6">
                            <div class="services-tab-img">
                              <a href="index.php"><img src="assets/images/services/services-large34.jpg" alt="Imagem 2"></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Fim do bloco de código repetido -->

                      <!-- Repita o bloco de código abaixo para cada serviço adicional -->
                    <div class="tabs_item">
                        <div class="row align-items-center">
                          <div class="col-lg-6">
                            <div class="services-tab-content pr-20">
                              <h2>TAXA</h2>
                              <p>Permite a cobrança de todas as taxas Municipais, tais como a de fiscalização e funcionamento, dentre outras, e das tarifas de serviços públicos, possibilitando ainda ao solicitante a emissão da guia de cobrança, a sua liberação e o seu andamento.</p>
            
                              <!---ul class="services-tab-list">
                                <li><i class="flaticon-arrow-pointing-to-right"></i> Lembretes automáticos</li>
                                <li><i class="flaticon-arrow-pointing-to-right"></i> Serasa</li>
                                <li><i class="flaticon-arrow-pointing-to-right"></i> Receitas Recorrentes</li--->
                              </ul>
                            </div>
                          </div>
            
                          <div class="col-lg-6">
                            <div class="services-tab-img">
                              <a href="index.php"><img src="assets/images/services/services-large35.jpg" alt="Imagem 2"></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Fim do bloco de código repetido -->

                      <!-- Repita o bloco de código abaixo para cada serviço adicional -->
                    <div class="tabs_item">
                        <div class="row align-items-center">
                          <div class="col-lg-6">
                            <div class="services-tab-content pr-20">
                              <h2>ÁGUA ELETRÔNICA</h2>
                              <p>Controla o consumo de água da população através de coleta de dados, disponibiliza a conta pela internet para consulta e pagamento e possui parâmetros para estabelecimento de consumo de caráter social.
                              </p>
            
                              <!---ul class="services-tab-list">
                                <li><i class="flaticon-arrow-pointing-to-right"></i> Lembretes automáticos</li>
                                <li><i class="flaticon-arrow-pointing-to-right"></i> Serasa</li>
                                <li><i class="flaticon-arrow-pointing-to-right"></i> Receitas Recorrentes</li>
                              </ul--->
                            </div>
                          </div>
            
                          <div class="col-lg-6">
                            <div class="services-tab-img">
                              <a href="index.php"><img src="assets/images/services/services-large37.jpg" alt="Imagem 2"></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Fim do bloco de código repetido -->

                 <!-- Repita o bloco de código abaixo para cada serviço adicional -->
                    <div class="tabs_item">
                      <div class="row align-items-center">
                        <div class="col-lg-6">
                          <div class="services-tab-content pr-20">
                            <h2>AUDIBANK</h2>
                            <p>Uma empresa de auditoria financeira, como a Audibank, desempenha um papel importante ao auxiliar o fisco municipal na fiscalização das instituições financeiras locais. Eles realizam auditorias, cruzando informações prestadas pelas instituições com os balancetes consolidados, identificando discrepâncias e oferecendo orientações para aprimorar processos internos. Isso garante conformidade regulatória e promove transparência nas operações financeiras municipais.
                            </p>
          
                            <ul class="services-tab-list">
                              <li><i class="flaticon-arrow-pointing-to-right"></i> Análise de riscos</li>
                              <li><i class="flaticon-arrow-pointing-to-right"></i> Revisão de controles internos</li>
                              <li><i class="flaticon-arrow-pointing-to-right"></i> Recomendações de melhoria</li>
                            </ul>
                          </div>
                        </div>
          
                        <div class="col-lg-6">
                          <div class="services-tab-img">
                            <a href="index.php"><img src="assets/images/services/services-large33.jpg" alt="Imagem 2"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Fim do bloco de código repetido -->
                  </div>
                </div>
              </div>
            </div>
          </section>
         <!-- Services Area End -->


        <!-- Project Area Two -->
        <div class="project-area-two pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-title2">Gestao da Tecnologia</span>
                    <h2>Deixe a parte complicada com a PriMax</h2>
                </div>

                <div class="row pt-45">
                    <div class="col-lg-7">
                        <div class="project-slider-two owl-carousel owl-theme" data-slider-id="1">
                            <div class="project-slider-img">
                                <img src="assets/images/projects/project-style21.jpg" alt="Images">
                            </div>

                            <div class="project-slider-img">
                                <img src="assets/images/projects/baixa2.jpg" alt="Images">
                            </div>

                            <div class="project-slider-img">
                                <img src="assets/images/projects/project-style23.jpg" alt="Images">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="thumbs-wrap">
                            <div class="owl-thumbs project-area-thumb" data-slider-id="1">
                                <div class="owl-thumb-item">
                                    <div class="content">
                                        <h3>Monitoramento de dados</h3>
                                        <p>O monitoramento de dados permite o acompanhamento e análise de informações de forma contínua e em tempo real, fornecendo insights valiosos para tomada de decisões e identificação de tendências.
                                        </p>
                                    </div>
                                </div>
                
                                <div class="owl-thumb-item">
                                    <div class="content">
                                        <h3>Sistema de sofware confiável</h3>
                                        <p>Na busca por um sistema de software confiável, considere a segurança, estabilidade e suporte técnico oferecidos. Verifique a reputação do fornecedor, a regularidade das atualizações e se o sistema atende às regulamentações. Priorize a usabilidade e busque feedback de outros usuários.
                                        </p>
                                    </div>
                                </div>
                
                                <div class="owl-thumb-item">
                                    <div class="content">
                                        <h3>Desenvolvimento de sites</h3>
                                        <p>Oferecemos serviços de desenvolvimento de sites com qualidade e eficiência, criando soluções online personalizadas para atender às necessidades específicas dos nossos clientes.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project Area Two End -->

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
    <a href="https://api.whatsapp.com/send?phone=551632319194&text=+SUPORTE%20ONLINE" class="float" target="_blank" aria-label="Botão para contato no WhatsApp" >
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