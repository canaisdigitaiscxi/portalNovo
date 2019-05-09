<!DOCTYPE html>
<html lang="pt-br">

    <title>Caixa Imóveis | Para o mercado</title>

    <?php
        include 'include/head.php';
    ?>

    <body class="hotSite">

        <!-- Header -->
        <header id="home" class="mercado-active">
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
                                <a class="nav-link js-scroll-trigger" href="#about">Sobre</a>
                            </li>
                            <li class="nav-item" >
                                <a class="nav-link js-scroll-trigger" href="#diferenciais">Diferenciais</a>
                            </li>
                            <li class="nav-item" >
                                <a class="nav-link js-scroll-trigger" href="#thumbs-elements">Atuação</a>
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

                <h1>Feche negócios mais rapidamente</h1>
                <h6>A Caixa Imóveis chegou para ajudar os CCAs, as construtoras e incorporadoras, os corretores e corretoras imobiliárias e todo mercado imobiliário a trabalhar com produtividade e entregar uma experiência diferente ao comprador de imóveis.</h6>
                <a href="#" class="btn btn-default" data-toggle="modal" data-target="#modalApresentacaoForm">Solicite uma apresentação</a>

            </div>
            
        </header>

        <!-- About -->
        <section id="about">
            <div class="container">

                <div class="row justify-content-md-center text-center">

                    <div class="col-md-10 title ">
                        <h2>Um novo mercado para todos</h2>
                        <hr>
                        <p>A cada dia mais brasileiros buscam a internet para vender, comprar e financiar imóveis. A conveniência do meio somada à crescente segurança das operações revelam um mercado potencial em pleno desenvolvimento.
                        <br/><br/>A partir dessa visão, a Caixa Imóveis vem trabalhando em sua plataforma digital, que tem por objetivo oferecer inteligência, gestão e capacitação aos diferentes atores do setor imobiliário.</p>
                    </div>

                </div>

            </div>
        </section>

        <section id="diferenciais" class="bgBlue">
            <div class="container">

                <div class="row justify-content-end">

                    <div class="col-md-12 title">
                        <h2>Diferenciais</h2>
                        <hr>
                    </div>

                    <div class="col-md-12">
                        <div class="two owl-carousel">

                            <div class="item">                            
                                <img src="assets/img/icons/ico-inteligencia.svg" alt="Icon">
                                <h3>Inteligência</h3>
                                <p>Melhorar a experiência do cliente durante o processo de compra, venda e financiamento de um imóvel depende de decisões rápidas e assertivas. Por isso, a Caixa Imóveis irá disponibilizar para seus credenciados um sistema completo de inteligência imobiliária, desenvolvido com tecnologia de ponta. Assim, você e sua equipe terão informações de qualidade e tempo para fazer uma venda mais consultiva e eficiente.</p>
                            </div>

                            <div class="item">                            
                                <img src="assets/img/icons/ico-gestao.svg" alt="Icon">
                                <h3>Gestão</h3>
                                <p>No disputado mercado imobiliário, o sucesso tem relação direta com boas práticas de gestão. Planejamento estratégico e tático bem definidos, programas de incentivo e crescimento profissional, além da mensuração constante de resultados fazem muita diferença no resultado final. A Caixa Imóveis nasceu para contribuir na criação de processos que permitam o maior retorno para os negócios de seus credenciados</p>
                            </div>

                            <div class="item">                            
                                <img src="assets/img/icons/ico-capacitacao.svg" alt="Icon">
                                <h3>Capacitação</h3>
                                <p>O desenvolvimento de novas tecnologias e o aumento da concorrência exigem do mercado imobiliário profissionais cada vez mais capacitados para atuarem na avaliação, na venda e no processo de financiamento de imóveis. A oferta de conteúdo especializado por meio de ferramentas de EAD, somada a recursos de gamificação, estão entre as prioridades de entrega da Caixa Imóveis para seus credenciados.</p>
                            </div>

                        </div>
                    </div>

                </div>
                

            </div>
        </section>

        <!-- Funil -->
        <section id="thumbs-elements">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 title text-center">
                        <h2>Funil de atuação</h2>
                        <hr>
                    </div>
                </div>
                
                <div class="row">
                    
                    <div class="col-xl-3 col-sm-6 text-center">
                        <h3>Aquisição</h3>
                        <p>A partir do Simulador Caixa, de campanhas e de canais proprietários, a Caixa Imóveis identifica clientes propensos a comprar, vender ou financiar um imóvel.</p>
                    </div>

                    <div class="col-xl-3 col-sm-6 text-center">
                        <h3>Qualificação</h3>
                        <p>Com o uso de tecnologias inteligentes, a Caixa Imóveis estuda as necessidades do usuário e transforma prospects em leads exclusivos já com crédito pré-aprovado.</p>
                    </div>

                    <div class="col-xl-3 col-sm-6 text-center">
                        <h3>Conversão</h3>
                        <p>Caixa Imóveis integra sua rede de credenciados com seus leads exclusivos e cuida para que os dois fechem negócios com rapidez, transparência e segurança.</p>
                        
                    </div>

                    <div class="col-xl-3 col-sm-6 text-center">
                        <h3>Análise</h3>
                        <p>A Caixa Imóveis mede resultados em tempo real e, a partir daí, promove melhorias na experiência de todos os envolvidos no processo de compra e venda de imóveis.</p>
                        
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