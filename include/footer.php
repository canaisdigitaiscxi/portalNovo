<footer id="contact">
    <div class="container">

        <div class="row">

            <div class="col-md-4 title">
                <h2>Institucional</h2>
                <hr>
                <ul class="mapLinks">
                    <li>
                        <a class="js-scroll-trigger" href="#about">Sobre a empresa</a>
                    </li>
                    <li>
                        <a href="atendimento.php">Atendimento</a>
                    </li>
                    <li>
                        <a href="politica-de-privacidade.php">Política de privacidade</a>
                    </li>
                    <li>
                        <a href="termos-e-condicoes-de-uso.php">Termos de uso</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4 title">
                <h2>Corporativo</h2>
                <hr>

                <ul class="mapLinks">
                    <li>
                        <a href="#" data-toggle="modal" data-target="#modalApresentacaoForm">Solicite uma apresentação</a>
                    </li>
                    <li>
                        <a href="gestora.php">Gestora</a>
                    </li>
                    <li>
                        <a href="http://www.caixaimoveisavaliacoes.com.br/" target="_blank">Caixa Imóveis Avaliações</a>
                    </li>
                    <li>
                        <a href="mercado.php">Para o Mercado</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4 title data">
                <h2>Entre em contato</h2>
                <hr>
                <p>atendimento@caixaimoveis.com.br <br/>+5561 3876-0987</p>
                <p>Edifício Corporate Parkshopping, Torre 2, sala 101. SAI/SO Área 6580, Guará – Brasília, DF. CEP 71.291-900.</p>
            </div>

        </div>

        <div class="row subfooter">
            
            <div class="col-6">
                <span class="logo"></span>
            </div>

            <div class="col-6 text-right social">
                <a target="_blank" class="facebook" href="https://facebook.com/caixaimoveisoficial"></a>
                <a target="_blank" class="instagram" href="https://instagram.com/instadacaixaimoveis"></a>
                <a target="_blank" class="linkedin" href="https://www.linkedin.com/company/caixa-imoveis/"></a>
            </div>


            <div class="col-md-12">
                <hr>
            </div>

            <div class="col-md-8">
                <small>A Caixa Imóveis é uma empresa pertencente ao conglomerado da CAIXA ECONÔMICA FEDERAL, que atua como correspondente bancário para intermediar o processo de contratação de crédito. Como correspondente bancário, seguimos as diretrizes do Banco Central do Brasil, nos termos da Resolução nº 3.954 de 24 de fevereiro de 2011. CNPJ/MF nº 14.841.292/0001-08. CRECI: CJ - 22381.</small>
            </div>

            <div class="col-md-4 text-right">
                <img src="assets/img/logoGlobalSign.png">
            </div>
        </div>

    </div>
</footer>

<!-- Solicite Apresentação -->
<div class="modal fade" id="modalApresentacaoForm" tabindex="-1" role="dialog" aria-labelledby="modalApresentacaoFormTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="modalApresentacaoFormTitle">Solicite uma apresentação</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="alert alert-success hidden" role="alert">
            Mensagem enviada com sucesso! <br/>
            Em breve retornaremos o seu contato.
        </div>

        <form id="apresentacaoForm" action="sendApresentacao.php" method="post">
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
                <div class="col-md-4">
                    <div class="form-group">
                        <input class="phone" name="phone" type="text" required />
                        <label for="input" class="control-label">Telefone</label><i class="bar"></i>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <input name="cidade" type="text" required />
                        <label for="input" class="control-label">Cidade</label><i class="bar"></i>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <select name="estado">
                            <option value="Acre">Acre</option>
                            <option value="Alagoas">Alagoas</option>
                            <option value="Amapá">Amapá</option>
                            <option value="Amazonas">Amazonas</option>
                            <option value="Bahia">Bahia</option>
                            <option value="Ceará">Ceará</option>
                            <option value="Distrito Federal">Distrito Federal</option>
                            <option value="Espirito Santo">Espirito Santo</option>
                            <option value="Goiás">Goiás</option>
                            <option value="Maranhão">Maranhão</option>
                            <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                            <option value="Mato Grosso">Mato Grosso</option>
                            <option value="Minas Gerais">Minas Gerais</option>
                            <option value="Pará">Pará</option>
                            <option value="Paraíba">Paraíba</option>
                            <option value="Paraná">Paraná</option>
                            <option value="Pernambuco">Pernambuco</option>
                            <option value="Piauí">Piauí</option>
                            <option value="Rio de Janeiro">Rio de Janeiro</option>
                            <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                            <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                            <option value="Rondônia">Rondônia</option>
                            <option value="Roraima">Roraima</option>
                            <option value="Santa Catarina">Santa Catarina</option>
                            <option value="São Paulo">São Paulo</option>
                            <option value="Sergipe">Sergipe</option>
                            <option value="Tocantins">Tocantins</option>
                        </select>
                        <label for="input" class="control-label">Estado</label><i class="bar"></i>
                    </div>

                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea name="mensagem"></textarea>
                        <label for="input" class="control-label">Mensagem</label><i class="bar"></i>
                    </div>
                </div>
            </div>

            <div class="row justify-content-md-center">
                <div class="col-md-12 text-center">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>

                    <button type="submit" name="button" class="btn btn-secondary">

                        <span class="loadingAction hidden">
                          <img src="assets/img/icons/icoLoading.gif">
                          Carregando
                        </span>

                        <span class="message">
                            <img src="assets/img/icons/icoSend.svg" /> Enviar
                        </span>

                    </button>
                </div>

            </div>

        </form>
      </div>

    </div>
  </div>
</div>

<script type="text/javascript" src="lib/js/jquery.min.js"></script>
<script type="text/javascript" src="lib/js/jquery.easing.min.js"></script>

<script type="text/javascript" src="lib/js/bootstrap.min.js"></script>

<script type="text/javascript" src="lib/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="lib/js/jquery.mask.js"></script>
<script type="text/javascript" src="lib/js/jquery.validate.min.js"></script>

<script type="text/javascript" src="assets/js/main.js"></script>