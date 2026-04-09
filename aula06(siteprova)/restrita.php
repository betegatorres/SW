<?php 
    $nome = $_GET['nome'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PHP</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/team/PHP-logo.svg.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/team/PHP-logo.svg.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">PHP</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Ecossistema</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Evolução</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Desenvolvedores</a></li>
                        <li class="nav-item">
                        <a style=" color: red;" class="nav-link" href="index.html" onclick="return confirm('Tem certeza que deseja voltar? Você será desconectado do login ao voltar a página inicial.');">
                        Voltar
                        </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading"><p >Bem vindo <?php echo $nome; ?> a sua</p>
                <div style=" color: red;" class="masthead-heading text-uppercase">ÁREA RESTRITA</div>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">PHP</h2>
                    <h3 class="section-subheading text-muted">Que tal aprendermos um pouco sobre o php?</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Alta Performance</h4>
                        <p class="text-muted">Com o lançamento do motor Zend Engine, o PHP tornou-se uma das linguagens de script mais rápidas do mercado, processando milhões de requisições com baixo consumo de memória.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Multiplataforma</h4>
                        <p class="text-muted">O código PHP pode ser executado em qualquer sistema operacional, seja Windows, Linux ou macOS, garantindo total liberdade para o desenvolvedor e para a hospedagem.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Segurança Nativa</h4>
                        <p class="text-muted">A linguagem oferece funções robustas de criptografia, filtragem de dados e proteção contra ataques comuns, como SQL Injection e XSS, se usada corretamente.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">ECOSSISTEMA PHP</h2>
                    <h3 class="section-subheading text-muted">Grandes projetos e soluções desenvolvidas com a linguagem.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/word.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">WordPress (CMS)</div>
                                <div class="portfolio-caption-subheading text-muted">Gestão de Conteúdo</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/laravel.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Laravel (Framework)</div>
                                <div class="portfolio-caption-subheading text-muted">Desenvolvimento Ágil</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/magento.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">E-commerce</div>
                                <div class="portfolio-caption-subheading text-muted">Vendas Online</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/seguranca.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Sistemas Bancários</div>
                                <div class="portfolio-caption-subheading text-muted">Segurança e Dados</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/wikipedia-logo.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Wikipedia (Enciclopédia)</div>
                                <div class="portfolio-caption-subheading text-muted">Escala Global</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/painel.png" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Painéis Administrativos</div>
                                <div class="portfolio-caption-subheading text-muted">Gestão Interna</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Evolução Cronológica</h2>
                    <h3 class="section-subheading text-muted">A Evolução Cronológica do PHP</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/php.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>1994-1995 — O Nascimento</h4>
                                <h4 class="subheading">Rasmus Lerdorf e o PHP/FI</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">O PHP nasceu como um conjunto de binários CGI escritos em C para monitorar acessos ao currículo de seu criador. Originalmente chamado de "Personal Home Page Tools", ele era simples, mas permitia a criação de formulários e bancos de dados básicos, algo revolucionário para a época.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/engrenagem.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>1997-1998 — A Reescrita Total</h4>
                                <h4 class="subheading">PHP 3 e a Expansão Global</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Andi Gutmans e Zeev Suraski reescreveram o código base, criando o PHP 3.0. Foi nesta fase que a linguagem ganhou o acrônimo recursivo "PHP: Hypertext Preprocessor" e introduziu uma interface de extensibilidade que atraiu milhares de desenvolvedores ao redor do mundo.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/evolução.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2004 — A Revolução dos Objetos</h4>
                                <h4 class="subheading">PHP 5 e o Motor Zend</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Com o lançamento da versão 5, o PHP introduziu o Zend Engine II. Esta etapa foi crucial pois trouxe um modelo de Orientação a Objetos robusto e suporte avançado ao XML, transformando o PHP de uma linguagem de scripts simples em uma ferramenta poderosa para sistemas corporativos.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/velocimetro.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2015-2020 — Alta Performance e Modernidade</h4>
                                <h4 class="subheading">PHP 7, PHP 8 e o JIT</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">A versão 7 dobrou a velocidade da linguagem, enquanto o PHP 8 introduziu a compilação JIT (Just-In-Time). Atualmente, o PHP é uma linguagem moderna, com tipagem forte e recursos de alto desempenho que sustentam mais de 75% dos sites da internet mundial.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image bg-black">
                            <h4>
                                PHP
                                <br />
                                Continua
                                <br />
                                Evoluindo!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Os Grandes nomes para o PHP</h2>
                    <h3 class="section-subheading text-muted">"Os Arquitetos da Linguagem: Conheça as mentes por trás da ferramenta que move 75% da web moderna."</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/rasmus.jpg" alt="..." />
                            <h4>Rasmus Lerdorf</h4>
                            <p class="text-muted">Criador do PHP</p>
                            <p class="text-muted">Em 1994, escreveu os scripts originais em C que deram origem ao PHP. Ele é o "pai" da linguagem e continua sendo uma figura central na comunidade, garantindo que o PHP permaneça simples e eficiente para a web.</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/rlerdorf" aria-label="Rasmus Lerdorf LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                            
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/zeev_suraski.jpg" alt="..." />
                            <h4>Zeev Suraski</h4>
                            <p class="text-muted">Co-fundador da Zend</p>
                            <p class="text-muted">Junto com Andi Gutmans, ele reescreveu o núcleo do PHP para a versão 3.0, tornando-o uma linguagem de programação de verdade. Ele também co-criou o Zend Engine, o motor que faz o PHP rodar rápido em milhões de servidores até hoje.</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://il.linkedin.com/in/zeevsuraski" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/andi_gutmans.jpg" alt="..." />
                            <h4>Andi Gutmans</h4>
                            <p class="text-muted">Arquiteto de Software e Co-fundador</p>
                            <p class="text-muted">Foi um dos arquitetos fundamentais do PHP 5, que trouxe a Orientação a Objetos para a linguagem, permitindo que o PHP fosse usado em grandes sistemas corporativos. É uma das mentes por trás da profissionalização do ecossistema PHP.</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/andigutmans" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Matheus Torres Betega Website 2026</div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">WordPress (CMS)</h2>
                                    <p class="item-intro text-muted">Gestão de Conteúdo</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/word.jpg" alt="..." />
                                    <p>Descrição: O maior CMS do mundo, que move mais de 40% da internet, é totalmente construído em PHP.</p>
                                    <ul class="list-inline">
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Fechar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Laravel (Framework)</h2>
                                    <p class="item-intro text-muted">Desenvolvimento Ágil</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/laravel.jpg" alt="..." />
                                    <p>Descrição: O framework PHP mais popular da atualidade, focado em código limpo e produtividade extrema.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Fechar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">E-commerce (Magento/WooCommerce)</h2>
                                    <p class="item-intro text-muted">Vendas Online.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/magento.jpg" alt="..." />
                                    <p>Descrição: PHP é a base das maiores plataformas de comércio eletrônico, lidando com pagamentos e estoques globais.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Fechar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Sistemas Bancários</h2>
                                    <p class="item-intro text-muted">Segurança e Dados.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/seguranca.jpg" alt="..." />
                                    <p>Descrição: Utilizado por diversas instituições financeiras para processamento de transações e integração de APIs seguras.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Fechar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Wikipedia (Enciclopédia)</h2>
                                    <p class="item-intro text-muted">Escala Global</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/wikipedia-logo.jpg" alt="..." />
                                    <p>Descrição: A maior base de conhecimento do mundo utiliza PHP para servir milhões de acessos simultâneos diariamente.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Fechar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Painéis Administrativos</h2>
                                    <p class="item-intro text-muted">Gestão Interna</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/painel.png" alt="..." />
                                    <p>Descrição: Criação de dashboards complexos para controle de usuários, relatórios e automação de processos empresariais.</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Fechar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
