<!DOCTYPE html>
<html lang="pt-br">

    <title>Caixa Imóveis | Gestora</title>

    <?php
        include 'include/head.php';
    ?>

    <body class="hotSite">

        <!-- Header -->
        <header id="home" class="gestora-active">
            <?php
                include 'include/menuTop.php';
            ?>

            <!-- Navbar -->
            <nav id="mainNav" class="navbar navbar-expand-lg">
                <div class="container">

                    <a class="navbar-brand js-scroll-trigger" href="index.php"></a>

                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item" >
                                <a class="nav-link js-scroll-trigger" href="#home">Início</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#about">Sobre a empresa</a>
                            </li>
                            <li class="nav-item" >
                                <a class="nav-link js-scroll-trigger" href="#compliance">Compliance</a>
                            </li>

                            <?php
                                include 'include/mobile-menu.php';
                            ?>
                        </ul>

                        <a href="atendimento.php" class="btn btn-ghost-white my-2 my-sm-0">Atendimento</a>

                    </div>

                </div>
            </nav>

            <!-- Hero Text-->
            <div class="container text-center">

                <h1>Gestão Eficiente de Capital</h1>
                <h6>A Caixa Imóveis Gestão de Recursos Financeiros S.A. é uma empresa do grupo Caixa Imóveis e, por consequência, do Conglomerado Caixa, criada para oferecer os melhores ativos aos seus investidores.</h6>
                <a href="#" class="btn btn-default" data-toggle="modal" data-target="#modalApresentacaoForm">Solicite uma apresentação</a>

            </div>
            
        </header>

        <!-- About -->
        <section id="about">
            <div class="container">

                <div class="row justify-content-md-center">

                    <div class="col-md-6 title">
                        <h2>A Empresa</h2>
                        <hr>
                        <p>A Caixa Imóveis Gestão de Recursos Financeiros S.A. foi constituída em dezembro de 2018 após a devida autorização pela CVM. A companhia nasceu com o objetivo de oferecer aos seus clientes a recomendação e a gestão de ativos com base na análise quantitativa dos investimentos.
                        <br/><br/>A empresa busca investir em ativos que tenham retornos constantes no longo prazo aliado a rigorosa gestão de risco visando à preservação do capital.</p>
                    </div>

                    <div class="col-md-auto space"></div>

                    <div class="col-md-4 title">
                        <h2>Filosofia de Investimento</h2>
                        <hr>
                        <p>A Caixa Imóveis Gestora possui uma metodologia proprietária de análise quantitativa e qualitativa aplicada na gestão de capitais que realiza. Essa metodologia busca retornos constantes e a preservação do capital respeitando os objetivos econômicos de nossos investidores.</p>
                    </div>

                </div>

            </div>
        </section>

        <!-- Value -->
        <section id="compliance" class="bgGray">
            <div class="container">

                <div class="row text-center">

                    <div class="col-md-12 title">
                        <h2>Compliance</h2>
                        <hr>
                    </div>

                </div>
                
                <div class="row text-center links">
                    
                    <div class="col-md-4">
                        <a target="_blank" href="doc/01-Caixa-Imóveis-Gestora-Gerenciamento-de-Risco-e-Liquidez.pdf">
                            <label></label>
                            <span>Gerenciamento de Risco e Liquidez</span>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a target="_blank" href="doc/02-Caixa-Imóveis-Gestora-Metodologia-de-Gerenciamento-de-Risco.pdf">
                            <label></label>
                            <span>
                                Metodologia de Gerenciamento de Risco
                            </span>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a target="_blank" href="doc/03-Caixa-Imóveis-Gestora-Metodologia-de-Decisão-de-Investimentos.pdf">
                            <label></label>
                            <span>
                                Metodologia de Decisão de Investimentos
                            </span>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a target="_blank" href="doc/04-Caixa-Imóveis-Gestora-Política-Conheça-seu-Cliente-e-Prevenção-de-Lavagem-de-Dinheiro.pdf">
                            <label></label>
                            <span>
                                Política Conheça seu Cliente e Prevenção de Lavagem de Dinheiro
                            </span>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a target="_blank" href="doc/05-Caixa-Imóveis-Gestora-Política-De-Seleção-Contratação-e-Supervisão-de-Prestadores-de-Serviços.pdf">
                            <label></label>
                            <span>
                                Política de Seleção, Contratação e Supervisão de Prestadores de Serviços
                            </span>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a target="_blank" href="doc/07-Caixa-Imóveis-Gestora-Política-de-Exercício-de-Direito-de-Voto-em-Assembléias-Gerais.pdf">
                            <label></label>
                            <span>
                                Política de Exercício de Direito de Voto em Assembléias Gerais
                            </span>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a target="_blank" href="doc/08-Caixa-Imóveis-Gestora-Manual-de-Marcação-de-Mercado.pdf">
                            <label></label>
                            <span>
                                Manual de Marcação de Mercado
                            </span>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a target="_blank" href="doc/09-Caixa-Imóveis-Gestora-Código-de-Ética-e-Conduta-2019.pdf">
                            <label></label>
                            <span>Código de Ética e Conduta 2019</span>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a target="_blank" href="doc/06-Caixa-Imóveis-Gestora-Manual-de-Rateio-de-Ordens.pdf">
                            <label></label>
                            <span>Manual de Rateio de Ordens</span>
                        </a>
                    </div>

                </div>

            </div>
        </section>


        <!-- Footer -->
        <?php
            include 'include/footer.php';
        ?>
    
    </body>

</html>