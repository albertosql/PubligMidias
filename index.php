<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php
$db = open_database();
$numeros = findNumeros();
$midias = findMidias();
?>

<!doctype html>

<html lang="pt_BR" class="no-js">

<head>

    <!-- meta data -->

    <meta charset="UTF-8">
    <meta name=viewport content="width=device-width, initial-scale=1">

    <meta property="og:site_name" content="Publig Midias Alternativas" />
    <meta property="og:url" content="http://www.publig.com.br/" />
    <meta property="fb:app_id" content="608339429240494"/>
    <meta property="og:description" content="A Publig chegou ao mercado manauara para trazer inovação em propaganda. Oferecemos serviços de mídias de impacto com ótimo custo-beneficio. Conheça nossos veículos de divulgação e promova sua empresa conosco.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:image" content="http://www.publig.com.br/assets/img/publig02.jpg">
    <meta property="og:image" content="http://www.publig.com.br/assets/img/publig01.png">
    <meta property="og:image" content="http://www.publig.com.br/assets/img/publig03.jpg">
    <meta property="og:image" content="http://www.publig.com.br/assets/img/publig04.jpg">

    <meta name="keywords" content="Publig, Taxidoor,Midas, Luminosos Manaus, Manaus, Midia, Publicidade, Propaganda, Busdoor, Taxidoor, Luminosos" />
    <meta name="description" content="A Publig chegou ao mercado manauara para trazer inovação em propaganda. Oferecemos serviços de mídias de impacto com ótimo custo-beneficio. Conheça nossos veículos de divulgação e promova sua empresa conosco." />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- title and favicon -->

    <title>Publig Mídias</title>
    <link rel="icon" href="assets/img/icon2.ico">


    <!--necessary stylesheets -->

    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/ionicons.min.css">
    <link type="text/css" rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/popup.css">
    <link type="text/css" rel="stylesheet" href="assets/css/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="assets/css/owl.theme.css">
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">

    <!-- Carroussel -->
    <style>
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            width: 70%;
            margin: auto;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--[if IE]>
    <style>
        .flip-container:hover .back,
        .flip-container.hover .back {
            backface-visibility: visible !important;
        }
    </style>
    <![endif]-->


</head>


<body>

<!-- Preloader -->

<div id="preloader">
    <div class="loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>

<!-- HOME PAGE -->

<div class="home-page">

    <!-- Introduction -->
    <div class="introduction">
        <img src="assets/img/taxigif2.gif" />

        <!-- <div class="logo">
             <img src="assets/img/capa.png"/>
         </div>
         -->



        <div class="social-media">
            <a href="https://www.facebook.com/PubligMidias/?ref=ts&fref=ts" target="_blank" class="fa fa-facebook" data-toggle="tooltip" title="Facebook"></a>
            <a href="https://www.instagram.com/publigmidias/" target="_blank" class="fa fa-instagram" data-toggle="tooltip" title="Instagram"></a>
            <a href="#" class="fa fa-envelope" data-toggle="modal" data-target="#EmailModal" data-backdrop="static"></a>
            <a href="#" class="fa fa-phone" data-toggle="modal" data-target="#PhoneModal" data-backdrop="static"></a>

            <!-- PHONE MODAL -->
            <div class="modal fade" id="PhoneModal" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Telefones para contato</h4>
                        </div>
                        <div class="modal-body">
                            <p style="font-size: 21px">(92) 3017-0603</p>
                            <p style="font-size: 21px">(92) 98174-0321</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- EMAIL MODAL-->
            <div class="modal fade" id="EmailModal" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Email para contato</h4>
                        </div>
                        <div class="modal-body">
                            <p style="font-size: 21px">contato@publig.com.br</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default copyTest">Copiar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>


        <!-- Social Media Icons [ END ] -->
    </div>

    <!-- Navigation Menu -->

    <div class="menu">

        <div data-url_target="#" class="portfolio-btn menu_button">
            <img alt="" src="assets/img/CapaTaxi.jpg">
            <div class="mask">
            </div>
            <div class="heading">
                <a style="text-decoration: none" href="http://taxidoor.publig.com.br/">
                    <i class="fa fa-cab hidden-xs"></i>
                    <h2>Mídia em Táxi</h2>
                </a>
            </div>
        </div>

        <!-- Single Navigation Menu Button [ END ]  -->

        <div data-url_target="service" class="service-btn menu_button">
            <img alt="" src="assets/img/CapaServicos.jpg">
            <div class="mask">
            </div>
            <div class="heading">
                <i class="fa fa-bus  hidden-xs"></i>
                <h2>Outros Serviços</h2>
            </div>
        </div>

        <!-- Single Navigation Menu Button [ END ]  -->

        <div data-url_target="portfolio" class="portfolio-btn menu_button">
            <img alt="" src="assets/img/CapaPortfolio.jpg" style="width:100%; height:100%;">
            <div class="mask">
            </div>
            <div class="heading">
                <i class="fa fa-briefcase hidden-xs"></i>
                <h2>Portfólio</h2>
            </div>
        </div>

        <!-- Single Navigation Menu Button -->


        <div data-url_target="contact" class="profile-btn menu_button">
            <img alt="" src="assets/img/CapaSobre.jpg">
            <div class="mask">
            </div>
            <div class="heading">
                <i class="fa fa-users hidden-xs"></i>
                <h2>Sobre</h2>
            </div>
        </div>

        <!-- Single Navigation Menu Button [ END ]  -->

    </div>
