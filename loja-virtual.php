<?php
include_once 'layouts/header.php';
include_once 'layouts/menu.php';
?>

<section id="inicio">
    <div class="container">
        <?php
        $modal = ($_GET['msg'] == 'errorMsg' ? '<div class="alert alert-danger fade in alert-dismissible show"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true" style="font-size:20px">&times;</span> </button>    <strong>Erro ao enviar mensagem,</strong> tente novamente mais tarde! </div>' : '');
        echo $modal;
        ?>
        <?php
        $modal2 = ($_GET['msg'] == 'true' ? '<div class="alert alert-success fade in alert-dismissible show"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true" style="font-size:20px">&times;</span> </button>    <strong>Mensagem enviada com sucesso!</strong> em breve iremos entrar em contato com você! </div>' : '');
        echo $modal2;
        ?>
        <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
                <div>
                    <h1>Criação de <br> Loja Virtual </h1>
                    <h2>Tenha uma plataforma intuitiva, completa, totalmente personalizada e profissional para vendas online com várias funcionalidades.</h2>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
                <form action="forms/loja" method="POST">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title" data-aos="fade-up">
                                <p>Preencha os dados abaixo</p>
                            </div>
                            <div class="form-row">
                                <input type="hidden" name="novo" value="Orçamento Loja Virtual">
                                <div class="form-group col-md-6">
                                    <input class="form-control" type="text" placeholder="Nome" name="nome" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input class="form-control" type="email" placeholder="E-mail" name="email" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input class="form-control" type="text" placeholder="Telefone" name="telefone" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input class="form-control" type="text" placeholder="Empresa" name="empresa" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <select id="inputState" class="form-control" name="qtd" required>
                                        <option selected>Quantidade de produtos</option>
                                        <option value="0a50">0 - 50 produtos</option>
                                        <option value="50a100">50 - 100 produtos</option>
                                        <option value="100+">Mais de 100 produtos</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button style="float: left;" type="submit" class="btn btn-success">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</section>

<main id="main">
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Uma plataforma <strong>completa</strong> </h2>
                <p>Confira todas as funcionalidades da sua loja virtual terá:</p>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-5" data-aos="zoom-in">
                    <div class="icon-box icon-box-pink">
                        <div class="icon" style="padding-bottom: 10px;"><img src="assets/img/dispositivos.png" alt=""></div>
                        <h4 class="title"><a href="">Layout Responsivo</a></h4>
                        <p class="description">Sua loja estará acessível em qualquer dispositivo, com todos os detalhes em seus devidos lugares e com um layout exclusivo.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-5" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box icon-box-cyan">
                        <div class="icon" style="padding-bottom: 10px;"><img src="assets/img/caminhao-de-entrega.png" alt=""></div>
                        <h4 class="title"><a href="">Integração com Correios</a></h4>
                        <p class="description">Cálculos de frete automático usando uma integração com os correios, o preço se baseará nas dimensões do seu produto.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-5" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box icon-box-green">
                        <div class="icon" style="padding-bottom: 10px;"><img src="assets/img/toque.png" alt=""></div>
                        <h4 class="title"><a href="inicio">Integração com Meios De Pagamento</a></h4>
                        <p class="description">Tenha em seu site varios tipos de pagamentos disponiveis, como <strong>PagSeguro, Paypal, Mercado Pago</strong>.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-5" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box icon-box-blue">
                        <div class="icon" style="padding-bottom: 10px;"><img src="assets/img/roupas.png" alt=""></div>
                        <h4 class="title"><a href="">Controle de estoque</a></h4>
                        <p class="description">Controle o seu estoque com precisão, com variados tipos de categoria, como controle de tamanho e controle de quantidade.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-5" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box icon-box-brown">
                        <div class="icon" style="padding-bottom: 10px;"><img src="assets/img/trabalho-em-equipe.png" alt=""></div>
                        <h4 class="title"><a href="">Controle de usuário</a></h4>
                        <p class="description">Um controle total sobre seus funcionários, com regras de permissão para cada tipo de cargo, e um usuário ‘master’, onde o mesmo poderá controlar tudo.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-5" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box icon-box-red">
                        <div class="icon" style="padding-bottom: 10px;"><img src="assets/img/comprovante.png" alt=""></div>
                        <h4 class="title"><a href="">Criação de cupons de desconto</a></h4>
                        <p class="description">Você terá total liberdade em criar cupons de descontos e configurar o número de cupons, validade e muito mais.</p>
                    </div>
                </div>
            </div>
            <div class="col-12" style="text-align: center;">
                <a href="#hero" class="btn btn-success">Pedir Orcamento</a>
            </div>
        </div>
    </section>
    <!-- End Services Section -->
</main>
<?php
include_once 'layouts/footer.php';
?>