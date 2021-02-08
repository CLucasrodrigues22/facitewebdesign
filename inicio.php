<?php
include_once 'layouts/header.php';
include_once 'layouts/menu.php';
include_once 'includes/faqRec.php';
include_once 'includes/sites.php';
include_once 'includes/faqRec.php';
include_once 'includes/avaliacao.php';
include_once 'includes/servicos.php';
?>

<section id="inicio">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
        <div>
          <h1>Criação de sites profissionais</h1>
          <h2>Elaboramos e produzimos os melhores sites, lojas virtuais e sites em wordpress para o seu negócio esteja um passo a frente.</h2>
          <a href="orcamento" class="btn-get-started scrollto">Faça seu orçamento</a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
        <img src="assets/img/inicio.png" class="img-fluid" alt="">
      </div>
    </div>
  </div>

</section>

<main id="main">

  <!-- ======= Features Section ======= -->
  <section id="features" class="features">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h1>Por que ter um site?</h1>
      </div>
      <div class="row">
        <div class="col-lg-6 mt-2 mb-tg-0 order-2 order-lg-1">
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item" data-aos="fade-up">
              <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                <h4>Atrai investimento em sua ideia</h4>
                <p>Ter um site é a principal forma para atrair novos clientes.
                  Muito além do seu bairro ou cidade, ter um site para o seu negócio,
                  irá fazer com que pessoas de todo o mundo conheçam o sua empresa.
                </p>
              </a>
            </li>
            <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="100">
              <a class="nav-link" data-toggle="tab" href="#tab-2">
                <h4>Credibilidade para sua empresa</h4>
                <p>Tendo um site, você poderá fornecer todas as informações que seus clientes precisa saber sobre seu negócio,
                  como produtos, serviços, valores, visão, endereço e muitas outras informações que possam
                  está facilitando o contato do cliente com sua empresa.
                </p>
              </a>
            </li>
            <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="200">
              <a class="nav-link" data-toggle="tab" href="#tab-3">
                <h4>Aumento nas suas vendas</h4>
                <p>Já pensou em ter um aumento nas suas vendas em grande escala?
                  Tendo seu produto divulgado muito além deu seu bairro ou cidade?
                  Você pode! Tendo um site, sua empresa não terá fronteiras, atingindo
                   o público em todo o país, e gerando um aumento em seu faturamento.
                </p>
              </a>
            </li>
            <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="300">
              <a class="nav-link" data-toggle="tab" href="#tab-4">
                <h4>Estimação de estáticas e resultados</h4>
                <p>Recolher dados de possíveis clientes visitam o seu site,
                  e demostram interesse por tal, é uma “mão na roda”. Com isso,
                  é possível ter um histórico com detalhes e, facilitando futuras
                  negociações em eles, definindo um ambiente propicio para possíveis
                  novas visitas.
                </p>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <figure>
                <img src="assets/img/clientes.png" alt="" class="img-fluid">
              </figure>
            </div>
            <div class="tab-pane" id="tab-2">
              <figure>
                <img src="assets/img/credibilidade.png" alt="" class="img-fluid">
              </figure>
            </div>
            <div class="tab-pane" id="tab-3">
              <figure>
                <img src="assets/img/vendas.png" alt="" class="img-fluid">
              </figure>
            </div>
            <div class="tab-pane" id="tab-4">
              <figure>
                <img src="assets/img/resultado.png" alt="" class="img-fluid">
              </figure>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Features Section -->



  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" style="margin-bottom: 3%;">

      <div class="section-title" data-aos="fade-up">
        <h2>Serviços</h2>
        <p>Confira todos os serviços em que somos especializados.</p>
      </div>

      <div class="row">

        <?php foreach ($servicos as $servico) { ?>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box icon-box-blue">
              <div class="icon"><img src="facite42-pa/front/assets/image/servico/<?= $servico->imagem ?>" alt=""></div>
              <h4 class="title"><a href=""><?= $servico->titulo ?></a></h4>
              <p class="description"><?= $servico->descricao ?></p>
            </div>
          </div>
        <?php } ?>

      </div>

    </div>
    <div class="col-12" style="text-align: center;">
      <a href="orcamento" class="btn btn-success">Pedir Orcamento</a>
    </div>
  </section>
  <!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Portfólio de <strong>Sites</strong></h2>
        <p>Veja abaixo o resultado de muito trabalho e dedicação em nossos serviços.</p>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <?php foreach ($sites as $site) { ?>
          <div class="col-lg-4 col-md-6 portfolio-item" style="width: 515px;height: 355px;">
            <div class="portfolio-wrap">
              <img src="facite42-pa/front/assets/image/portfolio/site/<?= $site->imagem ?>" class="img-fluid" style="width: 393px;height: 262px;">
              <div class="portfolio-info">
                <h4><?= $site->nomeSite ?></h4>
                <p><?= $site->categoria ?></p>
              </div>
              <div class="portfolio-links">
                <a href="<?= $site->link ?>" title="Visitar Site" target="__blank"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        <?php } ?>

      </div>

  </section>
  <!-- End Portfolio Section -->

  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container">

      <div class="row" data-aos="zoom-in">
        <div class="col-lg-9 text-center text-lg-left">
          <h3>Controle total para seu negócio</h3>
          <p>Criamos a melhor plataforma para gerenciar conteúdo para a sua empresa. Tenha um painel administrativo onde você poderá ter autonomia para está atualizado <strong>imagens</strong>, <strong>textos</strong>, <strong>videos</strong> e muito mais.</p>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <a class="btn btn-success" href="orcamento">Faça seu orçamento</a>
        </div>
      </div>

    </div>
  </section>
  <!-- End Cta Section -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Avaliações</h2>
        <p>Veja o que nossos clientes tem para dizer sobre nossos serviços</p>
      </div>

      <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="100">

        <?php foreach ($avaliacoes as $avaliacao) { ?>
          <div class="testimonial-item">
            <p style="height: 215px; text-align: center;">
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              <?= $avaliacao->descricao ?>
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="facite42-pa/front/assets/image/avaliacao/<?= $avaliacao->imagem ?>" class="testimonial-img" style="height: 90px;">
            <h3><?= $avaliacao->cliente ?></h3>
            <h4><?= $avaliacao->empresa ?></h4>
          </div>
        <?php } ?>

      </div>

    </div>
  </section>
  <!-- End Testimonials Section -->

  <!-- ======= F.A.Q Section ======= -->
  <section id="faq" class="faq">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Perguntas Frequentes</h2>
      </div>
      <?php foreach ($faqs as $faq) { ?>
        <ul class="faq-list">
          <li data-aos="fade-up" data-aos-delay="100">
            <a data-toggle="collapse" href="#faq2" class="collapsed"><strong><?= $faq->pergunta ?></strong><i class="icofont-simple-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
                <?= $faq->resposta ?>
              </p>
            </div>
          </li>
        </ul>
      <?php } ?>
    </div>
  </section>

</main>

<?php
include_once 'layouts/footer.php';
?>