</div>

<!--
4 ) Close Button
-->

<div class="close-btn"></div>

<!--
5 ) Profile Page
-->

<div id="about_us" class="profile-page container-fluid page">
    <div class="row">
        <!--( a ) Barra Lateral da Direita -->

        <div class="image-container col-md-3 col-sm-12">
            <div class="mask">
            </div>
            <div class="main-heading">
                <h1>Portfólio</h1>
            </div>
        </div>

        <!--( b ) Profile Page Content -->

        <div class="content-container col-md-9 col-sm-12">

            <!--( A ) Story of Glory -->

            <div class="clearfix">
                <h2 class="small-heading">Portfólio</h2>
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 col-xs-10 col-xs-offset-1">
                        <div class="row">

                            TRABALHANDO NISSO

                        </div>
                    </div>
                </div>
            </div>


            <!--( D ) Footer -->

            <div class="footer clearfix">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <p class="copyright">Copyright &copy; 2015
                                    <a href="#">Your Company</a>
                                </p>
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <p class="author">
                                    Theme by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<div id="portfolio" class="portfolio-page container-fluid page">

    <div class="row">

        <!--( a ) Portfolio Page Fixed Image Portion -->

        <div class="image-container col-md-3 col-sm-12">
            <div class="mask">
            </div>
            <div class="main-heading">
                <h1>Portfólio</h1>
            </div>
        </div>

        <!--( b ) Portfolio Page Content -->

        <div class="content-container col-md-9 col-sm-12">

            <!--( A ) Portfolio -->

            <div class="portfolio clearfix full-height">
                <h2 class="small-heading">PORTFÓLIO</h2>

                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                        <div class="project-container">
                            <div class="row">

                                <?php
                                foreach ($midias as $midia){
                                    echo $midia;
                                }
                                ?>
                                <div class="project-controls">
                                    <button class="filter active" data-filter="all">Todos</button>
                                    <button class="filter" data-filter=".busdoor">Busdoor</button>
                                    <!--<button class="filter" data-filter=".taxi">Mídia em Táxi</button> -->
                                    <button class="filter" data-filter=".pao">Sacos de Pão</button>
                                    <button class="filter" data-filter=".midias">Gestão de Mídias</button>
                                </div>

                                <div id="projects" class="projet-items clearfix">

                                    <!-- BUSDOOR -->

                                    <!-- RD ENGENHARIA -->

                                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix busdoor" style="display: inline-block;">
                                        <div class="project">
                                            <img src="assets/img/PORTFOLIO/rd_engenharia.jpg" alt="RD Engenharia">
                                            <div class="ovrly">
                                            </div>
                                            <div class="buttons">
                                                <a href="#busdoor_rd" class="fa fa-eye show-popup"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pop-up-box" id="busdoor_rd">
                                        <img alt="RD Engenharia" src="assets/img/PORTFOLIO/rd_engenharia.jpg" class=" hidden-xs">
                                        <div class="popup-content">
                                            <h3>RD Engenharia</h3>
                                            <p>
                                                Campanha realizada em parceria com a Saga Publicidade para o lançamento do
                                                Condomínio Leve Castanheiras. Neste case, foram disponibilizados 40 ônibus
                                                que circularam nas zonas Leste e Norte de Manaus, impactando cerca de XX mil
                                                pessoas por dia.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- COCA COLA -->

                                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix busdoor" style="display: inline-block;">
                                        <div class="project">
                                            <img src="assets/img/PORTFOLIO/coca.jpg" alt="Coca-Cola">
                                            <div class="ovrly">
                                            </div>
                                            <div class="buttons">
                                                <a href="#busdoor_coca" class="fa fa-eye show-popup"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pop-up-box" id="busdoor_coca">
                                        <img alt="Coca Cola" src="assets/img/PORTFOLIO/coca.jpg" class=" hidden-xs">
                                        <div class="popup-content">
                                            <h3>Coca-Cola</h3>
                                            <p>
                                                A Coca-Cola elegeu o busdoor como um dos veículos de impacto para o lançamento
                                                das embalagens retornáveis. Foram 171 ônibus que circularam em toda cidade,
                                                gerando mais de 1 milhão de impressões por dia.

                                            </p>
                                        </div>
                                    </div>

                                    <!-- INSTITUTO DE DESIGN -->

                                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix busdoor" style="display: inline-block;">
                                        <div class="project">
                                            <img src="assets/img/PORTFOLIO/instituto_design.jpg" alt="Instituto de Design">
                                            <div class="ovrly">
                                            </div>
                                            <div class="buttons">
                                                <a href="#busdoor_instituto_design" class="fa fa-eye show-popup"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pop-up-box" id="busdoor_instituto_design">
                                        <img alt="Instituto de Design" src="assets/img/PORTFOLIO/instituto_design.jpg" class=" hidden-xs">
                                        <div class="popup-content">
                                            <h3>Instituto de Design</h3>
                                            <p>
                                                O Instituto de Design escolheu os micro-ônibus que realizam transporte especial
                                                como o meio para divulgar seu lançamento. Cada veículo circula cerca de 220 km/dia
                                                fazendo o transporte de funcionários das fábricas do Distrito Industrial de Manaus
                                                no trajeto bairros/fábricas. Neste case, foram 40 veículos que circularam em toda a
                                                cidade por 60 dias.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- ASSAI -->

                                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix busdoor" style="display: inline-block;">
                                        <div class="project">
                                            <img src="assets/img/PORTFOLIO/assai.jpg" alt="Assai">
                                            <div class="ovrly">
                                            </div>
                                            <div class="buttons">
                                                <a href="#busdoor_assai" class="fa fa-eye show-popup"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pop-up-box" id="busdoor_assai">
                                        <img alt="Assai" src="assets/img/PORTFOLIO/assai.jpg" class=" hidden-xs">
                                        <div class="popup-content">
                                            <h3>Assai Atacadista</h3>
                                            <p>
                                                A rede nacional Assaí Atacadista também escolheu a Publig Mídias para veicular
                                                nos ônibus de Manaus. Nesse job foram 40 veículos que trafegaram na Zona Leste
                                                e Norte de Manaus, impactando 250 mil pessoas por dia.

                                            </p>
                                        </div>
                                    </div>

                                    <!-- Centro FGV -->

                                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix busdoor" style="display: inline-block;">
                                        <div class="project">
                                            <img src="assets/img/PORTFOLIO/fgv.jpg" alt="CENTRO-FGV">
                                            <div class="ovrly">
                                            </div>
                                            <div class="buttons">
                                                <a href="#busdoor_fgv" class="fa fa-eye show-popup"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pop-up-box" id="busdoor_fgv">
                                        <img alt="Centro-FGV" src="assets/img/PORTFOLIO/fgv.jpg" class=" hidden-xs">
                                        <div class="popup-content">
                                            <h3>Centro - FGV</h3>
                                            <p>
                                                A conceituada instituição educacional Centro-FGV escolheu os microônibus que realizam transporte especial como o
                                                meio para divulgar seu lançamento. Os veículos fazem
                                                transporte de funcionários das fábricas do Distrito Industrial de Manaus no trajeto
                                                bairros/fábricas. Neste case, foram 20 veículos que circularam em toda a cidade por 30 dias
                                            </p>
                                        </div>
                                    </div>


                                    <!-- SACOS DE PÃO -->

                                    <!-- MULTI-ANÚNCIO 01 -->

                                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix pao" style="display: inline-block;">
                                        <div class="project">
                                            <img src="assets/img/PORTFOLIO/campanha01.jpg" alt="Campanha Multi-Anúncio 01">
                                            <div class="ovrly">
                                            </div>
                                            <div class="buttons">
                                                <a href="#pao_multi01" class="fa fa-eye show-popup"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pop-up-box" id="pao_multi01">
                                        <img alt="Campanha Multi-Anúncio 01" src="assets/img/PORTFOLIO/campanha01.jpg" class=" hidden-xs">
                                        <div class="popup-content">
                                            <h3>Campanha Multi-Anúncio 01</h3>
                                            <p>
                                                Campanha multi-anúncio veiculada em 12 panificadoras localizadas em bairros da zona sul
                                                da capital amazonense. Foram 30 mil sacos de pão que impactaram cerca de 120 mil pessoas
                                                de uma maneira sustentável e criativa.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- MULTI-ANÚNCIO 02 -->

                                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix pao" style="display: inline-block;">
                                        <div class="project">
                                            <img src="assets/img/PORTFOLIO/campanha02.jpg" alt="Campanha Multi-Anúncio 02">
                                            <div class="ovrly">
                                            </div>
                                            <div class="buttons">
                                                <a href="#pao_multi02" class="fa fa-eye show-popup"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pop-up-box" id="pao_multi02">
                                        <img alt="Campanha Multi-Anúncio 02" src="assets/img/PORTFOLIO/campanha02.jpg" class=" hidden-xs">
                                        <div class="popup-content">
                                            <h3>Campanha Multi-Anúncio 02</h3>
                                            <p>
                                                Campanha multi-anúncio especial de fim de ano. Nesta tiragem, foram selecionados clientes que
                                                desejavam um maior destaque com anúncios em tamanhos maiores que o convencional. Foram 30 mil
                                                sacos de pão que impactaram cerca de 120 mil pessoas de uma maneira sustentável e criativa.
                                            </p>
                                        </div>
                                    </div>


                                    <!-- GESTÃO DE MÍDIAS -->

                                    <!-- INSTITUTO ODONTOLOGICO JÚLIO ANDRADE -->

                                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mix midias" style="display: inline-block;">
                                        <div class="project">
                                            <img src="assets/img/PORTFOLIO/julio_andrade.jpg" alt="Instituto Odontológico Júlio Andrade">
                                            <div class="ovrly">
                                            </div>
                                            <div class="buttons">
                                                <a href="#midias_julioandrade" class="fa fa-eye show-popup"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pop-up-box" id="midias_julioandrade">
                                        <img alt="Instituto Odontológico Júlio Andrade" src="assets/img/PORTFOLIO/julio_andrade.jpg" class=" hidden-xs">
                                        <div class="popup-content">
                                            <h3>Instituto Odontológico Júlio Andrade</h3>
                                            <p>
                                                Um dos mais tradicionais e reconhecidos Institutos de odontologia de Manaus encontrou na internet uma nova forma
                                                de dar um up em seus serviços. O Instituto contou com o suporte para criação de conteúdos estratégicos, gestão de
                                                ferramentas sociais, campanhas pagas, entre outros.
                                            </p>
                                        </div>
                                    </div>


                                    <!-- FIM DOS PROJETOS -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->

            <div class="footer clearfix">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <a href="#"><b>Publig Mídias Alternativas</b></a>
                                </p>
                            </div>

                            <div class="col-md-8 col-sm-12 col-xs-12">
                                <p class="author">
                                    Dúvidas? Ligue (92) 3017-0603 ou 98174-0321 - contato@publig.com.br
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--
7 ) Service Page
-->

