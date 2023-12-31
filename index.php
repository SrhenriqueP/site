<?php
session_start(); // Inicie a sessão para rastrear as visitas

$arquivo_log = 'log_visitas.txt'; // Arquivo de log para IP e data/hora

// Rastreia informações do visitante atual
$ip = $_SERVER['REMOTE_ADDR'];
$data_hora = date('Y-m-d H:i:s');
$visitas_detalhadas = "IP: $ip - Data/Hora: $data_hora - Página visitada: " . $_SERVER['REQUEST_URI'];

// Salva as informações no arquivo de log
file_put_contents($arquivo_log, $visitas_detalhadas . PHP_EOL, FILE_APPEND);

// Rastreie as visitas usando sessões
$pagina_atual = $_SERVER['REQUEST_URI'];

if (!isset($_SESSION['visit_count'])) {
    $_SESSION['visit_count'] = array();
}

if (!isset($_SESSION['visit_count'][$pagina_atual])) {
    $_SESSION['visit_count'][$pagina_atual] = 1;
} else {
    $_SESSION['visit_count'][$pagina_atual]++;
}

// Encontre a página mais acessada
arsort($_SESSION['visit_count']); // Classifique o array em ordem decrescente

$pagina_mais_acessada = key($_SESSION['visit_count']);
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
    <title>PriMax Online - Gestão e Tecnologia</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/logos/icon-PriMax.ico">

            <!-- Criador do site 
                    Contato
            linkedin.com/luizhenriquepaulino
            github.com/MrLHenrique
            -->

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
                                    <i class='bx bxl-twitter'></i>
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
    

    <!-- Banner Area Two -->
    <div class="banner-area-two">
        <div class="banner-slider owl-carousel owl-theme">
            <div class="banner-item">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="banner-content-two">
                                <h1>Fundada em 2010, a PriMAX Online atua no desenvolvimento de sistemas de informática voltados às gestões de empresas públicas e privada.</h1>
                                <p>Os nossos sistemas de gestão tecnológica possibilitam ao cliente o controle sobre as informações de sua organização e gerência contábil, fiscal, folha de pagamento, receitas, despesas, patrimônio e almoxarifado.</p>
                                <div class="banner-btn">
                                    
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="banner-img-two">
                                <img src="assets/images/home-two/home-two-img12.jpg" alt="Home Images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="banner-item">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="banner-content-two">
                                <h1>A PriMAX oferece uma ampla gama de soluções inteligentes e confiáveis para atender às necessidades da sua organização.</h1>
                                <p>Nossos serviços são voltadas ao desenvolvimento de sistemas customizáveis e não customizáveis, locação de máquinas e aparelhos com o fornecimento de suprimentos de informática, desenvolvimento de sites e sistemas de controle e monitoramento de dados. </p>
                                <div class="banner-btn">

                                </div>

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="banner-img-two">
                                <img src="assets/images/home-two/home-two-01.jpg" alt="Home Images">
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
            </div>
        </div>
    </div>
    <!-- Banner Area Two End -->

    <br>

    <!-- About Area -->
    <div class="about-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="assets/images/about-img/about-img11.jpg" alt="About Images">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content pl-20">
                        <div class="section-title">
                            <span class="sp-title">Serviço 100% web </span>
                            <h2>Nosso serviço é deixar sua vida mais Fácil &amp; Profissional.</h2>
                            <p>
                                Visão, qualidade e precisão. Essas são as verdadeiras matérias-primas da PriMax. Não é
                                apenas um serviço que traz o que é tecnologicamente possível. Ele traz o que é
                                tecnologicamente útil. Não é apenas inovador. É a inovação ideal.
                            </p>
                        </div>

                        <ul class="about-list">
                            <li><i class='flaticon-arrow-pointing-to-right'></i> Atividades de Trabalho Inovadoras</li>
                            <li><i class='flaticon-arrow-pointing-to-right'></i> 100% de Garantia para o seu Cliente
                            </li>
                            <li><i class='flaticon-arrow-pointing-to-right'></i> Equipe Dedicada e Treinada</li>
                            <li><i class='flaticon-arrow-pointing-to-right'></i> Ambiente Seguro & Protegido</li>
                        </ul>

                        <a href="quemsomos.php" class="default-btn border-radius-5">Saiba Mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End -->


    <!-- Services Area -->
    <div class="services-area services-area-bg pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title">
                        <span class="sp-title">Serviços</span>
                        <h2>Fornecemos os melhores serviços de atendimento online e presencial</h2>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-btn">
                        <a href="quemsomos.php" class="default-btn border-radius-5">Veja Detalhes</a>
                    </div>
                </div>
            </div>

            <div class="services-slider owl-carousel owl-theme align-items-center">
                <div class="services-item services-bg1">
                    <div class="content">
                        <div class="service-icon">
                            <i class='flaticon-project-management'></i>
                        </div>
                        <h3>
                            <a href="contact.php">Atendimento</a>
                        </h3>
                        <p>
                            Personalizado e imediato por telefone e WhatsApp.
                        </p>
                        <a href="contact.php" class="read-btn">Saiba Mais</a>
                        <div class="top">
                            
                        </div>
                    </div>


                </div>

                <div class="services-item services-bg2">
                    <div class="content">
                        <div class="service-icon">
                            <i class='flaticon-vector'></i>
                        </div>
                        <h3>
                            <a href="contact.php">Perfil Personalizado</a>
                        </h3>
                        <p>
                            Todo o atendimento realizado de acordo com o perfil determinado pelo nosso cliente, o cliente tem a sensação de estar imerso na experiência.
                        </p>
                        <a href="contact.php" class="read-btn">Saiba Mais</a>
                        <div class="top">
                        </div>
                    </div>
                </div>

                <div class="services-item services-bg3">
                    <div class="content">
                        <div class="service-icon">
                            <i class='flaticon-digital-marketing'></i>
                        </div>
                        <h3>
                            <a href="contact.php">Organização</a>
                        </h3>
                        <p>
                            Uma empresa organizada é aquela que alinha uma eficiente gestão com as melhores soluções tecnológicas para potencializar sua produtividade e alcançar o sucesso.
                        </p>
                        <a href="contact.php" class="read-btn">Saiba Mais</a>
                        <div class="top">
                        </div>
                    </div>
                </div>

                <div class="services-item services-bg4">
                    <div class="content">
                        <div class="service-icon">
                            <i class='flaticon-content'></i>
                        </div>
                        <h3>
                            <a href="index.php">Prioridade para sua gestão</a>
                        </h3>
                        <p>
                            A gestão eficiente aliada à tecnologia inteligente é o combustível que impulsiona as empresas rumo à inovação, eficiência e excelência.
                        </p>
                        <a href="index.php" class="read-btn">Saiba Mais</a>
                        <div class="top">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Area End -->

    <!-- Choose Area End -->
    <div class="choose-area pt-100 pb-70">
        <div class="container-fluid">
            <div class="section-title text-center">
                <span class="sp-title">Por que escolher-nos?</span>
                <h2>Porque você é nossa prioridade</h2>
            </div>

            <div class="row pt-45 align-items-center justify-content-center">
                <div class="col-lg-5">
                    <div class="choose-img">
                        <img src="assets/images/choose-img/choose-img1.png" alt="Choose Images">
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="choose-leftside">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="choose-card">
                                    <h3>Melhor Atendimento ao cliente</h3>
                                    <p>A PriMAX, com sua área de qualidade dedicada, busca constantemente atingir metas internacionais de atendimento. Para garantir excelência,  são realizados treinamentos diários com as colaboradores, visando aprimorar constantemente nossos serviços.</p>
                                    <i class='flaticon-customer-service'></i>
                                    <div class="circle"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="choose-card">
                                    <h3>Infraestrutura</h3>
                                    <p>A infraestrutura de gestão tecnológica da PriMAX oferece recursos avançados para otimizar a comunicação. Com um sistema de telefonia de última geração. Além disso, as conversas no WhatsApp são registradas e monitoradas por um sistema dedicado, garantindo um acompanhamento preciso de todas as interações.</p>
                                    <i class='flaticon-document'></i>
                                    <div class="circle"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="choose-card">
                                    <h3>Satisfação do Cliente</h3>
                                    <p>Na PriMAX, a satisfação do cliente é nossa prioridade. Investimos em uma gestão tecnológica de ponta para garantir uma excelente primeira impressão e interações memoráveis. Combinamos tecnologia e equipe dedicada para proporcionar uma experiência de atendimento excepcional, que supera as expectativas dos clientes.</p>
                                    <i class='flaticon-user'></i>
                                    <div class="circle"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="choose-card">
                                    <h3>Economia e Agilidade</h3>
                                    <p>Na PriMAX, oferecemos uma gestão tecnológica que traz economia e agilidade aos clientes. Com ferramentas avançadas, como controle de ligações, agendamentos e um PABX moderno, garantimos comunicação eficiente. Registramos e controlamos todas as conversas no WhatsApp, proporcionando segurança. Nosso objetivo é otimizar processos, reduzir tempo e custos, oferecendo uma experiência ágil e econômica aos clientes.</p>
                                    <i class='flaticon-wall-clock'></i>
                                    <div class="circle"></div>
                                </div>
                            </div>
                        </div>
                        <div class="choose-bg">
                            <img src="assets/images/choose-img/choose-bg.png" alt="Choose Images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Choose Area End -->

    <!-- Work Area -->
    <div class="work-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="work-content">
                        <div class="section-title">
                            <span class="sp-title">Como Funciona</span>
                            <h2>Como é realizado o processo de implantação da PriMAX? </h2>
                        </div>

                        <div class="content">
                            <h3><a href="https://wa.me/+5516991038606"> Conte-nos sobre seu problema</a></h3>
                            <p>O contato com nossos clientes é realizado por meio de Atendimento por telefone, whatsapp, reuniões virtuais ou presencialmente, nas quais buscamos entender suas necessidades e orientações para conduzir todo o processo de forma eficiente e alinhada aos seus objetivos.</p>
                            <div class="number">1</div>
                        </div>

                        <div class="content">
                            <h3><a href="https://wa.me/+5516991038606"> Conhecendo sobre sua tecnologia</a></h3>
                            <p>Após a finalização e aprovação do seu perfil, apresentamos uma tecnologia inovadora desenvolvida pela nossa empresa.</p>
                            <div class="number">2</div>
                        </div>

                        <div class="content">
                            <h3><a href="https://wa.me/+5516991038606"> Criação do projeto</a></h3>
                            <p>Com toda a informação coletada sobre suas necessidades e a tecnologia sugerida, iniciamos o processo de criação do projeto.</p>
                            <div class="number">3</div>
                        </div>

                        <div class="content">
                            <h3><a href="https://wa.me/+5516991038606"> Protótipo</a></h3>
                            <p>Chegamos à fase de desenvolvimento do protótipo do projeto, uma etapa crucial que nos permite visualizar e testar as funcionalidades e recursos principais antes da implementação final.</p>
                            <div class="number">4</div>
                        </div>

                        <div class="content">
                            <h3><a href="https://wa.me/+5516991038606"> Finalização do projeto</a></h3>
                            <p>Chegamos à fase final do projeto, onde todos os detalhes foram cuidadosamente trabalhados e implementados para atender às suas necessidades e objetivos fazendo assim a entrega do projeto.</p>
                            <div class="number">5</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="work-img">
                        <img src="assets/images/work-img/work-img04.png" alt="Work Images">
                        <img src="assets/images/work-img/work-img04.png" alt="Work Images">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Work Area End -->

    <!-- Blog Area -->
    <div class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span class="sp-title">Noticias</span>
                <h2>Novidades</h2>
            </div>

            <div class="row pt-45">
                <div class="col-lg-6">
                    <div class="blog-card">
                        <a href="quemsomos.php">
                            <img src="assets/images/blog/tecnologia-na-educação-1920x1000-c-default.png" alt="Blog Images">
                        </a>
                        <div class="content">
                            <ul>

                            </ul>
                            <h3><a href="quemsomos.php">Com nossa tecnologia sua necessidade será bem mais fácil!</a></h3>
                            <p>Com 13 anos de expertise em gestão tecnológica, nossa empresa tem sido uma referência na implementação de soluções inovadoras que impulsionam o progresso e a transformação digital de nossos clientes, contribuindo para o crescimento sustentável de seus negócios.</p>
                            <a href="quemsomos.php" class="read-btn">Gestão & Tecnologia</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-left-content">
                                <div class="blog-left-img">
                                    <a href="quemsomos.php">
                                        <img src="assets/images/home-one/265617-seguranca-digital-descubra-agora-mesmo-como-proteger-sua-empresa.jpg" alt="Blog Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <ul>

                                    </ul>
                                    <h3><a href="quemsomos.php">Controle em gestão</a></h3>
                                    <p>Controle eficiente é a base da gestão tecnológica, proporcionando organização, monitoramento e tomada de decisões assertivas para impulsionar o crescimento e o sucesso da empresa.</p>
                                    <a href="quemsomos.php" class="read-btn">Tecnologia</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="blog-left-content">
                                <div class="blog-left-img">
                                    <a href="https://api.whatsapp.com/send?phone=551632319194&text=+SUPORTE%20ONLINE" target="_blank">
                                        <img src="assets/images/blog/blog-sub12.jpg" alt="Blog Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <ul>
                                        WhatsApp
                                    </ul>
                                    <h3><a href="https://api.whatsapp.com/send?phone=551632319194&text=+SUPORTE%20ONLINE" target="_blank">Utilize seu número de WhatsApp</a></h3>
                                    <p>Atendimento direto do seu número de WhatsApp.</p>
                                    <a href="https://api.whatsapp.com/send?phone=551632319194&text=+SUPORTE%20ONLINE" class="read-btn">WhatsApp</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="blog-left-content">
                                <div class="blog-left-img">
                                    <a href="quemsomos.php">
                                        <img src="assets/images/home-one/Gestão_de_Tecnologia_da_Informação.jpeg" alt="Blog Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <ul>

                                    </ul>
                                    <h3><a href="quemsomos.php">13 anos de história!</a></h3>
                                    <p>Uma das primeiras empresas do mundo focada em gestão tecnológica, com a reputação positiva no mercado brasileiro.</p>
                                    <a href="quemsomos.php" class="read-btn">Quem Somos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->

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

                        <!-- Inicio codigo Contador -->
<div>
    <a title="Contador" href="index.php">
        <img src="https://contador-gratis.com/contadores-de-visitas/301023105751781.gif" alt="Contador">
    </a>
    <div>
        <a href="index.php" title="contador de visitas"></a>
    </div>

    <!-- pagina acessada -->

 <div id="mensagem-mais-acessada">
        <?php
     $pagina_mais_acessada = key($_SESSION['visit_count']);
     $nome_pagina_mais_acessada = basename($pagina_mais_acessada); // Extrai apenas o nome do arquivo
     
     echo "A página mais acessada é: <a href='$nome_pagina_mais_acessada'>$nome_pagina_mais_acessada</a>";
     
      ?>

    </div>
</div>

<!-- Fim do codigo Contador -->

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
    <a href="https://api.whatsapp.com/send?phone=551632319194&text=+SUPORTE%20ONLINE" class="float"  target="_blank" aria-label="Botão para contato no WhatsApp">
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
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-30TN3W6HEX');
    </script>


    </div>
    <!--Icon-fontwesome-->
    <script src="https://kit.fontawesome.com/aba717a428.js" crossorigin="anonymous"></script>
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
    <!-- Barra  JS -->
    <script src="assets/js/barra.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>