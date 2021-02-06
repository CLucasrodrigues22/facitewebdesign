<?php
include_once 'layouts/header.php';
include_once 'layouts/menu.php';
?>
<section id="inicio">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
                <div>
                    <h1>Criação de sites profissionais</h1>
                    <h2>Elaboramos e produzimos os melhores sites, lojas virtuais, sites em wordpress e identidade visual para o seu negócio.</h2>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
                <form action="forms/orcamento" method="POST">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title" data-aos="fade-up">
                                <p>Preencha os dados abaixo</p>
                            </div>
                            <div class="form-row">
                                <input type="hidden" name="novo" value="Novo Orçamento">
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
                                    <select id="inputState" class="form-control" name="servico" required>
                                        <option selected>Tipo de serviço</option>
                                        <option value="CriacaoDeSite">Criação de sites</option>
                                        <option value="WordPress">Site em WordPress</option>
                                        <option value="Ecommerce">Loja Virtual</option>
                                        <option value="IdentidadeVisual">Identidade Visual</option>
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
        <div class="container" style="margin-bottom: 4%;">
            <div class="section-title" data-aos="fade-up">
                <h2>Serviços</h2>
                <p>Confira todos os serviços em que somos especializados</p>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
                    <div class="icon-box icon-box-pink">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4 class="title"><a href="">Criação de sites</a></h4>
                        <p class="description">Site institucional, hotsite, blog pessoal ou corporativo? precisa de algum desses? Conte conosco para esse proximo passo em seu negócio.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box icon-box-cyan">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4 class="title"><a href="">Sites em WordPress</a></h4>
                        <p class="description">Tenha seu seu site, blog e portal web em totalmente em WordPress, com facil gerenciamento de conteudo e otimizado para buscas no Google.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box icon-box-green">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4 class="title"><a href="inicio">Loja Virtual</a></h4>
                        <p class="description">Tenha uma interface elaborada para a realização de vendas online, totalmente completa com integração aos correios, controle de estoque e muito mais.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box icon-box-blue">
                        <div class="icon"><i class="bx bx-world"></i></div>
                        <h4 class="title"><a href="">Identidade Visual</a></h4>
                        <p class="description">Toda marca precisa ter sua propria identidade, com um design unico e definido. Ter uma identidade visual é essencial para a asserção da sua marca e todas as midias.</p>
                    </div>
                </div>

            </div>

        </div>
        <div class="col-12" style="text-align: center;">
            <a href="#inicio" class="btn btn-success">Pedir Orcamento</a>
        </div>
    </section>
    <!-- End Services Section -->
</main>
<?php
include_once 'layouts/footer.php';
?>