<div id="service" class="service-page container-fluid page">
    <div class="row">
        <!--( a ) Portfolio Page Fixed Image Portion -->

        <div class="image-container col-md-3 col-sm-12">
            <div class="mask">
            </div>
            <div class="main-heading">
                <h1>Outros Serviços</h1>
            </div>
        </div>

        <!--( b ) Portfolio Page Content -->

        <div class="content-container col-md-9 col-sm-12">

            <!--( A ) Portfolio -->

            <div class="clearfix full-height">
                <h2 class="small-heading">OUTROS SERVIÇOS</h2>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12">
                        <div class="row">

                            <div class="col-md-4 col-sm-12">
                                <div class="faq-desc-item">
                                    <div class="flip-container text-center" ontouchstart="this.classList.toggle('hover');">
                                        <div class="flipper">
                                            <div class="front">
                                                <i class="fa fa-bus"></i>
                                                <h5>Busdoor</h5>
                                            </div>
                                            <div class="back">
                                                <h5>Busdoor</h5>
                                                <p>Mídia consagrada por proporcionar impacto elevado e com o segundo maior recall entre as mídias exteriores.</p>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#busdoor_modal" style="margin-top: 20px">Saiba mais</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Busdoor-->
                            <div class="modal fade" id="busdoor_modal" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h3 class="modal-title">Busdoor</h3>
                                        </div>
                                        <div class="modal-body">
                                            <p style="text-indent: 15px; text-align: justify">
                                                A Mídia outbus é consagrada por proporcionar impacto elevado e com o segundo maior recall
                                                entre as mídias exteriores, só perdendo para o taxi no índice de lembrança.
                                            </p>

                                            <p style="text-indent: 15px; text-align: justify">
                                                A mídia busdoor já possui reconhecimento em vários países ao redor do mundo por proporcionar
                                                uma visibilidade tanto para motoristas quanto para pedestres. A cada km rodado, é possível
                                                alcançar 25 pessoas, em média. Nossos veículos percorrem mais de 200 km por dia, dessa forma,
                                                um único ônibus tem poder de impactar mais de 150.000 pessoas por mês.
                                            </p>

                                            <p style="text-indent: 15px; text-align: justify">
                                                Esta modalidade de mídia possibilita um alto índice de aproveitamento, atingindo todas as
                                                classes sociais, sendo conhecida por sua grande amplitude de alcance. Além do mais, por
                                                geralmente apresentar uma mensagem concisa e breve, é facilmente compreendida.
                                            </p>
                                            <br>

                                            <p style="text-indent: 15px; text-align: justify">
                                            <h4><b>Busdoor Especial</b></h4>
                                            </p>
                                            <p style="text-indent: 15px; text-align: justify">
                                                Modalidade composta por Micro-ônibus de Transporte Especial que trafegam diariamente em todos os turnos fazendo o transporte dos funcionários das Indústrias do Distrito Industrial.
                                            </p>
                                            <p style="text-indent: 15px; text-align: justify">
                                                Os Micro-ônibus particulares trafegam cerca de 200 km/dia em toda cidade fazendo o transporte dos funcionários das Indústrias do Distrito Industrial.
                                            </p>
                                            <p align="center">
                                                <img src="assets/img/PORTFOLIO/fgv.jpg" width="50%" style="margin: 15px">
                                            </p>
                                            <br>


                                            <p style="text-indent: 15px; text-align: justify">
                                            <h4><b>Busdoor Alternativo</b></h4>
                                            </p>
                                            <p style="text-indent: 15px; text-align: justify">
                                                A zona geográfica mais disputada de Manaus, agora mais perto de você. Modalidade composta por Micro-ônibus do Sistema público de transporte alternativo de Manaus (os amarelinhos).
                                            </p>
                                            <p style="text-indent: 15px; text-align: justify">
                                                Para quem quer anunciar nas duas maiores zonas de Manaus. Os veículos de transporte alternativo atuam com foco nas regiões leste e norte de Manaus.
                                            </p>
                                            <p align="center">
                                                <img src="assets/img/PORTFOLIO/instituto_design.jpg" width="50%" style="margin: 15px">
                                            </p>
                                            <br>


                                            <p style="text-indent: 15px; text-align: justify">
                                            <h4><b>Busdoor Urbano</b></h4>
                                            </p>
                                            <p style="text-indent: 15px; text-align: justify">
                                                Modalidade composta pela frota padrão de ônibus coletivos urbano de Manaus. Ideal para quem não quer abrir mão de marcar presença em toda a cidade.
                                            </p>
                                            <p align="center">
                                                <img src="assets/img/PORTFOLIO/coca.jpg" width="50%" style="margin: 15px">
                                            </p>
                                            <br>

                                            <p align="center">
                                                <button onclick="euquero()" type="button" class="btn btn-success btn-lg">EU QUERO!</button>
                                            </p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="faq-desc-item">
                                    <div class="flip-container text-center" ontouchstart="this.classList.toggle('hover');">
                                        <div class="flipper">
                                            <div class="front">
                                                <i class="fa fa-comments"></i>
                                                <h5>Gestão de Mídia</h5>
                                            </div>
                                            <div class="back">
                                                <!-- <i class="fa fa-lightbulb-o fa-fw"></i> -->
                                                <h5>Gestão de Mídia</h5>
                                                <p>Produção de conteúdo estratégico, gestão de ferramentas sociais, respostas reativas, campanhas em FacebookAds e Google Adword.</p>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#midias_modal">Saiba mais</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Gestao de Midias-->
                            <div class="modal fade" id="midias_modal" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h3 class="modal-title">Gestão de Mídias</h3>
                                        </div>
                                        <div class="modal-body">
                                            <p style="text-indent: 15px; text-align: justify">
                                                Leve sua empresa até seus clientes de maneira efetiva, sem desperdício de tempo e energias.
                                            </p>
                                            <p style="text-indent: 15px; text-align: justify">
                                                O relevante papel da Internet já está mais que comprovado, mas, para conquistar clientes e
                                                alavancar vendas, não basta possuir uma conta no Facebook, Twitter, ou qualquer outra ferramenta.
                                            </p>
                                            <p style="text-indent: 15px; text-align: justify">
                                                Gerenciar as ferramentas sociais requer muita dedicação e conhecimento. A Publig dá suporte
                                                através de uma equipe composta por Social Media e Designer que trabalha em contato direto com
                                                seus clientes para oferecer a melhor experiência. Veja como funciona:
                                            </p>
                                            <p align="center">
                                                <img src="assets/img/infograficoGestaoMidias.jpg" width="80%" style="margin: 15px">
                                            </p>
                                            <p style="text-indent: 15px; text-align: justify">Seus esforços precisam ser direcionados para cumprir a sua missão primordial.
                                                Deixe nossos especialistas cuidarem da sua imagem na internet. Trabalhamos com vários pacotes, consulte-nos!
                                            </p>

                                            <br>
                                            <p align="center">
                                                <button onclick="euquero()" type="button" class="btn btn-success btn-lg">EU QUERO!</button>
                                            </p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="faq-desc-item">
                                    <div class="flip-container text-center" ontouchstart="this.classList.toggle('hover');">
                                        <div class="flipper">
                                            <div class="front">
                                                <i class="fa fa-cubes"></i>
                                                <h5>Saco de Pão</h5>
                                            </div>
                                            <div class="back">
                                                <!-- <i class="fa fa-paint-brush fa-fw"></i> -->
                                                <h5>Saco de Pão</h5>
                                                <p>Mídia inovadora, ecologicamente aprovada e posicionada em um lugar mais que privilegiado: a mesa de seu cliente!</p>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#pao_modal" style="margin-top: 10px">Saiba mais</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Saco de Pão-->
                            <div class="modal fade" id="pao_modal" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h3 class="modal-title">Saco de Pão</h3>
                                        </div>
                                        <div class="modal-body">
                                            <p style="text-indent: 15px; text-align: justify">
                                                Diariamente, as padarias entregam a seus clientes centenas de sacos de pão. Agora, estas
                                                embalagens passam a ser um novo suporte para a publicidade <i>in home</i> - aquela que
                                                efetivamente entra na casa do consumidor.
                                            </p>
                                            <p style="text-indent: 15px; text-align: justify">
                                                A cada campanha - 30 mil sacos de 5kg (que comportam de 06 a 10 pães) - aproximadamente 120 mil
                                                pessoas são impactadas, uma vez que, em média, 04 pessoas são alcançadas a cada embalagem.
                                            </p>
                                            <p align="center">
                                                <img src="assets/img/sacopao.jpg" width="80%" style="margin: 15px">
                                            </p>
                                            <p style="text-indent: 15px; text-align: justify">
                                                O material utilizado é de alta qualidade. Impresso com tintas vegetais e atóxicas em papel Kraft
                                                branco em conformidade com as normas da ANVISA.
                                            </p>
                                            <p style="text-indent: 15px; text-align: justify">
                                                Nossos sacos de pão são coloridos, impressos com qualidade fotográfica (em 08 cores) e possuem
                                                um visual inovador que captura a atenção dos clientes. Este tipo de mídia já conquistou a
                                                credibilidade de grandes empresas do Mundo, sendo explorada por diversos países da América e Europa.
                                                No Brasil, grandes marcas utilizam e aprovam esta mídia inovadora.
                                            </p>

                                            <br>
                                            <p align="center">
                                                <button onclick="euquero()" type="button" class="btn btn-success btn-lg">EU QUERO!</button>
                                            </p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <br/>

            <!-- Footer -->

            <div class="footer clearfix">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <a href="#"><b>Publig Mídias Alternativas</b></a>
                                </p>
                            </div>

                            <div class="col-md-8 col-sm-12 col-xs-12">
                                <p class="author">
                                    Dúvidas? Ligue (92) 3017-0603 ou 98174-0321 - contato@publig.com.br
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--
4 ) Sobre
-->

