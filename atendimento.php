<!DOCTYPE html>
<html lang="pt-br">

    <title>Caixa Imóveis | Gestora</title>

    <?php
        include 'include/head.php';
    ?>

    <body class="hotSite">

        <!-- Header -->
        <header id="home" class="institucional-active neutro">
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
                                <a class="nav-link js-scroll-trigger" href="index.php">Início</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="index.php#about">Sobre a empresa</a>
                            </li>
                            <li class="nav-item" >
                                <a class="nav-link js-scroll-trigger" href="index.php#compliance">Compliance</a>
                            </li>

                            <?php
                                include 'include/mobile-menu.php';
                            ?>
                        </ul>

                        <a href="atendimento.php" class="btn btn-ghost-white my-2 my-sm-0">Atendimento</a>

                    </div>

                </div>
            </nav>
            
        </header>

        <!-- Content -->
        <section id="communContent">
            <div class="container">

                <div class="row justify-content-between">
                    <div class="col-md-5 title">
                        <h6>Atendimento</h6>
                        <h2>Este é o seu canal de comunicação com a Caixa Imóveis.</h2>
                        <hr>

                        <p>atendimento@caixaimoveis.com.br <br/>+5561 3876-0987 </p><br/>
                        <p>Edifício Corporate Parkshopping, Torre 2, sala 101. SAI/SO Área 6580, Guará – Brasília, DF. CEP 71.291-900. </p>
                        
                    </div>

                    <div class="col-md-6">
                        <p>Utilize o formulário abaixo para tirar suas dúvidas, fazer reclamações, sugestões e elogios ou para obter informações. Em breve retornaremos o seu contato.</p>

                        <br/>

                        <div class="submitTrue">
                            Sua Mensagem foi Enviada com sucesso!
                            <button class="btn btn-primary resetForm">clique aqui para enviar outra mensagem!</button>
                        </div>


                        <form id="atendimentoForm" action="sendApresentacao.php" method="post">


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="name" type="text" required />
                                        <label for="input" class="control-label">Nome</label><i class="bar"></i>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="email" type="email" required />
                                        <label for="input" class="control-label">E-mail</label><i class="bar"></i>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="mensagem" required></textarea>
                                        <label for="input" class="control-label">Mensagem</label><i class="bar"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="text-right">
                                <button class="btn btn-secondary">
                                    <span class="loadingAction hidden">
                                      <img src="assets/img/icons/icoLoading.gif">
                                      Carregando
                                    </span>

                                    <span class="message">
                                        <img src="assets/img/icons/icoSend.svg" /> Enviar
                                    </span>
                                </button>
                            </div>
                            
                        </form>

                    </div>
                </div>

            </div>
        </section>

        <iframe id="map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=Edif%C3%ADcio%20Corporate%20Parkshopping%2C%20Torre%202%2C%20sala%20102&amp;t=m&amp;z=16&amp;output=embed&amp;iwloc=near" aria-label="Edifício Corporate Parkshopping, Torre 2, sala 102"></iframe>

        <!-- Footer -->
        <?php
            include 'include/footer.php';
        ?>
    
    </body>

</html>