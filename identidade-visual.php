<?php
include_once 'layouts/header.php';
include_once 'layouts/menu.php';
include_once 'includes/logo.php';
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
                    <h1>Cause<br> Impactos</h1>
                    <h2>Faça como as grandes marcas, tenha a identidade certa para o seu negócio.
                        Aqui trabalhos toda a identidade visual da sua empresa, para que ela não seja
                        só mais um empreendimento generico no mercado digital, trabalhamos a sua diferenciação
                        desde do inicio, com conceito e profissionalismo, para que seus clientes e fornecedores
                        possam ter a percepção de marca da sua empresa.
                    </h2>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
                <form action="forms/logo" method="POST">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title" data-aos="fade-up">
                                <p>Preencha os dados abaixo</p>
                            </div>
                            <div class="form-row">
                                <input type="hidden" name="novo" value="Orçamento Identidade Visual">
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
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="mensagem" style="resize: none">Mensagem</textarea>
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
<hr>
<main id="main">
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Portfólio de <strong>Identidade Visual</strong></h2>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <?php foreach ($logos as $logo) { ?>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app" style="width: 515px;height: 355px;">
                        <div class="portfolio-wrap">
                            <img src="facite42-pa/front/assets/image/portfolio/logotipo/capas/<?= $logo->imagem ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><?= $logo->cliente ?></h4>
                                <p><?= $logo->subtitulo ?></p>
                            </div>
                            <div class="portfolio-links">
                                <a href="portfolio-details?id=<?= $logo->id ?>" title="Mais Detalhes"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </section>
    <!-- ======= Cta Section ======= -->
    <section id="cta2" class="cta2">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Cause <strong>Impacto</strong> </h2>
                <p>Tenha muito mais que uma simples logotipo</p>
            </div>
            <div class="row" data-aos="zoom-in">
                <div class="col-lg-12 text-center text-lg-left" style="margin-bottom: 6%;">
                    <p>Muito além de uma logotipo, nós planejamos em estrategias para que o impacto da sua marca seja mais intenso o possível. Durante a construção, utilizamos o branding, que é uma metodologia estratégica que deixa em foco o real valor da sua marca. Com características que ao serem vistas em qualquer lugar, automaticamente a pessoal irá associar a sua empresa.</p>
                    <p>Você também irá contar com um design próprio para o seu catalogo, folders, flyers, cartão de visita embalagens e rótulos.</p>
                </div>
            </div>
        </div>
        <div class="col-12" style="text-align: center;">
            <a href="identidade-visual#inicio" class="btn btn-success">Pedir Orcamento</a>
        </div>
    </section>
    <!-- End Cta Section -->
</main>
<?php
include_once 'layouts/footer.php';
?>