<div id="contact" class="contact-page container-fluid page">
    <div class="row">
        <!--( A ) Barra Lateral -->

        <div class="image-container col-md-3 col-sm-12">
            <div class="mask">
            </div>
            <div class="main-heading">
                <h1>Sobre</h1>
            </div>
        </div>

        <!--( B ) Contact Page Content -->

        <div class="content-container col-md-9 col-sm-12">

            <!-- ( C ) SOBRE -->

            <div class="clearfix">
                <h2 class="small-heading">PUBLIG MÍDIAS ALTERNATIVAS</h2>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                        <div class="row">
                            <p style="text-align: justify; text-indent: 20px">
                                Especializada em mídias de impacto, a Publig Mídias Alternativas chegou ao mercado
                                manauara em maio de 2014 para trazer inovação em propaganda. Queremos ser mais que um
                                veículo para suas campanhas publicitárias. Trabalhamos para oferecer uma experiência
                                diferenciada às agências e aos anunciantes em geral.
                            </p>
                            <p style="text-align: justify; text-indent: 20px">
                                Buscamos oportunizar um contato mais próximo entre você e seus clientes em potencial.
                                Através de nossos serviços, sua marca passa a incorporar o dia-a-dia deles, possibilitando
                                a melhor absorção da informação e um resultado satisfatório.
                            </p>
                            <p style="text-align: justify; text-indent: 20px">
                                Em breve estaremos ampliando nossa área de atuação para outros estados da região norte do país, aguarde.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!--( D ) NOSSOS NUMEROS -->

            <div class="clearfix">
                <h2 class="small-heading">NOSSOS NÚMEROS</h2>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                        <div class="row">

                            <div class="services col-md-4  col-xs-12">
                                <div class="facts">
                                    <div class="facts-overlay">
                                        <i class="fa fa-bus fa-3x"></i>
                                        <p style="font-size: 29px"><?= $numeros['busdoors']?></p>
                                        <p class="text-capitalize">busdoors</p>
                                    </div>

                                </div>
                            </div>

                            <div class="services col-md-4  col-xs-12">
                                <div class="facts">
                                    <div class="facts-overlay">
                                        <i class="fa fa-taxi fa-3x"></i>
                                        <p style="font-size: 29px"><?= $numeros['taxis']?></p>
                                        <p class="text-capitalize">táxis</p>
                                    </div>

                                </div>
                            </div>

                            <div class="services col-md-4  col-xs-12">
                                <div class="facts">
                                    <div class="facts-overlay">
                                        <i class="fa fa-cubes fa-3x"></i>
                                        <p style="font-size: 29px"><?= $numeros['sacosPao']?></p>
                                        <p class="text-capitalize">sacos de pão</p>
                                    </div>

                                </div>
                            </div>

                            <div class="services col-md-4  col-xs-12">
                                <div class="facts">
                                    <div class="facts-overlay">
                                        <i class="fa fa-dashboard fa-3x"></i>
                                        <p style="font-size: 29px"><?= $numeros['kmRodados']?></p>
                                        <p class="text-capitalize">km rodados por nossos veículos</p>
                                    </div>

                                </div>
                            </div>

                            <div class="services col-md-4  col-xs-12">
                                <div class="facts">
                                    <div class="facts-overlay">
                                        <i class="fa fa-users fa-3x"></i>
                                        <p style="font-size: 29px"><?= $numeros['impactoSacoPao']?></p>
                                        <p class="text-capitalize">impactos de mídia em saco de pão</p>
                                    </div>

                                </div>
                            </div>

                            <div class="services col-md-4  col-xs-12">
                                <div class="facts">
                                    <div class="facts-overlay">
                                        <i class="fa fa-coffee fa-3x"></i>
                                        <p id="xicarasCafe" style="font-size: 29px"></p>
                                        <p class="text-capitalize">xícaras de café</p>
                                        <br>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- NOSSO TIME

            <div class="clearfix full-height">
                <h2 class="small-heading">CONHEÇA NOSSO TIME</h2>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                        <div class="row">

                            <div class="col-md-4 col-xs-12">
                                <div class="team-member-box center-block text-center">
                                    <img src="assets/img/guilherme.jpg" class="img-responsive">
                                    <h4 class="text-capitalize">Guilherme Alves</h4>
                                    <p class="text-uppercase">Diretor Comercial</p>
                                </div>
                            </div>

                            <div class="col-md-4 col-xs-12">
                                <div class="team-member-box center-block text-center">
                                    <img src="assets/img/ismael.jpg" class="img-responsive">
                                    <h4 class="text-capitalize">Ismael Rabelo</h4>
                                    <p class="text-uppercase">Diretor Financeiro</p>
                                </div>
                            </div>

                            <div class="col-md-4 col-xs-12">
                                <div class="team-member-box center-block text-center">
                                    <img src="assets/img/pamela.jpg" class="img-responsive">
                                    <h4 class="text-capitalize">Pâmela Costa</h4>
                                    <p class="text-uppercase">Diretora de Criação</p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div> -->

            <!--(  ) Contact Form -->

            <div class="clearfix full-height">
                <h2 class="small-heading">CONTATE-NOS</h2>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                        <div class="contact-info">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="data">
                                        <i class="fa fa-envelope"></i>
                                        <span>
                                                contato@publig.com.br
                                            </span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="data">
                                        <i class="fa fa-phone"></i>
                                        <span>
                                               (92) 3017-0603 / 98174-0321
                                            </span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">

                            <div class="clearfix full-height">
                                <h2 class="small-heading">PEÇA AGORA SEU ORÇAMENTO</h2>
                                <form  id="contactForm" class="contact-form" method="post" action="php/contact.php">

                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input  name="nome" type="text" class="form-control" id="nome" required="required" placeholder=" Nome">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control" id="email" required="required" placeholder="  Email">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input  name="agencia" type="text" class="form-control" id="agencia" required="required" placeholder=" Agência/Empresa">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input  name="servico" type="text" class="form-control" id="servico" required="required" placeholder=" Serviço">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input  name="previsao" type="text" class="form-control" id="previsao" required="required" placeholder=" Previsão para Veiculação">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input  name="quantidade" type="text" class="form-control" id="quantidade" placeholder=" Quantidade">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-12">
                                        <textarea name="mensagem" type="text" class="form-control" id="mensagem" rows="5" required="required" placeholder=" Deixe sua mensagem"></textarea>
                                    </div>

                                    <div class="col-md-4 col-xs-12">
                                        <input type="submit" id="cfsubmit" class="btn btn-send" value="Solicitar Orçamento">
                                    </div>
                                    <div id="contactFormResponse" class="col-md-8 col-xs-12"></div>

                                    <!-- GATILHO -->
                                    <div id="publig"></div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ( D ) Footer -->

            <div class="footer clearfix">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <a href="#"><b>Publig Mídias Alternativas</b></a>
                                </p>
                            </div>

                            <div class="col-md-8 col-sm-12 col-xs-12">
                                <p class="author">
                                    Dúvidas? Ligue (92) 3017-0603 ou 98174-0321 - contato@publig.com.br
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--
9 ) Javascript
- -->

