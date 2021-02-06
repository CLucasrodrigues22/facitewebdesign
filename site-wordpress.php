<?php
include_once 'layouts/header.php';
include_once 'layouts/menu.php';
?>

<section id="inicio">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
                <div>
                    <h1>Criação de sites <br> em WordPress </h1>
                    <h2>O WordPress é sem dúvida a melhor e maior plataforma para gerenciamento de conteudo na web. Com um painel administrativo bastante intuitivo e dinamico, você poderá gerenciar todo o seu site sem complicações.</h2>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
                <form action="forms/wordpress" method="POST">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title" data-aos="fade-up">
                                <p>Preencha os dados abaixo</p>
                            </div>
                            <div class="form-row">
                                <input type="hidden" name="novo" value="Orçamento Site Wordpress">
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
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="mensagem" style="resize: none" placeholder="Mensagem"></textarea>
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
                <h1>Sites em <strong>WordPress</strong></h1>
                <p>O melhor gerenciador de conteudo da internet 🔝</p>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="100" style="height: 440px;">
                        <h2>O lugar certo</h2><br>
                        <p style="text-align: left;">Isso mesmo! aqui na Facite Web Design é o lugar certo para você dar inicio a evolução do seu negócio. Somos uma agencia de web design esepecializada em criação de sites profissionais e plataformas de venda em wordpress, para gerar credibilidade e resultados para o seu negocio.</p>
                        <p style="text-align: left;">Em nossos serviços, levamos em consideração a criação de sites com layouts 100% responsivos, exclusivo e dinamico, com uma area exclusiva onde você, poderá gerenciar todo o conteudo de seu site, desde <strong>textos, imagens, videos</strong> até a criação de novas <strong>páginas.</strong></p>
                        <p style="text-align: left;">Além de tudo isso, você terá seu site totalmente sob medida e nas primeiras posições de busca no <strong>Google</strong>, para ter mais visibilidade.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mt-4 mt-lg-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="200" style="height: 440px;">
                        <h2>Serviço Completo</h2><br>
                        <p style="text-align: left;">Ter um site para seu negócio é além de gerar confiança, também dar a impressao de ser maior e mais bem-sucedida no mercado. Com um site, seu negócio irá ultrapassar fronteiras, não depedendo de clientes apenas em seu bairro ou cidade, mas atingindo todo o mundo, atravez de um otimo trabalho de SEO e Marketign Digital.</p>
                        <h6 style="text-align: left;"><strong> Entregaremos seu site com...</strong></h6>
                        <p style="text-align: left;">Ferramenta de edição de layout, Otimizado para estar nas primeiras posiçoes do Google, Treinamento para uso do site, Suporte/manuntenção do site e Hospedagem gratuita.</p>
                        <p style="text-align: left;">Então não perca mais tempo e faça sua empresa esta um passo a frente da concorrencia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
include_once 'layouts/footer.php';
?>