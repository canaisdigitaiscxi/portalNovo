<!DOCTYPE html>
<html lang="pt-br">

    <title>Caixa Imóveis</title>

    <?php
        include 'include/head.php';
    ?>

    <body>

        <!-- Header -->
        <header id="home" class="institucional-active">
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
                                <a class="nav-link js-scroll-trigger" href="#thumbs-elements">Eixos Negociais</a>
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

                <h1>Simplicidade para quem compra. <br/>Velocidade para quem vende.</h1>
                <h6>A Caixa Imóveis foi criada pela Caixa para oferecer ainda mais inovação e modernidade ao setor imobiliário, tendo como ponto de partida a esteira de crédito líder do mercado.</h6>
                <a href="#" class="btn btn-default" data-toggle="modal" data-target="#modalApresentacaoForm">Solicite uma apresentação</a>

            </div>
            
        </header>

        <!-- About -->
        <section id="about">
            <div class="container-fluid">

                <div class="row justify-content-end">

                    <div class="col-md-4 title">
                        <h2>Uma empresa do<br/>conglomerado Caixa</h2>
                        <hr>
                        <p>Com a relevância da Caixa e a agilidade de uma startup, a Caixa Imóveis atua no ambiente digital por meio de uma plataforma de soluções imobiliárias, que usa recursos de inteligência artificial, gamificação e BI, entre outros, para integrar e melhorar a experiência de todos os atores envolvidos na compra, venda e financiamento de um imóvel.</p>
                    </div>

                    <div class="col-md-7 px-lg-0">
                        <div class="boxMissionValues">

                            <div class="row">
                                <div class="col-md-10">
                                    
                                    <b>Missão</b>
                                    <p>
                                        Unir o ecossistema imobiliário com soluções tecnológicas inteligentes para incrementar a qualidade de vida dos brasileiros.
                                    </p>

                                    <hr>

                                    <b>Visão</b>
                                    <p>
                                        Ser referência na contratação de crédito habitacional, na intermediação de compra e venda de imóveis e no desenvolvimento de soluções inovadoras para o ecossistema imobiliário.
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- Value -->
        <section id="value" class="bgBlue">
            <div class="container-fluid">

                <div class="row justify-content-end">

                    <div class="col-md-2 title">
                        <h2>Valores</h2>
                        <hr>
                    </div>

                    <div class="col-md-9 px-lg-0">
                        <div class="one owl-carousel">

                            <div class="item">                            
                                <img src="assets/img/icons/ico-integridade.svg" alt="Icon">
                                <h3>Integridade</h3>
                                <p>A Caixa Imóveis combate o tráfico de influência e as práticas de suborno e de propina por parte de qualquer pessoa ou entidade pública ou privada e busca influenciar seus fornecedores e parceiros para que façam o mesmo.</p>
                            </div>

                            <div class="item">                            
                                <img src="assets/img/icons/ico-simplicidadeAgilidade.svg" alt="Icon">
                                <h3>Simplicidade e agilidade</h3>
                                <p>A Caixa Imóveis age com o devido senso de urgência e trabalha em um ambiente aberto e transparente para que a comunicação e a tomada de decisão sejam simples, constantes e ágeis.</p>
                            </div>

                            <div class="item">                            
                                <img src="assets/img/icons/ico-sustentabilidade.svg" alt="Icon">
                                <h3>Sustentabilidade</h3>
                                <p>A Caixa Imóveis age com o devido senso de urgência e trabalha em um ambiente aberto e transparente para que a comunicação e a tomada de decisão sejam simples, constantes e ágeis.</p>
                            </div>

                            <div class="item">                            
                                <img src="assets/img/icons/ico-valorizacaoRespeito.svg" alt="Icon">
                                <h3>Valorização da diversidade e combate à discriminação</h3>
                                <p>A Caixa Imóveis não tolera a discriminação sob qualquer pretexto e valoriza as diferenças como condição fundamental para a existência de uma relação ética e de desenvolvimento da humanidade. </p>
                            </div>

                            <div class="item">                            
                                <img src="assets/img/icons/ico-governanca.svg" alt="Icon">
                                <h3>Boa governança</h3>
                                <p>A Caixa Imóveis, no cumprimento de suas finalidades, sempre observa os princípios da legalidade, impessoalidade, moralidade, publicidade e transparência, economicidade e da eficiência.</p>
                            </div>

                            <div class="item">                            
                                <img src="assets/img/icons/ico-excelencia.svg" alt="Icon">
                                <h3>Excelência e senso de dono</h3>
                                <p>A Caixa Imóveis entende que ser dono representa o estado máximo de responsabilidade e espera que seus colaboradores pensem de forma estratégica e tomem decisões como donos da empresa, sempre em benefício do todo.</p>
                            </div>

                            <div class="item">                            
                                <img src="assets/img/icons/ico-empatia.svg" alt="Icon">
                                <h3>Empatia e respeito</h3>
                                <p>A Caixa Imóveis entende que ser dono representa o estado máximo de responsabilidade e espera que seus colaboradores pensem de forma estratégica e tomem decisões como donos da empresa, sempre em benefício do todo.</p>
                            </div>

                        </div>
                    </div>

                </div>
                

            </div>
        </section>

        <!-- Eixos -->
        <section id="thumbs-elements">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 title text-center">
                        <h2>Eixos negociais</h2>
                        <hr>
                    </div>
                </div>
                
                <div class="row">
                    
                    <div class="col-xl-3 col-sm-6 text-center">
                        <img src="assets/img/icons/ico-gestor-1.svg" alt="Icon">
                        <h3>Integridade</h3>
                        <p>A Caixa Imóveis combate o tráfico de influência e as práticas de suborno e de propina por parte de qualquer pessoa ou entidade pública ou privada e busca influenciar seus fornecedores e parceiros para que façam o mesmo.</p>
                    </div>

                    <div class="col-xl-3 col-sm-6 text-center">
                        <img src="assets/img/icons/ico-creditoImobiliario-2.svg" alt="Icon">
                        <h3>Crédito imobiliário Digital</h3>
                        <p>A Caixa Imóveis desenvolveu uma plataforma digital, com um marketplace exclusivo, onde o cliente terá acesso ao crédito imobiliário da Caixa e uma nova experiência na compra financiada de um imóvel.</p>
                    </div>

                    <div class="col-xl-3 col-sm-6 text-center">
                        <img src="assets/img/icons/ico-leadsCaixa-3.svg" alt="Icon">
                        <h3>Leads Caixa Imóveis</h3>
                        <p>Para quem atua diretamente na venda, a Caixa Imóveis também traz mudanças significativas. A principal delas está na oferta de leads exclusivos, que entregam compradores potenciais já com o crédito imobiliário da Caixa pré-aprovado.</p>
                        
                    </div>

                    <div class="col-xl-3 col-sm-6 text-center">
                        <img src="assets/img/icons/ico-solucoes-4.svg" alt="Icon">
                        <h3>Soluções Imobiliárias</h3>
                        <p>Oferta de serviços cartoriais online, gestão de fundos imobiliários, reestruturação de operações de grandes clientes e muitas soluções inovadoras já estão na esteira de desenvolvimento da Caixa Imóveis.</p>
                        
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