<script type="text/javascript" src="assets/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/modernizr.js"></script>
<script type="text/javascript" src="assets/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.popup.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/contact.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>

<script>
    function copyTextToClipboard(text) {
        var textArea = document.createElement("textarea");

        textArea.style.position = 'fixed';
        textArea.style.top = 0;
        textArea.style.left = 0;
        textArea.style.width = '2em';
        textArea.style.height = '2em';
        textArea.style.padding = 0;
        textArea.style.border = 'none';
        textArea.style.outline = 'none';
        textArea.style.boxShadow = 'none';
        textArea.style.background = 'transparent';
        textArea.value = text;

        document.body.appendChild(textArea);
        textArea.select();

        try {
            var successful = document.execCommand('copy');
            var msg = successful ? 'successful' : 'unsuccessful';
            console.log('Copying text command was ' + msg);
        } catch (err) {
            console.log('Oops, unable to copy');
            window.prompt("Copie para área de transferência: Ctrl+C e tecle Enter", text);
        }

        document.body.removeChild(textArea);
    }

    // Teste
    var copyTest = document.querySelector('.copyTest');
    copyTest.addEventListener('click', function(event) {
        copyTextToClipboard('contato@publig.com.br');
    });
</script>



<!-- XICARAS DE CAFE -->
<script>
    var date1 = new Date('2014/05/04')
    var date2 = new Date();

    /*Subtrai a segunda data em milisegundos pela primeira e usa função abs para retornar o valor absoluto*/
    var timeDiff = Math.abs(date2.getTime() - date1.getTime());

    /*agora ele divide o valor da diferença das datas em milisegundos pela quantidade de milisegundos em um dia e usa ceil para
     retorna o menor número inteiro*/
    var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));

    document.getElementById("xicarasCafe").innerHTML = diffDays;
</script>

<!-- BOTAO EU QUERO -->

<script>
    $(document).ready(function() {
        window.location.href='#publig';
    });
    function euquero(){
        window.location.href='http://www.publig.com.br/#contact';
        window.location.reload();
    }
</script>

</body>
</html>