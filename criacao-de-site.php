<?php
include_once 'layouts/header.php';
include_once 'layouts/menu.php';
?>

<section id="inicio">
    <div class="container">
        <?php
        $modal = ($_GET['msg'] == 'true' ? '<div class="alert alert-success fade in alert-dismissible show"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true" style="font-size:20px">&times;</span> </button>    <strong>Mensagem enviada com sucesso!</strong> em breve iremos entrar em contato com você! </div>' : '');
        echo $modal;
        ?>
        <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
                <div>
                    <h1>Criação de sites</h1>
                    <h2>Está precisnado de um site institucional? Ecomerce? Blog pessoa ou comporativo?
                        Hotsite? Ou uma modalidade de site especifica para o sua empresa?
                        O lugar é aqui, podendo começar planos incriveis que atendem desde do básico
                        na sua empresa até soluções mais avançadas, tudo para você investir
                        no seu crescimento, chegando nos seus clientes e fornecedores com qualidade,
                        segurança e profissionalismo.
                    </h2>
                    <a href="#pricing" class="btn-get-started scrollto">Veja Nossos Planos</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
                <img src="assets/img/criacaodesite.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<main id="main">
    <section id="pricing" class="pricing section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Planos <strong>Sites</strong></h2>
                <p>Aqui estão nossos planos para criação de sites, agora, escolha o melhor plano e invista no crescimento do seu negócio. 🚀</p>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="100">
                        <span class="advanced" title="Mais Informações" data-toggle="modal" data-target="#planobasico"><i class="fas fa-info-circle"></i></span>
                        <h2>Plano<strong> Básico </strong></h2><br>
                        <ul>
                            <li>Blog, Landing Page ou One Page</li>
                            <li>Layout exclusivo sob medida</li>
                            <li>Design responsivo</li>
                            <li>Integração com Google Maps</li>
                            <li>Integração com redes sociais</li>
                            <li>Galeria de imagens</li>
                            <li>Suporte sob contratação</li>
                            <li>Marketing sob contratação</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="solicita-plano?plano=basico" class="btn btn-success">QUERO ESSE PLANO</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="200">
                        <span class="advanced" title="Mais Informações" data-toggle="modal" data-target="#planointermediario"><i class="fas fa-info-circle"></i></span>
                        <h2>Plano <strong>Intermediário</strong></h2><br>
                        <ul>
                            <li>Site Institucional, Catálogo</li>
                            <li>Tudo do <strong>Plano Básico</strong></li>
                            <li>Número de páginas ilimitadas</li>
                            <li>Painel Administrativo</li>
                            <li>Controle total de conteúdo</li>
                            <li>E-mail com armazenamento ilimitado</li>
                            <li>Suporte gratuito</li>
                            <li>Marketing sob contratação</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="solicita-plano?plano=intermedario" class="btn btn-success">QUERO ESSE PLANO</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="300">
                        <span class="advanced" title="Mais Informações" data-toggle="modal" data-target="#planopremium"><i class="fas fa-info-circle"></i></span>
                        <h2>Plano <strong>Premium</strong></h2><br>
                        <ul>
                            <li>Site dinâmico, portais</li>
                            <li>Tudo do <strong>Plano Básico</strong></li>
                            <li>Tudo do <strong>Plano Intermediário</strong></li>
                            <li>Domínio gratuito</li>
                            <li>Certificação SSL gratuita</li>
                            <li>Hospedagem em servidores 100% SSD</li>
                            <li>Otimização SEO para Buscas no Google</li>
                            <li>Métricas de segurança avançadas</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="solicita-plano?plano=premium" class="btn btn-success">QUERO ESSE PLANO</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>

<div class="modal fade" id="planobasico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><strong>Sobre o Plano Básico</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Ideal para você que quer vender mais, um produto ou serviço especifico, ou
                    até mesmo criar mais autoridade com conteúdos.</p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="planointermediario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><strong>Sobre o Plano Intermediário</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Esse site é para mostrar a sua empresa ou ideia ao mundo, deixe que todos
                    vejam como é seu processo de produção, seus diferenciais, a sua história.
                    Com um site desses você chega com estilo na internet, abrindo para o destaque que merece.</p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="planopremium" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><strong>Sobre o Plano Premium</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Está precisando de um site completo que atenda desde das visitas básicas
                    até as vendas finalizadas, então essa é a opção.
                    Design, conteúdo, segurança e velocidade, tudo é um só lugar, um site completo
                    para atender a todas as demandas da sua empresa no meio digital.</p>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'layouts/footer.php';
?>