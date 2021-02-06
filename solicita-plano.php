<?php
include_once 'layouts/header.php';
include_once 'layouts/menu.php';
?>
<section id="inicio">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
                <div>
                    <?php
                    $titulo = '';
                    if ($_GET['plano'] == 'basico') {
                        $titulo = '<h1>Solicitação de Plano Básico</h1>';
                        echo $titulo;
                    } elseif ($_GET['plano'] == 'intermedario') {
                        $titulo = '<h1>Solicitação de Plano Intermediário</h1>';
                        echo $titulo;
                    } else {
                        $titulo = '<h1>Solicitação de Plano Premium</h1>';
                        echo $titulo;
                    }
                    ?>
                    <h2>Um plano perfeito para para seu blog pessoal/empresarial, Landing page ou One Page. Com um painel administrativo para gerenciar seu conteudo.</h2>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
                <form action="forms/plano" method="POST">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title" data-aos="fade-up">
                                <p>Preencha os dados abaixo</p>
                            </div>
                            <div class="form-row">
                                <input type="hidden" name="novo" value="Solicitação de plano">
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
                                <div class="form-group col-md-6">
                                    <input class="form-control" type="text" placeholder="Site de Exemplo (url)" name="url" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <?php
                                    $plano = '';
                                    if ($_GET['plano'] == 'basico') {
                                        $plano = 'Plano Básico';
                                    } elseif ($_GET['plano'] == 'intermedario') {
                                        $plano = 'Plano Intermediário';
                                    } else {
                                        $plano = 'Plano Premium';
                                    }
                                    ?>
                                    <input class="form-control" type="text" id="" name="plano" value="<?php echo $plano; ?>" readonly>
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
    <section id="pricing" class="pricing section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Outros <strong>planos</strong></h2>
                <p>Mudou de ideia quanto ao plano escolhido? reveja abaixo nossos outros planos e escolha o mais adequado para o seu negócio 🚀</p>
            </div>

            <div class="row">
                <?php
                $planos = '';
                if ($_GET['plano'] == 'basico') {
                    $planos = '<div class="col-lg-6 col-md-6 mt-4 mt-lg-0"><div class="box" data-aos="zoom-in" data-aos-delay="200"> <h2>Plano <strong>Intermediário</strong></h2><br> <ul> <li>Site Institucional, Catálogo</li> <li>Tudo do <strong>Plano Básico</strong></li> <li>Número de páginas ilimitadas</li> <li>Painel Administrativo</li> <li>Controle total de conteúdo</li> <li>E-mail com armazenamento ilimitado</li> <li>Suporte gratuito</li> <li>Marketing sob contratação</li> </ul> <div class="btn-wrap"> <a href="solicita-plano?plano=intermedario" class="btn btn-success">QUERO ESSE PLANO</a> </div> </div> </div> <div class="col-lg-6 col-md-6 mt-4 mt-lg-0"> <div class="box" data-aos="zoom-in" data-aos-delay="300"> <!-- <span class="advanced">Advanced</span> --> <h2>Plano <strong>Premium</strong></h2><br> <ul> <li>Site dinâmico, portais</li> <li>Tudo do <strong>Plano Básico</strong></li> <li>Tudo do <strong>Plano Intermediário</strong></li> <li>Domínio gratuito</li> <li>Certificação SSL gratuita</li> <li>Hospedagem em servidores 100% SSD</li> <li>Otimização SEO para Buscas no Google</li> <li>Métricas de segurança avançadas</li> </ul> <div class="btn-wrap"> <a href="solicita-plano?plano=premium" class="btn btn-success">QUERO ESSE PLANO</a> </div> </div> </div>';
                    echo $planos;
                } elseif ($_GET['plano'] == 'intermedario') {
                    $planos = '<div class="col-lg-6 col-md-6 mt-4 mt-md-0"> <div class="box" data-aos="zoom-in" data-aos-delay="100"> <h2>Plano<strong> Básico </strong></h2><br> <ul> <li>Blog, Landing Page ou One Page</li> <li>Layout exclusivo sob medida</li> <li>Design responsivo</li> <li>Integração com Google Maps</li> <li>Integração com redes sociais</li> <li>Galeria de imagens</li> <li>Suporte sob contratação</li> <li>Marketing sob contratação</li> </ul> <div class="btn-wrap"> <a href="solicita-plano?plano=basico" class="btn btn-success">QUERO ESSE PLANO</a> </div> </div> </div><div class="col-lg-6 col-md-6 mt-4 mt-lg-0"> <div class="box" data-aos="zoom-in" data-aos-delay="300"> <!-- <span class="advanced">Advanced</span> --> <h2>Plano <strong>Premium</strong></h2><br> <ul> <li>Site dinâmico, portais</li> <li>Tudo do <strong>Plano Básico</strong></li> <li>Tudo do <strong>Plano Intermediário</strong></li> <li>Domínio gratuito</li> <li>Certificação SSL gratuita</li> <li>Hospedagem em servidores 100% SSD</li> <li>Otimização SEO para Buscas no Google</li> <li>Métricas de segurança avançadas</li> </ul> <div class="btn-wrap"> <a href="solicita-plano?plano=premium" class="btn btn-success">QUERO ESSE PLANO</a> </div> </div> </div>';
                    echo $planos;
                } else {
                    $planos = '<div class="col-lg-6 col-md-6 mt-4 mt-md-0"> <div class="box" data-aos="zoom-in" data-aos-delay="100"> <h2>Plano<strong> Básico </strong></h2><br> <ul> <li>Blog, Landing Page ou One Page</li> <li>Layout exclusivo sob medida</li> <li>Design responsivo</li> <li>Integração com Google Maps</li> <li>Integração com redes sociais</li> <li>Galeria de imagens</li> <li>Suporte sob contratação</li> <li>Marketing sob contratação</li> </ul> <div class="btn-wrap"> <a href="solicita-plano?plano=basico" class="btn btn-success">QUERO ESSE PLANO</a> </div> </div> </div><div class="col-lg-6 col-md-6 mt-4 mt-lg-0"><div class="box" data-aos="zoom-in" data-aos-delay="200"> <h2>Plano <strong>Intermediário</strong></h2><br> <ul> <li>Site Institucional, Catálogo</li> <li>Tudo do <strong>Plano Básico</strong></li> <li>Número de páginas ilimitadas</li> <li>Painel Administrativo</li> <li>Controle total de conteúdo</li> <li>E-mail com armazenamento ilimitado</li> <li>Suporte gratuito</li> <li>Marketing sob contratação</li> </ul> <div class="btn-wrap"> <a href="solicita-plano?plano=intermedario" class="btn btn-success">QUERO ESSE PLANO</a> </div> </div> </div>';
                    echo $planos;
                }
                ?>
            </div>
        </div>
    </section>
</main>
<?php
include_once 'layouts/footer.php';
?>